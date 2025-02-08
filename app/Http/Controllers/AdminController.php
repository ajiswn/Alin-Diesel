<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins =  User::where('role','Admin')->get();

        return view('admin.admin.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'name'      => 'required|max:255',
            'email'     => 'required|unique:users',
            'password'  => 'required',
            'photo'     => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);
        
        $last_user = User::latest('id')->first();
        $new_id = $last_user ? $last_user->id + 1 : 1;

        $filename = 'admin-'.$new_id.'.'.$request->file('photo')->getClientOriginalExtension();
        $path = "assets/img/admin-photos/{$filename}";
        $request->file('photo')->move('assets/img/admin-photos', $filename);

        $validatedData['photo'] = $path;
        $validatedData ['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/admins')->with('success','Admin baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function activate(string $id)
    {
        User::where('id', $id)->update(['status' => 'active']);

        return redirect()->back()->with('success','Admin berhasil diaktifkan');
    }

    public function deactivate(string $id)
    {
        User::where('id', $id)->update(['status' => 'inactive']);

        return redirect()->back()->with('success','Admin berhasil dinonaktifkan');
    }
}
