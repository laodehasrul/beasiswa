

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Laravel
Di Build Menggunakan Framework Laravel Ver 10
Folder app->Console berisi Kernel/Terminal untuk mengeksekusi command laravel
Folder app->Exceptions berisi Handler untuk mengeksekusi command laravel
Folder app->Http->Controllers berisi Kontroler salah satu komponen inti dari MVC yang berfungsi sebagai penghubung antara request user (View) ke model yang nantinya akan di kembalikan lagi ke View dalam bentuk response
Folder app->Http->Middleware berisi Kontroler bertugas melakukan pengecekan terhadap user yang sudah mempunyai hak akses web atau belum
Folder app->Models merupakan salah satu dari bagian MVC yang bertugas berhubungan langsung dengan database. Bisa dikatakan juga bahwa Model adalah penghubung setiap alur program yang berhubungan dengan data.
Folder app->Providers adalah elemen utama dari proses inisialisasi di mana semua kode yang relevan dan diperlukan dimuat oleh PHP, dari App, Autentikasi, Boradcasting, Event dan Route(rute penghubung).
Folder bootstrap berisi file app.php yang dimana akan dipakai oleh Laravel untuk boot setiap kali dijalankan.
Folder config seperti namanya, berisi semua file konfigurasi aplikasi.
Folder database berisi database migrations, model factories, dan seeds. Folder ini akan bertanggung jawab dengan pembuatan dan pengisian tabel-tabel database.
Folder public memiliki file index.php yaitu entry point dari semua requests yang masuk/diterima ke aplikasi. Folder ini juga tempat menampung gambar, Javascript, dan CSS.
Folder resources berisi semua view/tampilan website. Folder ini juga tempat menampung assets mentah seperti css, javascript atau bootstrap yang akan di compile dalam pengembangan aplikasi.
Folder Route berisi semua route yang disediakan aplikasi. Sebagai default, beberapa file routing akan tersedia seperti: web.php, api.php, console.php, dan channels.php. Folder ini adalah tempat dimana kita memberikan koleksi definisi route aplikasi.
Folder storage adalah tempat dimana cache, logs, dan file sistem yang ter-compile hidup.
Folder tests adalah tempat dimana unit dan integration tests tinggal.
Folder vendor adalah dimana tempat folder-folder dependencies third-party yang telah di-install oleh composer berada.

Files
.editorconfig
Berguna untuk memberi IDE/text editor instruksi tentang standar coding Laravel seperti whitespace, besar identasi, dll.

.env dan .env.example
Tempat dimana variable environment aplikasi ditempatkan (variabel yang diekspektasikan akan berbeda di setiap sistem) seperti nama database, username database, password database. 

.gitignore dan .gitattributes
File konfigurasi git.

artisan
Memungkinkan untuk menjalankan perintah artisan dari command line.

composer.json dan composer.lock 
File konfigurasi untuk composer. File ini adalah informasi dasar tentang projek dan juga mendefinisikan dependencies yang digunakan.

package.json
Mirip-mirip dengan composer.json tapi untuk aset-aset dan dependencies front-end.

phpunit.xml
Sebuah file konfigurasi untuk PHPUnit, tools yang digunakan Laravel untuk testing.

readme.md
Sebuah markdown file yang memberikan pengenalan dasar tentang Laravel.

postcss.config.js
PostCSS adalah alat untuk mengubah CSS dengan plugin JS.  Plugin ini dapat mendukung variabel dan mixins, transpile masa depan CSS sintaks, gambar sejajar, dan banyak lagi. Singkatnya, PostCSS mengambil CSS dan mengubahnya menjadi bentuk data yang dapat dimanipulasi oleh JavaScript.

tailwind.config.js adalah tempat mengonfigurasi jalur ke semua template HTML, komponen JavaScript, dan file sumber lainnya yang berisi nama kelas Tailwind.

vite.config.js adalah tempat mengonfigurasi jalur plugin ke semua template HTML, komponen JavaScript, dan file sumber lainnya yang berisi nama kelas vite.
