<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'Home')
<!-- Isi Konten -->
@section('content')
<div class="md:py-16">
    <div class="max-w-7xl mx-auto flex items-center gap-6 px-5 flex-col py-14 md:flex-row lg:py-2 xl:py-0">
        <div class="flex flex-col gap-7 lg:w-8/12 xl:w-3/5 text-center md:text-left">
            <h1 class="font-bold tracking-tight text-4xl text-slate-900 lg:text-5xl">
                Sudah siapkah Anda, menjadi The Next BPI Awardee di tahun 2023 ini?
            </h1>
            <p class="text-base lg:text-lg 2xl:text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eaque minus libero laboriosam quibusdam aperiam quae hic optio vitae, suscipit nam debitis. Ullam, nam at.
            </p>
            <a class="mx-auto md:mx-0 py-2 w-48 text-center text-black dark:text-white font-semibold rounded-lg shadow-xl px-5 rounded-global bg-primary-500 dark:bg-gray-900 text-lg" href="{{ route('daftar') }}">
                Daftar Beasiswa
            </a>
        </div>
        <div class="w-full lg:w-7/12">
            <img class="sm:mx-9 sm:-my-16 md:mx-0 md:my-0 lg:w-full"
                src="https://ik.imagekit.io/n0uvizrukm2/screenshots/undraw_drag_re_shc0_31CTM396C.svg?ik-sdk-version=javascript-1.4.3&updatedAt=1661751477772" />
        </div>
    </div>
</div>

@endsection