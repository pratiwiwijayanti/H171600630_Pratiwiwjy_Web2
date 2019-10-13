@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artikel</div>
                <div class="card-body">
                <table class="table table-bordered">
                <a href="{!!route('artikel.create')!!}">Tambah Data</a>
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori_artikel_id</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $artikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td><a href="{!!route('artikel.show',[$item->id])!!}">Lihat</a></td>
                        <td><a href="{!! route('artikel.edit',[$item->id]) !!}" class="btn btn-primary">edit</a></td>
                        <td>
								{!! Form::open(['route' => ['artikel.destroy',$item->id], 'method' => 'delete']); !!}
					            {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
					            {!! Form::close() !!}
							</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
		@endsection