<?php

namespace App\Http\Controllers;

use App\Models\Greenhouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GreenhouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $greenhouses = Greenhouse::latest()->paginate(15);
        return view("admin.greenhouses.index", compact(["greenhouses"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.greenhouses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images/greenhouses'), $newImageName);
        Greenhouse::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "image" => $newImageName,
        ]);

        return redirect()->route('greenhouses.index')->with('success', 'Issiqxona muvafaqqiyatli qo\'shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Greenhouse $greenhouse)
    {

        return view('admin.greenhouses.show', compact(['greenhouse']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Greenhouse $greenhouse)
    {
        return view('admin.greenhouses.edit', compact('greenhouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Greenhouse $greenhouse)
    {
        if ($request->hasFile('image')) {

            $destination = 'storage/images/greenhouses/' . $greenhouse->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $newImageName = time() . '-' . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images/greenhouses'), $newImageName);
            $greenhouse->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image' => $newImageName,
            ]);
        } else {
            $greenhouse->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
            ]);
        }

        // Redirecting user and send friendly message
        return redirect()->route('greenhouses.index')->with('success', 'Issiqxona muvafaqqiyatli o\'zgartirildi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Greenhouse $greenhouse)
    {
        $destination = 'storage/images/greenhouses/' . $greenhouse->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $greenhouse->delete();
        return redirect()->route('greenhouses.index')->with('success', 'Issiqxona muvafaqqiyatli o\'chirildi!');
    }
}
