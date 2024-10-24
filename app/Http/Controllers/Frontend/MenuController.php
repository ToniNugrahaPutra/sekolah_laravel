<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;
use App\Models\Jurusan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    // Program Studi
    public function programStudi($slug)
    {
        $jurusan = Jurusan::with('dataJurusan')->where('slug', $slug)->first();

        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();
        $footer = Footer::first();
        return view('frontend.program.jurusan.show', compact('jurusan','jurusanM','kegiatanM', 'footer'));
    }

    // Kegiatan
    public function kegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();

        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();
        return view('frontend.program.kegiatan.show', compact('kegiatan','jurusanM','kegiatanM'));
    }
}
