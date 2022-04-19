## SISTEM APLIKASI PELAPORAN INSTALASI & TICKETING BERBASIS ANDROID 

Ini merupakan proyek yang kami kerjakan  selama program Magang Perguruan Tinggi pada CV Nakula Sadewa. Pada proyek ini yang pertama kami membuat aplikasi menggunakan Laravel untuk dapat membuat Pelaporan_Instalasi_API yang dapat menghubungkan pada proyek file android studio.

File android terbagi menjadi 2 yaitu : android-api (yang merupakan web apinya dari file android), android merupakan file versi android studio. Untuk dapat menjalankan aplikasi dianjurkan mengaktifkan android-api versi web dengan file android versi android studio


## Table of contents

- [Installation](#installation)
- [Cara Penggunaan](#cara-penggunaan-sistem)
- [Tampilan](#tampilan-sistem)

## Installation
[(Back to top)](#table-of-contents)

## Perangkat yang dibutuhkan
1.	Laragon : untuk dapat mengaktifkan android-api yang dapat menghubungkan ke file versi android studio saat menjalankan aplikasi
2.	Laravel 8
3.	Android Studio
4.	Browser
5.	Github
6.  CMD 1
7.  CMD 2

## Cara Instalasi Web
1.	Pastikan perangkat yang dibutuhkan telah tersedia dan sesuai. 
2.	Clone project sebelumnya android-api, dan android dengan git pada folder yang dibutuhkan. 
3.	Buka project yang telah tersedia pada Vscode.  

## Cara Penggunaan Sistem
[(Back to top)](#table-of-contents)
1. Pertama buka file project react (file android yang telah di download)
2. Buka 2 cmd pada file project
3. Pada cmd 1, ketik => npm start
- Contoh gambar

![npm start](https://user-images.githubusercontent.com/76253496/163997093-1a88698a-ed66-413a-86c7-ce2555007b00.PNG)
 
4. Pada cmd 2,  ketik => npm run android
- Contoh gambar

![npm run android](https://user-images.githubusercontent.com/76253496/163997612-84e7ffac-67f7-4976-b6bd-3e2560ff825a.PNG)

5. Kemudian pada cmd 2 ketik => adb reverse tcp:8000 tcp:8000

![adb reverse tcp8000 tcp8000](https://user-images.githubusercontent.com/76253496/163998106-c1d33de8-de46-499c-ac60-f2e569fc1657.png)


6. Login aplikasi

Untuk dapat menjalankan aplikasi dianjurkan mengaktifkan android-api versi web dengan file android versi android studio

## Tampilan Sistem
[(Back to top)](#table-of-contents)

## Login
- Halaman Login
Masukkan Password dan Username yang telah didaftarkan oleh Administrator.

![Login](https://user-images.githubusercontent.com/76253496/163991918-3b26e4ba-d179-40e4-b720-b90092243f06.PNG)

## Halaman Menu 
Merupakan halam yang menampilkan tampilan berupa 3 menu yaitu menu tugas instalasi, menu laporan instalasi dan menu logout

![Halaman Menu](https://user-images.githubusercontent.com/76253496/163992106-593e78b9-ef78-4fce-8d88-6f78849b17ee.PNG)

## Halaman Tugas Instalasi 
Menampilkan list perusahaan yang telah tersedia dalam antrian

![Tampilan Menu Tugas Instalasi](https://user-images.githubusercontent.com/76253496/163992330-e93de819-559f-4ceb-9ff6-881fcce6565d.PNG)

## Tombol Tambah Dekat Logo Home
Digunakan untuk menambahkan kode, jumlah technician, pilihan technician, kategori, tanggal instalasi dilakukan, PIC name, PIC Nomor HP, dan alamat yang terakhir yaitu tombol save yang berada dibawah sendiri digunakan untuk menyimpan data yang telah diisi.

![Tampilan Ikon Plus](https://user-images.githubusercontent.com/76253496/163992663-4cbf765b-47aa-487b-be77-8514ad06374c.jpg)

## Tampilan Form Laporan Instalasi 
Didalamnya terdapat data yang perlu diisi yang digunakan untuk mendapat antrian instalasi. Data yang diisi sebagai bertikut :
-	 Form Laporan Instalasi pada Jadwal
Pengguna dapat mengisi mulai dari tanggal mulai instalasi, tanggal selesai instalasi, tanggal mulai training, tanggal selesai training, dan komponen yang ingin diinstal.

![Form Laporan Instalasi Jadwal](https://user-images.githubusercontent.com/76253496/163992978-cf0c1ec3-334a-4825-adca-f1f751c761ed.PNG)

-	Form Laporan Instalasi pada Informasi
Pengguna dapat mengisi data yang mendukung untuk proses instalasi mulai dari kondisi sistem antrian, problem instalasi, dan memasukkan ID Anydesknya.

![Form Laporan Instalasi Informasi](https://user-images.githubusercontent.com/76253496/163993051-5ed5fec9-e75e-4557-8f59-d166c8623913.PNG)

-	Form Laporan Instalasi pada Bukti
Pengguna dapat menyertakan bukti berupa foto dan juga video yang berkaitan apa saja yang terjadi saat prosesinstalasi berjalan.

![Form Laporan Instalasi Bukti](https://user-images.githubusercontent.com/76253496/163993092-4367e6b0-4d8d-4b5b-8075-b3da4b12ce06.PNG)

## Setelah Mengisi Data Sebelumnya, Pengguna Dapat Melihat hasil pengisian data Pada Halaman Laporan Instalasi

![Tampilan Laporan Instalasi](https://user-images.githubusercontent.com/76253496/163993178-a16559aa-dfae-42e1-89f5-98e6fe4bc502.PNG)

Jika ingin melihat lebih lanjut maka klik detai pada list yang tersedia

![Tampilan Detail Informasi](https://user-images.githubusercontent.com/76253496/163993299-d6553f46-8990-4b4b-8e01-40ef9ac37c2e.PNG)

- Yang Terakhir Terdapat Tombol Home Untuk Dapat Kembali Ke Menu Dan Klik Log Out Jika Ingin Melakukan Log Out Dan Tampilan Akan Kembali Ke Halaman Login

![Halaman Menu](https://user-images.githubusercontent.com/76253496/163993571-aefaf5de-f339-4b18-92ca-b4e69af41f36.PNG)
![Login](https://user-images.githubusercontent.com/76253496/163993598-90526203-df01-49d9-adbe-37242226e30f.PNG)



## Contributing
- Diana Estifadah
- Lintang Rahmawati



