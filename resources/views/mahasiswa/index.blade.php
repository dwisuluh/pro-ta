@extends('layouts.app')
@section('content')
  {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mahasiswa') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
  <div class="container">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Bordered Table</h5>
        <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
        <!-- Bordered Table -->
        <table class="table table-bordered datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Position</th>
              <th scope="col">Age</th>
              <th scope="col">Start Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Brandon Jacob</td>
              <td>Designer</td>
              <td>28</td>
              <td>2016-05-25</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Bridie Kessler</td>
              <td>Developer</td>
              <td>35</td>
              <td>2014-12-05</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Ashleigh Langosh</td>
              <td>Finance</td>
              <td>45</td>
              <td>2011-08-12</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Angus Grady</td>
              <td>HR</td>
              <td>34</td>
              <td>2012-06-11</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
          </tbody>
        </table>
        <!-- End Bordered Table -->

        <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color
            utilities</a> can be added to change colors:</p>

        <!-- Primary Color Bordered Table -->
        <table class="table table-bordered border-primary">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Position</th>
              <th scope="col">Age</th>
              <th scope="col">Start Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Brandon Jacob</td>
              <td>Designer</td>
              <td>28</td>
              <td>2016-05-25</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Bridie Kessler</td>
              <td>Developer</td>
              <td>35</td>
              <td>2014-12-05</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Ashleigh Langosh</td>
              <td>Finance</td>
              <td>45</td>
              <td>2011-08-12</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Angus Grady</td>
              <td>HR</td>
              <td>34</td>
              <td>2012-06-11</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Raheem Lehner</td>
              <td>Dynamic Division Officer</td>
              <td>47</td>
              <td>2011-04-19</td>
            </tr>
          </tbody>
        </table>
        <!-- End Primary Color Bordered Table -->

      </div>
    </div>
  </div>
@endsection
