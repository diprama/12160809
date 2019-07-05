@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Bendahara</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/bendahara') }}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Kode Bendahara</label>
                                <input type="text" name="kode_bendahara" class="form-control {{ $errors->has('kode_bendahara') ? 'is-invalid':'' }}" placeholder="Masukkan kode anda">
                                <p class="text-danger">{{ $errors->first('kode_bendahara') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Bendahara</label>
                                <input type="text" name="nama_bendahara" class="form-control {{ $errors->has('nama_bendahara') ? 'is-invalid':'' }}" placeholder="Masukkan nama lengkap anda">
                                <p class="text-danger">{{ $errors->first('nama_bendahara') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" cols="5" rows="5" class="form-control {{ $errors->has('address') ? 'is-invalid':'' }}"></textarea>
                                <p class="text-danger">{{ $errors->first('address') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection