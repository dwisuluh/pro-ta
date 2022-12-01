@extends('layouts.app')
@section('content')
<!-- Star Page Header -->
  <div class="pagetitle">
    <h1>Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Data Mahasiswa</li>
      </ol>
    </nav>
  </div><!-- End Page Header -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Mahasiswa</h5>
            <p class="text-end"><a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm text-end">
                <i class="bi bi-person-plus"></i> Tambah Data </a></p>
            <!-- Bordered Table -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Program Studi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>
                      <form method="POST" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}">
                        <a type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                          title="Detail"><i class="bi bi-person-check"></i></a>
                        <a type="button" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Bordered Table -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
