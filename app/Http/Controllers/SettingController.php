<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting',compact('setting'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name'              => 'required|max:255',
            'slogan'            => 'required|max:255',
            'description'       => 'required',
            'keywords'          => 'required',
            'owner'             => 'required',
            'address'           => 'required|max:255',
            'email'             => 'required|email',
            'instagram'         => 'required|max:255',
            'owner_instagram'   => 'required|max:255',
            'whatsapp'          => 'required|max:255',
            'gmaps'             => 'required',
        ]);

        $settings = Setting::first();

        $imageFields = [
            'owner_image' => 'owner',
            'logo_image'  => 'logo',
            'hero_image'  => 'hero-bg',
            'about_image' => 'about'
        ];

        foreach ($imageFields as $field => $filenamePrefix) {
            if ($request->hasFile($field)) {
                $request->validate([$field => 'file|image|mimes:jpeg,png,jpg,gif,svg,webp']);

                if (File::exists($settings->$field)) {
                    File::delete($settings->$field);
                }

                $filename = "{$filenamePrefix}." . $request->file($field)->getClientOriginalExtension();
                $path = "assets/img/{$filename}";
                $request->file($field)->move('assets/img', $filename);

                $settings->$field = $path;
            }
        }

        $settings->save();

        $settings->update($validatedData);

        return redirect('/admin/settings')->with('success', 'Setelan berhasil diperbarui');
    }
}
