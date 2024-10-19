<?php

namespace App\Http\Controllers\Backend\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UsersDetail;

class PendaftaranController extends Controller
{
    public function index()
    {
        $user = User::with('userDetail')->where('role','PPDB')->get();
        return view('backend.pengguna.pendaftaran.index');
    }

    public function  show(){
         return view('backend.pengguna.pendaftaran.show');
    }
}
