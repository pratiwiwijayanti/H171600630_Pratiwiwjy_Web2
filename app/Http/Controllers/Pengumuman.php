<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;
class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman=Pengumuman::all();
        
        return view('pengumuman.index',compact('pengumuman'));
    }
    public function create()
    {
        return view('pengumuman.create');
    }
    public function show($id)
    {
        $pengumuman=Pengumuman::find($id);
        return view('pengumuman.show',compact('pengumuman'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Pengumuman::create($input);
        return redirect(route('pengumuman.index'));
    }
    public function edit($id)
    {
        //
        $Pengumuman = Pengumuman::find($id);
        $KategoriPengumuman = KategoriPengumuman::pluck('nama','id');
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        return view ('pengumuman.edit',compact('Pengumuman','KategoriPengumuman'));
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
        $Pengumuman = Pengumuman::find($id);
        $input = $request->all();
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        $Pengumuman->update($input);
        return redirect(route('pengumuman.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pengumuman = Pengumuman::find($id);
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
         $Pengumuman->delete();
         return redirect(route('pengumuman.index'));
    }

}
