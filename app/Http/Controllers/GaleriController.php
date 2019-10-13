<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
        
        $listGaleri=Galeri::all(); 

        return view ('galeri.index',compact('listGaleri'));
        
    }

    public function show($id) {

        $Galeri=Galeri::find($id);

        return view ('galeri.show', compact('Galeri'));
        
    }

    public function create(){
        $kategoriGaleri=kategoriGaleri::pluck('nama','id');

        return view ('galeri.create', compact('kategoriGaleri'));
        
    }

    public function store(Request $request){
        $input=$request->all();

        Galeri::create($input);

        return redirect(route('galeri.index'));

    }
    public function edit($id)
    {
        //
        $Galeri = Galeri::find($id);
        $KategoriGaleri = KategoriGaleri::pluck('nama','id');
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }

        return view ('galeri.edit',compact('Galeri','KategoriGaleri'));
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
        $Galeri = Galeri::find($id);
        $input = $request->all();
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }
        $Galeri->update($input);
        return redirect(route('galeri.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galeri = Galeri::find($id);
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }
         $Galeri->delete();
         return redirect(route('galeri.index'));
    }
}


    

