<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    function index(){
        $artikel=artikel::all();

    return view('artikel.index',compact('artikel'));
            
    }
    public function show($id)
    {
    
        $artikel=artikel::find($id);

        return view('artikel.show',compact( 'artikel'));
    } 
    public function create()
    {
        $KategoriArtikel=KategoriArtikel::pluck('nama','id');
        

        return view( 'artikel.create',compact('KategoriArtikel'));
    }
    public function store(Request $request)
    {
        $input= $request->all();
        
        artikel::create($input);

        return redirect(route('artikel.index'));
    }
    public function edit($id)
    {
        //
        $Artikel = Artikel::find($id);
        $KategoriArtikel = KategoriArtikel::pluck('nama','id');
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }

        return view ('artikel.edit',compact('Artikel','KategoriArtikel'));
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
        $Artikel = Artikel::find($id);
        $input = $request->all();
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }
        $Artikel->update($input);
        return redirect(route('artikel.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Artikel = Artikel::find($id);
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }
         $Artikel->delete();
         return redirect(route('artikel.index'));
    }
}


