@extends('layouts.app')
@section('content')
  <div class="pagetitle">
    <h1>Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item">Data Mahasiswa</li>
        <li class="breadcrumb-item active">Tambah Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Masukan Data Mahasiswa</h5>
            <form action="{{ route('mahasiswa.store') }}" method="POST" class="needs-validation" novalidate>
              @csrf
              <div class="row mb-3">
                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control @error('nim') is-invalid
                  @enderror" name="nim" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNIM" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" required>
                </div>
              </div>
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk1" value="1" required>
                    <label class="form-check-label" for="jk1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk2" value="2" required>
                    <label class="form-check-label" for="jk2">
                      Perempuan
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" name="prodi" required>
                    <option></option>
                    <option value="1">Rekam Medis dan Informasi Kesehatan</option>
                    <option value="2">Teknologi Bank Darah</option>
                    <option value="3">Farmasi</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNIM" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6 text-start">
                  <button type="submit" class="btn btn-danger text-start"> Cancel </button>
                </div>
                <div class="col-md-6 text-end">
                  <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
