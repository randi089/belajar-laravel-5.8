@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="my-3">Detail Mahasiswa</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->nobp }}</h6>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->jurusan }}</p>
                        <a href="{{ $student->id }}/edit" class="btn btn-primary mr-1">Edit</a>
                        <form action="/students/{{ $student->id }}" method="post" class="formd d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="delete btn btn-danger mr-1">Hapus</button>
                        </form>
                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
