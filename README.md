## Sistem Informasi Pelaporan
Mengerjakan UI untuk web, mockup android dan mengconnectkan webservice dengan UI merupakan jobdesk kami selama PKL

## Table of contents

- [Installation](#installation)
- [Penggunaan](#penggunaan)
- [Tampilan](#tampilan)

## Installation
[(Back to top)](#table-of-contents)

## Perangkat yang dibutuhkan
1.	PHP 7
2.	Laravel 8
3.	Postman
4.	Vscode
5.	Github
6.	Browser

## Cara Instalasi Aplikasi Web
1.	Pastikan perangkat yang dibutuhkan telah tersedia dan sesuai. 
2.	Clone project dengan git pada folder yang diinginkan. 
3.	Buka project yang telah tersedia pada Vscode. 
4.	Setelah project siap, silahkan buka terminal. 
5.	Ketik perintah "composer update" 
6.	Ketik perintah "php artisan key:generate" 

## Cara Penggunaan Aplikasi
[(Back to top)](#table-of-contents)
1.	Buka Postman pilih Start Data Of Service dengan icon GET,
2.	Masukkan link "https:nakulasadewa/api/admins/" untuk mengambil data.
3.	Buka project yang telah tersedia pada Vscode. 
4.	Buka terminal. 
5.	Kemudian ketikkan perintah "php artisan serve"
6.	Setelah itu buka browser dan masukkan link server yang sudah diperoleh
7.	Halaman Utama (Login) aplikasi akan muncul.

## Tampilan Sistem
[(Back to top)](#table-of-contents)

## Login
- Halaman Login
Masukkan Password dan Username yang telah didaftarkan oleh Administrator.
<img src="/gambar_ui/login.png" title="Halaman1"/>

## Administrator
- Administrator dapat melihat daftar user yang telah didaftarkan
- Administrator dapat melihat detail instalasi, mengedit dan menghapus data user pada dengan memilih button pada Action. 

<img src="/gambar_ui/admtr.png" title="Halaman2"/>

- Pada button Tambah User, Administrator dapat menambahkan User baru dengan mengisi data yaitu Nama Pegawai, ID Pegawai, Nomor Telepon, Kategori Pegawai (Jabatan), Password dan juga Status pegawai (aktif atau non aktif). 
<img src="/gambar_ui/fadmtr.png" title="Halaman3"/>

- Halaman edit data pegawai
<img src="/gambar_ui/eadmtr.png" title="Halaman4"/>

## Admin
## Sub Menu Instalasi
- Admin dapat melihat daftar Instalasi yang telah ditambahkan. 
- Admin dapat mengedit dan melihat detail data Instalasi dengan memilih button pada Action. 
<img src="/gambar_ui/addatal.png" title="Halaman5"/>

- Pada button Tambah Instalasi, Admin dapat menambahkan data Instalasi baru (langsung terhubung pada teknisi) dengan mengisi nama Instalasi, Kategori Instalasi (Pemerintahan,Kesehatan, Industri), alamat instansi, nama penanggung jawab pada instansi, nomor telepon penanggung jawab, tanggal instalasi, jumlah teknisi yang melakukan ininstalasi, teknisi yang dipilih untuk melakukan instalasi, dan leader teknisi sebagai penanggung jawab instalasi. 
<img src="/gambar_ui/fdatal.png" title="Halaman6"/>

- Jika mengklik button detail pada action, maka akan muncul detail data instalasi yang berisi nama instansi, alamat, kategori instalasi, tanggal mulai instalasi, tanggal selesai instalasi, nama penanggung jawab, no telepon penanggung jawab, jumlah teknisi yang melakukan instalasi, nama teknisi yang melakukan instalasi, beserta leader teknisinya.
<img src="/gambar_ui/addetaildatal.png" title="Halaman20"/>

## Sub Menu Ticketing
- Admin dapat melihat daftar Ticketing yang telah ditambahkan. 
<img src="/gambar_ui/adticket.png" title="Halaman7"/>

- Admin dapat mengedit dan menghapus data Ticketing dengan memilih button pada Action. 
- Pada button Tambah Ticketing , Admin dapat menambahkan data Ticketing baru dengan mengisi No Ticket, Nama Instansi (Pemerintahan, Kesehatan, Industri), nomor telepon, kategori aduan, tanggal aduan, alamat isi aduan dan status. 
- Jika mengklik button detail pada action, maka akan muncul detail data ticketing.
<img src="/gambar_ui/addetailticket.png" title="Halaman21"/>


## Teknisi
## Sub Menu Daftar Instalasi
<img src="/gambar_ui/tdatal.png" title="Halaman8"/>

- Teknisi dapat juga melihat detail data instalasi.
<img src="/gambar_ui/tdetaildatal.png" title="Halaman9"/>

- Teknisi bisa mengklik kerjakan untuk mengkonfirmasi tugas.
<img src="/gambar_ui/uikerjakan.png" title="Halaman10"/>

- Kemudian teknisi akan diarahkan pada form laporan instalasi
<img src="/gambar_ui/ftlapin.png" title="Halaman11"/>

## Sub Menu Laporan Instalasi
-Pada menu ini akan terlihat daftar laporan yang sudah dikerjakan oleh leader teknisi dan untuk melihat detail dapat diklik tombol lihat detail
<img src="/gambar_ui/tlapin.png" title="Halaman12"/>

## Sub Menu Ticketing
- Pada menu ini akan terlihat daftar aduan yang sudah dibuat oleh admin
<img src="/gambar_ui/tticket.png" title="Halaman13"/>

- Teknisi dapat mengklik button perbaikan untuk menjawab aduan dari client
<img src="/gambar_ui/tperbaikan.png" title="Halaman14"/>

- Berikut Form untuk perbaikan
<img src="/gambar_ui/tfperbaikan.png" title="Halaman15"/>

-Ketika form berhasil terisi akan ditunjukan ke halaman riwayat
<img src="/gambar_ui/triwayat.png" title="Halaman16"/>

- Jika ingin melihat riwayat dari client tertentu dapat memanfaatkan kolom cari yang tersedia

## Programmer
- Pada halaman programmer akan ditampikan laporan instalasi yang sudah dilakukan oleh teknisi
<img src="/gambar_ui/plapin.png" title="Halaman17"/>

## Manajer
- Pada halaman manajer akan ditampikan laporan instalasi dan laporan ticketing yang sudah dilakukan oleh teknisi juga grafik
<img src="/gambar_ui/mlapin.png" title="Halaman18"/>

<img src="/gambar_ui/mriwayat.png" title="Halaman19"/>

## Contributing
- Wahyu Indah Puspitasari
- Srirahmi Lutfiah Aprilia
