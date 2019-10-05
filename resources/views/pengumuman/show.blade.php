@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Pengumuman') }}</div>
                <div>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{!! $pengumuman->judul !!}</label>
                </div>
                <div>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{!! $pengumuman->isi !!}</label>
                </div>
                <div>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Kategori PengumumanId') }}</label>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{!! $pengumuman->kategori_pengumuman_id !!}</label>
                </div>
                <div>
                <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('User Id') }}</label>
                <label for="phone" class="col-md-4 col-form-label text-md-right">{!! $pengumuman->users_id !!}</label>
                </div>


                <div class="card-body">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{!! route ('pengumuman.index')!!}" class="btn
                        btn-primary">
                        Kembali
                        </a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
