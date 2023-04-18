<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'Daftar Beasiswa')
<!-- Isi Konten -->
@section('content')
<div class="py-6 sm:py-8 lg:py-12">
      <div class="px-4 mx-auto max-w-7xl md:px-8">
            <div class="mb-10 md:mb-16">
                  <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">
                        Daftar Beasiswa
                  </h2>
                  <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo facere rem ea officiis iusto, beatae provident culpa aliquid ratione ullam iure fugiat aliquam harum illo!
                  </p>
            </div>
            <!-- Form Pendaftaran Beasiswa -->
            <form class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto" action="" method="POST" enctype="multipart/form-data">
                   <!-- CSRF adalah cross site request forgery, csrf ini merupakan salah satu proteksi laravel dari aksi user yang tidak bertanggung jawab -->
                  @csrf
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Nama
                        </p>
                        <input type="text" name="nama"
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Email
                        </p>
                        <input type="email" name="email"
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Nomor HP
                        </p>
                        <input type="text" name="nomor_hp"
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Semester
                        </p>
                        <select 
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                              name="semester" id="semester" onchange="smt(this)">
                              <option value="" selected>Pilih</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                        </select>
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              IPK
                        </p>
                        <input type="text" name="ipk" id="ipk" readonly
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Pilih Beasiswa
                        </p>
                        <select
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                              name="beasiswa" id="beasiswa" disabled="false">
                              <option value="" selected>Pilih Beasiswa</option>
                              <option value="akademik">Akademik</option>
                              <option value="non_akademik">Non Akademik</option>
                        </select>
                  </div>
                  <div class="sm:col-span-2">
                        <p class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                              Berkas
                        </p>
                        <input type="file" name="berkas" id="berkas" disabled
                              class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                  </div>
                  <div class=" sm:col-span-2 flex justify-between items-center mt-10">
                        <button type="submit" id="submit" disabled
                              class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
                              Daftar
                        </button>
                        <a href="{{ route('/') }}"
                              class="inline-block bg-red-500 hover:bg-red-600 active:bg-red-700 focus-visible:ring ring-red-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
                              Batal
                        </a>
                  </div>
            </form>
      </div>
</div>

@endsection

@push('script')
<script>
      //Fungsi untuk mengganti nilai ipk yang sudah di deklarasikan
      function smt(semester) {
        const nilai = [2.4, 3.5, 3.0, 2.5, 3.4, 1.8, 3.8, 3.1];
        const ipk = nilai[semester.value - 1];
    
        if (semester.value != 0) {
          document.querySelector("#ipk").value = ipk;
          checkIpk(ipk)
        } else {
          document.querySelector("#ipk").value = "";
        }
      };
    
      //Fungsi untuk check IPK
      function checkIpk(ipk) {
       //Mengecek nilai ipk lebih dari 3. jika iya maka kode di dalam {} akan di eksekusi
        if (ipk > 3) {
          //Mengaktifkan element HTML dengan id 'beasiswa'
          document.querySelector("#beasiswa").disabled = false;
          //Memfokuskan kursor pada elemen HTML dengan id 'beasiswa'
          document.querySelector("#beasiswa").focus();
          //Mengaktifkan element HTML dengan id 'berkas'
          document.querySelector("#berkas").disabled = false;
          //Mengaktifkan element HTML dengan id 'submit'
          document.querySelector("#submit").disabled = false;
          //Jika nilai IPK kurang dari atau sama dengan 3
        } else {
          //Menonaktifkan elemen HTML dengan id 'beasiswa'
          document.querySelector("#beasiswa").disabled = true;
          //Menonaktifkan element HTML dengan id 'berkas'
          document.querySelector("#berkas").disabled = true;
          //Menonaktifkan element HTML dengan id 'submit'
          document.querySelector("#submit").disabled = true;
        }
      };
</script>
@endpush