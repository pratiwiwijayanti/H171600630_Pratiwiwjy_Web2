@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>
                <div class="card-body">
                <table class="table table-bordered">
                <a href="{!!route('berita.create')!!}">Tambah Data</a>
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori_berita_id</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $berita as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_berita_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td><a href="{!!route('berita.show',[$item->id])!!}">Lihat</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection