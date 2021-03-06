@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">List Galeri</div> 
                <div class="card-body">
                
                        <table class="table table-bordered">
                            <thead class ="bg-success">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Path</th>
                                <th scope="col">Kategori Galeri</th>
                                <th scope="col">Create</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($listGaleri as $item)
                            <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->keterangan !!}</td>
                            <td>{!! $item->path !!}</td>
                            <td>{!! $item->kategori_galeri_id !!}</td>
                            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                                <td><a href="{!! route('galeri.show',[$item->id]) !!}">Detail</a>
                                <td><a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-primary">edit</a></td>
                        <td>
								{!! Form::open(['route' => ['galeri.destroy',$item->id], 'method' => 'delete']); !!}
					            {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
					            {!! Form::close() !!}
							
                            </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                    </table>
                    <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection