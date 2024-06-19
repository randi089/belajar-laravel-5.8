@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="my-3">Form Tambah Data Mahasiswa</h1>

                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Masukkan Nama" name="nama">
                        @error('nama')
                            <div class="invalid-feedback ml-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nobp">No Bp</label>
                        <input type="text" class="form-control @error('nobp') is-invalid @enderror" id="nobp"
                            placeholder="Masukkan No Bp" name="nobp">
                        @error('nobp')
                            <div class="invalid-feedback ml-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Masukkan Email" name="email">
                        @error('email')
                            <div class="invalid-feedback ml-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                            placeholder="Masukkan Jurusan" name="jurusan">
                        @error('jurusan')
                            <div class="invalid-feedback ml-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection
