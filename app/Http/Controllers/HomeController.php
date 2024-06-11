<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function place()
    {
        $tempats = Place::all();
        return view('admin.place', compact('tempats'));
    }

    public function add_place()
    {
        return view('admin.add_place');
    }

    public function add(Request $request)
    {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('dashboard/img/tempat'), $imageName);
        } else {
            $imageName = null;
        }

        Place::create([
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
            'image' => $imageName,
        ]);

        return redirect("place")->with('success', 'Data Tempat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tempat = Place::findOrFail($id);
        return view('admin.edit_place', compact('tempat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tempat' => 'required|string|max:100',
            'alamat' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tempat = Place::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('dashboard/img/tempat'), $imageName);
            $tempat->image = $imageName;
        }

        $tempat->nama_tempat = $request->nama_tempat;
        $tempat->alamat = $request->alamat;
        $tempat->save();

        return redirect("place")->with('success', 'Data Tempat berhasil diupdate.');
    }

    public function destroy($id)
    {
        $tempat = Place::findOrFail($id);

        if ($tempat->image) {
            $imagePath = public_path('dashboard/img/tempat/' . $tempat->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $tempat->delete();
        return redirect("place")->with('Success', 'Data Tempat berhasil dihapus.');
    }
}

