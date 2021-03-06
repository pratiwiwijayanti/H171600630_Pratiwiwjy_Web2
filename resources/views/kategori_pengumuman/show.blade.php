@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kategori Pengumuman') }}</div>
                <div>
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                <label for="phone" class="col-md-4 col-form-label text-md-right">{!! $kategori_pengumuman->nama !!}</label>
                </div>
                <div>
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('User Id') }}</label>
                <label for="phone" class="col-md-4 col-form-label text-md-right">{!! $kategori_pengumuman->users_id !!}</label>
                </div>


                <div class="card-body">
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a href="{!! route ('kategori_pengumuman.index')!!}" class="btn
                        btn-primary">
                        Kembali
                        </a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
