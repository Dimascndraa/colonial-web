<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facility.index', [
            'title' => "Fasilitas",
            'about' => About::all()->first(),
            'facilities' => Facility::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facility.create', [
            'title' => "Fasilitas",
            'about' => About::all()->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:facilities',
            'icon' => 'required|file|image|max:5210',
            'descript' => 'required',
            'status' => 'required|boolean'
        ]);
        $validatedData['icon'] = $request->file('icon')->store('facility-icon');

        Facility::create($validatedData);
        return redirect('dashboard/facility')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', [
            'title' => 'Ubah Fasilitas',
            'about' => About::all()->first(),
            'facility' => $facility
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'icon' => 'file|image|max:5210',
            'descript' => 'required',
            'status' => 'required|boolean'
        ]);

        if ($request->name != $facility->name) {
            $validatedData['name'] = 'required|unique:facilities';
        }

        if ($request->file('icon')) {
            if ($request->oldIcon) {
                Storage::delete($request->oldIcon);
            }
            $validatedData['icon'] = $request->file('icon')->store('facility-icon');
        }

        Facility::where('id', $facility->id)->update($validatedData);
        return redirect('dashboard/facility')->with('success', 'Fasilitas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        if ($facility->icon) {
            Storage::delete($facility->icon);
        }

        Facility::destroy($facility->id);
        return redirect('/dashboard/facility')->with('success', 'Facility berhasil dihapus!');
    }
}
