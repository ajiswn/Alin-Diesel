<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $account = Auth::user();

        return view('admin.account',compact('account'));
    }

    public function update(Request $request)
    {
        $account = Auth::user();

        $validatedData = $request->validate([
            'name'  => 'required',
            'email' => 'required|email:dns'
        ]);

        if ($request->file('photo')) {
            $request->validate([ 'photo' => 'file|image|mimes:jpeg,png,jpg,gif,svg,webp' ]);
            if (File::exists($account->photo)) {
                File::delete($account->photo);
            }
            $filename = 'admin-'.$account->id.'.'.$request->file('photo')->getClientOriginalExtension();
            $path = "assets/img/admin-photos/{$filename}";
            $request->file('photo')->move('assets/img/admin-photos', $filename);

            $account->photo = $path;
            $account->save();
        }

        $account->update($validatedData);

        return redirect('/admin/account-settings')->with('success','Akun berhasil diperbarui');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success-update-password', 'Password berhasil diperbarui!');
    }
}
