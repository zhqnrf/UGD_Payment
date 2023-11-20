<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //

    public function login(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $data['email'])->first();

        if (!isset($user)) {
            throw new WebException('Ops, Email Tidak Terdaftar ');
        }

        if (Hash::check($data['password'], $user->password)) {
            Auth::login($user);
            return redirect('dashboard')->with('success', 'Berhasil Login');
        }
        return back()->withErrors('Ops, Gagal Login Harap Check email atau password anda');
    }


    public function updatePassword(Request $request)
    {
        $data = $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        if ($data['new_password'] != $data['confirm_password']) {
            throw new WebException('Password Dan Konfirmasi Password Harus Sesuai');
        }

        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        if (!isset($user)) {
            throw new WebException('User Tidak Ditemukan Silahkan Login Ulang');
        }
        if (Hash::check($data['old_password'], $user->password)) {
            $user->update([
                'password' => $data['new_password']
            ]);
            Alert::success("Sukses", "Berhasil Memperbarui Password Silahkan Login Ulang");
            Auth::logout();
            return back();
        }

        throw new WebException('Password Lama Tidak Sesuai');
    }

}
