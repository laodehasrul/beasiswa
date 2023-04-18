<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class BeasiswaController extends Controller
{
    // fungsi menampilkan halaman welcome
    public function home()
    {
        // mengirim respon ke kontroler untuk mengalihkan ke halaman welcome
        return view('welcome');
    }
    // fungsi menampilkan halaman beasiswa
    public function beasiswa()
    {
        // mengirim respon ke kontroler untuk mengalihkan ke halaman beasiswa
        return view('beasiswa');
    }
    // fungsi menampilkan halaman daftar
    public function daftar()
    {
        // mengirim respon ke kontroler untuk mengalihkan ke halaman daftar
        return view('daftar');
    }
    // fungsi mengirim data ke database
    public function store(Request $request)
    {
        // melakukan validasi
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|',
                'email' => 'required|email|unique:daftars,email',
                'nomor_hp' => 'required|',
                'semester' => 'required|',
                'ipk' => 'required|',
                'beasiswa' => 'required|',
                'berkas' => 'required|max:10000|mimes:jpg,jpeg,png,pdf,zip',
            ],
            // Pesan jika validasi tidak sesuai ketentuan
            [
                'nama.required' => 'Mohon Kolom Nama Dilengkapi',
                'email.required' => 'Mohon Kolom Email Dilengkapi',
                'nomor_hp.required' => 'Mohon Kolom Nomor HP Dilengkapi',
                'semester.required' => 'Mohon Kolom Semester Dilengkapi',
                'beasiswa.required' => 'Mohon Kolom Beasiswa Dilengkapi',
                'berkas.required' => 'Mohon Lengkapi Data Berkas'
            ]
        );
        // jika validasi tidak sesuai ketentuan akan dikirim kembali ke halaman daftar dengan pesan error
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
        // membuat variabel baru dari Model Daftar
        $daftar = new Daftar();

        // pengecekkan jika permintaan sebuah file
        if ($request->file()) {
            // mendeklarasikan nama file
            $fileName = time() . '.' . $request->berkas->extension();
            // mengirim file ke penyimpanan
            $request->berkas->storeAs('public/uploads', $fileName);
        }

        // proses penyimpanan data kedalam variabel daftar sebelum dikirim ke database
        $daftar->nama = $request->nama;
        $daftar->email = $request->email;
        $daftar->nomor_hp = $request->nomor_hp;
        $daftar->semester = $request->semester;
        $daftar->ipk = $request->ipk;
        $daftar->beasiswa = $request->beasiswa;
        $daftar->berkas = $fileName;
        $daftar->status_ajuan = "belum_terverifikasi";

        // melakukan insert data ke database 
        $daftar->save();
        
        // mengirim respon ke kontroler untuk mengalihkan ke halaman konfirmasi
        return redirect('hasil');
    }


    // fungsi menampilkan halaman grafik
    public function grafik()
    {
        // proses query yang menghubungkan Model dengan database untuk mencari data pendaftar yang memilih beasiswa akademik dan menghitung jumlah keseluruhan
        $akademik = Daftar::where('beasiswa', 'akademik')->count();
        // proses query yang menghubungkan Model dengan database untuk mencari data pendaftar yang memilih beasiswa non_akademik dan menghitung jumlah keseluruhan
        $non_akademik = Daftar::where('beasiswa', 'non_akademik')->count();
        // mengirim respon ke kontroler untuk menampilkan halaman grafik
        return view('grafik', compact('akademik', 'non_akademik'));
    }
    // fungsi menampilkan halaman hasil atau list pendaftar
    public function hasil()
    {
        // proses query yang menghubungkan Model dengan database untuk mengambil seluruh data
        $beasiswa = Daftar::all();
        // mengirim respon ke kontroler untuk menampilkan halaman hasil
        return view('hasil', compact('beasiswa'));
    }
}
