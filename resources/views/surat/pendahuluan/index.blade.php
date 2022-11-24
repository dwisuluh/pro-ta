@extends('layouts.app')
@section('content')
  <div class="pagetitle">
    <h1>Surat Ijin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item">Surat Ijin</li>
        <li class="breadcrumb-item active">Studi Pendahuluan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pengajuan Studi Pendahuluan</h5>

            <!-- General Form Elements -->
            <form>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Instansi Tujuan</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Judul Karya Tulis Ilmiah</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px"></textarea>
                </div>
              </div>
              {{-- <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      First radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Second radio
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                    <label class="form-check-label" for="gridRadios3">
                      Third disabled radio
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                <div class="col-sm-10">

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Example checkbox
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                    <label class="form-check-label" for="gridCheck2">
                      Example checkbox 2
                    </label>
                  </div>

                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Disabled</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="Read only / Disabled" disabled>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Select</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Multi Select</label>
                <div class="col-sm-10">
                  <select class="form-select" multiple aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div> --}}

              <div class="row mb-3">
                {{-- <label class="col-sm-2 col-form-label"></label> --}}
                <div class="col-md-6 text-start">
                    <button type="submit" class="btn btn-danger text-start"> Cancel </button>
                </div>
                    <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
