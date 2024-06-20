@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="my-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                @if (session('green'))
                    <div class="alert alert-success">
                        {{ session('green') }}
                    </div>
                @elseif (session('red'))
                    <div class="alert alert-danger">
                        {{ session('red') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($students as $std)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $std->nama }}
                            <a href="/students/{{ $std->id }}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
