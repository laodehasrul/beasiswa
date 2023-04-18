<div class="dark:bg-gray-900">
      <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex grid items-center grid-cols-2 ">
                  <a class="inline-flex items-center justify-start" href="{{ route('/') }}"><!-- Memanggil route '/' -->
                        <span class="ml-2 text-xl font-bold tracking-wide uppercase dark:text-gray-100 text-gray-900">
                              Beasiswa
                        </span>
                  </a>
                  <!-- Menu 720p -->
                  <ul class="items-center hidden space-x-8 lg:flex justify-end">
                        <li>
                              <a class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400 dark:text-gray-100 text-gray-900"
                                    href="{{ route('beasiswa') }}"><!-- Memanggil route 'beasiswa' -->
                                    Pilihan Beasiswa
                              </a>
                        </li>
                        <li>
                              <a class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400 dark:text-gray-100 text-gray-900"
                                    href="{{ route('daftar') }}"><!-- Memanggil route 'daftar' -->
                                    Daftar
                              </a>
                        </li>
                        <li>
                              <a class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400 dark:text-gray-100 text-gray-900"
                                    href="{{ route('hasil') }}"> <!-- Memanggil route 'hasil' -->
                                    Hasil
                              </a>
                        </li>
                        <li>
                              <a class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400 dark:text-gray-100 text-gray-900"
                                    href="{{ route('grafik') }}"><!-- Memanggil route 'grafik' -->
                                    Grafik
                              </a>
                        </li>
                  </ul>
                  <!-- Toogle Mobile menggunakan fungsi alpine js -->
                  <div x-data="{open: false}" class="relative flex justify-end lg:hidden">
                        <div class="inline-flex justify-center rounded-md px-4 py-2 text-sm font-medium dark:text-white hover:bg-opacity-30"
                              x-on:click="open = !open">
                              <span class="w-fit">
                                    <svg class="w-5 text-gray-600" class="w-5 text-gray-600" viewBox="0 0 24 24">
                                          <path fill="currentColor"
                                                d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z">
                                          </path>
                                          <path fill="currentColor"
                                                d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                                          </path>
                                          <path fill="currentColor"
                                                d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z">
                                          </path>
                                    </svg>
                              </span>
                        </div>
                        <!-- Menu Dropdown Mobile -->
                        <ul class="absolute right-0 text-gray-900 w-56 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg mt-10"
                              x-show="open">
                              <li x-on:click="open = false"
                                    class="group flex rounded-md items-center w-full px-2 py-2 text-sm">
                                    <a href="{{ route('beasiswa') }}">Pilihan Beasiswa</a><!-- Memanggil route 'beasiswa' -->
                              </li>
                              <li x-on:click="open = false"
                                    class="group flex rounded-md items-center w-full px-2 py-2 text-sm">
                                    <a href="{{ route('daftar') }}">Daftar</a><!-- Memanggil route 'daftar' -->
                              </li>
                              <li x-on:click="open = false"
                                    class="group flex rounded-md items-center w-full px-2 py-2 text-sm">
                                    <a href="{{ route('hasil') }}">Hasil</a><!-- Memanggil route 'hasil' -->
                              </li>
                              <li x-on:click="open = false"
                                    class="group flex rounded-md items-center w-full px-2 py-2 text-sm">
                                    <a href="{{ route('grafik') }}">Grafik</a><!-- Memanggil route 'grafik' -->
                              </li>
                        </ul>
                  </div>
            </div>
      </div>
</div>