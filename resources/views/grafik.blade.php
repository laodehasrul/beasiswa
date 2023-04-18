<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'Grafik')
<!-- Isi Konten -->
@section('content')
<div class="py-6 sm:py-8 lg:py-12">
      <div class="px-4 mx-auto max-w-7xl md:px-8">
            <div class="mb-10 md:mb-16">
                  <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">
                        Grafik Pendaftar Beasiswa
                  </h2>
                  <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta obcaecati veniam doloribus
                        reiciendis molestiae eaque inventore minus provident atque qui reprehenderit, maxime laborum quo
                        magni.
                  </p>
            </div>

            <div class="max-w-2xl justify-center mx-auto">
                  <canvas id="myChart" width="100%"></canvas>
            </div>

      </div>
</div>


@endsection

@push('script')
<script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Akademik', 'Non Akademik'
              ],
              datasets: [{
                  label: 'Grafik Akademik',
                  data: [
                        {{$akademik}},
                    {{$non_akademik}}
  
                  ],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
</script>

@endpush