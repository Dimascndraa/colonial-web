<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class DashboardFacilityController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

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
        return view('dashboard.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:facilities,name',
            'icon' => 'required|max:15',
            'description' => 'max:200',
            'status' => 'required|boolean'
        ]);

        Facility::create($validatedData);
        return redirect('dashboard/facility')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', [
            'title' => 'Ubah Fasilitas',
            'about' => About::all(),
            'facility' => $facility
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility = Facility::find($id);
        $rules = [
            'name' => 'required|max:50|unique:facilities,name,' . $id,
            'status' => 'required|boolean'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $facility->name = $request->input('name');
        $facility->status = $request->input('status');
        $facility->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'The facility has been updated successfully');
        return redirect('admin/facility');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facility::find($id);
        $facility->delete();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'The facility has been deleted successfully');
        return redirect('admin/facility');
    }
}
