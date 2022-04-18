# Ticketing API BOT

Proyek ini adalah proyek kami selama program Magang Perguruan Tinggi.

kami menggunakan BotMan dan Laravel Sanctum sebagai lib.

# Table of contents

- [Installation](#installation)
- [RouteList](#routelist)
- [Usage](#usage)

# Installation

[(Back to top)](#table-of-contents)

1. Install php (disarankan menggunakan, version >= 7.3).
2. Clone repo ini.
3. Install library yang dibutuhkan dan mendapakat key

    ```json
    composer install
    php artisan key:generate
    ```

4. Install library dari botman untuk bot telegram.

    ```json
    composer require botman/botman
    composer require botman/driver-web
    composer require botman/driver-telegram
    ```

5. Lakukan integrasi dari aplikasi dengan telegram.
  
  <img src="/image_read/setwebhook.png" title="Screenshot 5"/>

6. Selesai.

# RouteList

## AUTH ROUTES

    ``` 
    /auth/login
    /auth/register
    ```

## RESOURCE ROUTE (POST,PUT,GET,DELETE)
  
  *BAWA HEADER Authorization*
    ```
    /users
    /admins
    /instances
    /installations
    /managers
    /programmers
    /report_installations
    /report_photos
    /report_components
    /technicians
    /technician_instances
    /ticketings
    /ticket_solves
    /technician_installations
    /categories
    /components
    /me
    ```

## ROUTES HANYA POST UNTUK GAMBAR DAN LOGOUT

    ```
    /instances/update_instance
    /reportphotos/update_report_photo
    /auth/logout
    ```

# Usage

[(Back to top)](#table-of-contents)

Di sini kami memiliki beberapa tangkapan layar tentang cara kerja aplikasi web kami.
Untuk test API bisa menggunakan postman.
Untuk menggunakan bot, bisa mengetik '/start, start, atau mulai'.

### 📸

- Menyisipkan banyak gambar

  <img src="/image_read/insertmultiple.png" title="Screenshot 1"/>

- Gagal jika pengguna tidak diautentikasi

  <img src="/image_read/failedunauthenticated.png" title="Screenshot 2"/>

- Berhasil jika pengguna diautentikasi

  <img src="/image_read/reportphotosuccess.png" title="Screenshot 3"/>

- Bot Telegram (ditujukan untuk keluhan pengguna)

  <img src="/image_read/chatbot.png" title="Screenshot 4"/>
