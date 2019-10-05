@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita</div>
                <div class="card-body">
                <a href="{!!route('kategori_berita.create')!!}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $kategori_berita as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td><a href="{!!route('kategori_berita.show',[$item->id])!!}">Lihat</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection