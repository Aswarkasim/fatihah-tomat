<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cari = request('cari');

        if ($cari) {
            $gejala = Gejala::where('name', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $gejala = Gejala::latest()->paginate(10);
        }
        $data = [
            'title'   => 'Manajemen Gejala',
            'gejala' => $gejala,
            'content' => 'admin/gejala/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title'   => 'Manajemen Gejala Artikel',
            'content' => 'admin/gejala/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // print_r($request);
        // die;
        // dd($request);
        $data = $request->validate([

            'kode_gejala'              => 'required|unique:gejalas',
            'name'              => 'required|min:3',
            'nilai_cf'              => 'required|numeric',
        ]);
        Gejala::create($data);
        Alert::success('Sukses', 'Gejala telah ditambahkan');
        return redirect('/admin/gejala');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gejala = Gejala::find($id);
        $data = [
            'title'   => 'Edit Gejala',
            'gejala' => $gejala,
            'content' => 'admin/gejala/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gejala = Gejala::find($id);
        $data = $request->validate([
            'kode_gejala'              => 'required|unique:gejalas,kode_gejala,' . $gejala->id,
            'name'              => 'required|min:3',
            'nilai_cf'              => 'required|numeric',
        ]);
        $gejala->update($data);
        Alert::success('Sukses', 'Gejala telah diubah');
        return redirect('/admin/gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('gejalas')->delete($id);
        Alert::success('success', 'Kateogri telah dihapus');
        return redirect('/admin/gejala');
    }
}
