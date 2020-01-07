@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                    <ul class="list-group">
                        @foreach( $students as $student)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $student-> nama }}
                                <a class="badge badge-info" href="/students/{{ $student->id }}">detail</a>
                            </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
@endsection
