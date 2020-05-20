# FP PBKK - Siaga Covid
## Langkah Menjalankan Program
* Silahkan clone atau download repo ini
* Copy file settings.example.php pada /apps/config/ lalu paste file di /apps/config/ dengan nama settings.php
* Dapatkan key di mapbox (https://account.mapbox.com/) dan rapidapi (https://rapidapi.com/astsiatsko/api/coronavirus-monitor)
* Isikan key yang di dapat pada settings.php bagian KEY_MAPBOXAPI dan KEY_RAPIDAPI
* Buat database dan impor file pbkk_covid_terbaru.sql
* Ubah url pada base url, /apps/modules/wilayah/views/index_wilayah.php, dan /apps/views/admin/admin_index_wilayah.php
* Ubah juga /apps/config/database.php sesuai dengan database yang telah anda buat
* Jalankan pada url host/folder/public
* Untuk mengakses halaman admin, kita harus login terlebih dahulu pada url host/folder/public/login dengan username 'admin' dan password 'password'

