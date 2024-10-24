<?php

namespace Modules\PPDB\Http\Controllers;

use App\Models\dataMurid;
use App\Models\User;
use ErrorException;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PPDB\Http\Requests\RegisterRequest;
use Session;
use DB;

class AuthController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Register View
    public function registerView()
    {
        return view('ppdb::auth.register');
    }

    // Register Store
    public function registerStore(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();

            // Pecah nama menjadi array kata-kata
            $namaArray = explode(" ", $request->name);

            // Periksa apakah kata pertama adalah singkatan (mengandung titik)
            if (strpos($namaArray[0], '.') !== false) {
                // Jika kata pertama adalah singkatan, ambil dua kata pertama
                $username = implode(" ", array_slice($namaArray, 0, 2));
            } else {
                // Jika tidak, ambil satu kata pertama
                $username = $namaArray[0];
            }

            $register = new User();
            $register->name      = $request->name;
            $register->username  = $username;
            $register->email     = $request->email;
            $register->role      = 'Guest';
            $register->password  = bcrypt($request->password);
            $register->save();

            if ($register) {
                $murid = new dataMurid();
                $murid->user_id         =   $register->id;
                $murid->whatsapp        =   $request->whatsapp;
                $murid->asal_sekolah    =   $request->asal_sekolah;
                $murid->save();
            }

            $register->assignRole($register->role);

            DB::commit();
            return redirect('/home')->with('success', 'Registrasi Berhasil, Silahkan Login');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Registrasi Gagal, Silahkan Coba Lagi');
        }
    }
}
