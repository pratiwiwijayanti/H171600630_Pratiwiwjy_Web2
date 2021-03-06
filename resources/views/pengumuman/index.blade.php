@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">
                <a href="{!!route('pengumuman.create')!!}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">judul</th>
                        <th scope="col">isi</th>
                        <th scope="col">Kategori Pengumuman id</th>
                        <th scope="col">User_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $pengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td><a href="{!! route('pengumuman.show',[$item->id])!!}">Lihat</a></td>
                        <td><a href="{!! route('pengumuman.edit',[$item->id]) !!}" >edit</a></td>

                        <td>
								{!! Form::open(['route' => ['pengumuman.destroy',$item->id], 'method' => 'delete']); !!}
					            {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
					            {!! Form::close() !!}
							</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection