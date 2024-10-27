<?php

namespace Modules\PPDB\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $footer = Footer::first();
        $logoSekolah = Storage::url('/images/logo/'.$footer->logo_sekolah) ?? Storage::url('/images/logo/logo-sekolah.png');
        return view('ppdb::index', compact('footer', 'logoSekolah'));
    }


}
