@extends('layouts.app')

@section('content')
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <img src="{{ asset('/') }}plugins/img/logo-bsi.png" alt="Image" height="100">
            </div>
            <div class="d-flex justify-content-center py-4">
              <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                <span class="d-none d-lg-block">E-Layanan BSI</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                  {{-- <p class="text-center small">Enter username & password to login</p> --}}
                </div>

                <form class="row g-3 needs-validation" novalidate>

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Nama</label>
                    <div class="input-group has-validation">
                      <input type="text" name="email" class="form-control"
                        id="yourUsername" value="{{ $details->nama }}" required autocomplete="email" disabled>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="email" class="form-control"
                        id="yourUsername" value="{{ $details->email }}" required autocomplete="email" disabled>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"
                      id="yourPassword" value="{{ $details->email }}" disable>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
@endsection
