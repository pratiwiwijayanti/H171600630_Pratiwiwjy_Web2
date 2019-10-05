@csrf

<div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('judul') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="isi" class="col-md-4 col-form-label text-md-right">{{ __('isi') }}</label>

                            <div class="col-md-6">
                            {!! Form::textarea('isi', null,['class'=>'form-control']); !!}
                            
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori_berita_id" class="col-md-4 col-form-label text-md-right">{{ __('kategori_berita_id') }}</label>

                            <div class="col-md-6">
                                <input id="kategori_berita_id" type="text" class="form-control @error('kategori_berita_id') is-invalid @enderror" name="kategori_berita_id" value="{{ old('kategori_berita_id') }}" required autocomplete="kategori_berita_id" autofocus>

                                @error('kategori_berita_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Users Id') }}</label>

                            <div class="col-md-6">
                                <input id="users_id" type="users_id" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id">

                                @error('users_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>
                            </div>