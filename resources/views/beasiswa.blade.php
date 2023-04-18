<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'Beasiswa')
<!-- Isi Konten -->
@section('content')
<div class="py-6 sm:py-8 lg:py-12">
      <div class="px-4 mx-auto max-w-7xl md:px-8">
            <div class="mb-10 md:mb-16">
                  <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">
                        Beasiswa
                  </h2>
                  <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam illum rerum, iure repellat est, cum sed voluptate doloribus distinctio similique numquam voluptatibus eligendi quis ipsum.
                  </p>
            </div>

            <div class="relative overflow-x-auto max-w-2xl mx-auto">
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                              <tr>
                                    <th scope="col" class="px-6 py-3 border-r w-10 text-center">
                                          No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                          Beasiswa
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-500">
                                    <th scope="row"
                                          class="border-r px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                          1
                                    </th>
                                    <td class="px-6 py-4">
                                          Akademik
                                    </td>
                              </tr>
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                          class="border-r px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                          2
                                    </th>
                                    <td class="px-6 py-4">
                                          Non Akademik
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>

      </div>
</div>

@endsection