<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'List Pendaftar')
<!-- Isi Konten -->
@section('content')
<div class="py-6 sm:py-8 lg:py-12">
      <div class="px-4 mx-auto max-w-7xl md:px-8">
            <div class="mb-10 md:mb-16">
                  <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">
                        List Pendaftar Beasiswa
                  </h2>
                  <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus, quia, maxime, unde suscipit dignissimos aut quas nesciunt consequuntur sequi ipsum perferendis! Recusandae, illum incidunt!
                  </p>
            </div>

            <div class="relative overflow-x-auto mx-auto">
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                              <tr>
                                    <th scope="col" class="px-6 py-3 border-r w-10 text-center">
                                          No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Nomor HP
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Semester
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          IPK
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Beasiswa
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Berkas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Status
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              <!-- melakukan proses perulangan untuk menampilkan data pendaftar beasiswa -->
                              @foreach ($beasiswa as $b)
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-500">
                                    <th scope="row"
                                          class="border-r px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                          {{ $loop->iteration }}
                                    </th>
                                    <td class="px-6 py-4">
                                          {{ $b->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                          {{ $b->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                          {{ $b->nomor_hp }}
                                    </td>
                                    <td class="px-6 py-4">
                                          {{ $b->semester }}
                                    </td>
                                    <td class="px-6 py-4">
                                          {{ $b->ipk }}
                                    </td>
                                    <td class="px-6 py-4">
                                          {{ $b->beasiswa }}
                                    </td>
                                    <td class="px-6 py-4">
                                          <a href="{{ asset('storage/uploads/'. $b->berkas) }}">{{ $b->berkas }}</a>
                                    </td>
                                    <!-- melakukan proses pengecekkan kondisi status -->
                                    @if ($b->status_ajuan == "terverifikasi")
                                    <td class="px-6 py-4">
                                          Terverifikasi
                                    </td>
                                    @else
                                    <td class="px-6 py-4">
                                          Belum Terverifikasi
                                    </td>
                                    @endif
                                    
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>

      </div>
</div>

@endsection