<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
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
}
