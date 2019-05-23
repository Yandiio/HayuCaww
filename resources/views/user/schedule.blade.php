@extends('layouts.app')

@section('content')
  <!-- tab -->
  <div class="container">
    {{-- <a href="{{ url('')}}" class="fa fa-arrow-circle-left fa-2x"></a> --}}
  <h1>Jadwal Keberangkatan</h1>
  <div class="row">
    <div role="tabpanel">
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"> <a href="#pesawat" data-toggle="tab">Pesawat</a></li>
          <li> <a href="#kereta" data-toggle="tab">Kereta</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="pesawat">
            <table class="table table-striped  table-bordered data">
                  <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kota Asal</th>
                      <th>Tujuan</th>
                      <th>Pesawat</th>
                      <th>Jadwal Keberangkatan</th>
                      <th>Kelas Ekonomi</th>
                      <th>Kelas Bisnis</th>
                      <th>Kelas VVIP</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($plane_schedule as $data)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->airport->city . " - " . $data->airport->airport_name }}</td>
                          <td>{{ $data->destination }}</td>
                          <td>{{ $data->plane->plane_name }}</td>
                          <td>{{ $data->boarding_time }}</td>
                          <td>IDR {{ number_format($data->plane->planeFare->eco_seat) }}</td>
                          <td>IDR {{ number_format($data->plane->planeFare->bus_seat) }}</td>
                          <td>IDR {{ number_format($data->plane->planeFare->first_seat) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>

          <div class="tab-pane" id="kereta">
          <table class="table table-striped  table-bordered data">
                  <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kota Asal</th>
                      <th>Tujuan</th>
                      <th>Kereta</th>
                      <th>Jadwal Keberangkatan</th>
                      <th>Kelas Ekonomi</th>
                      <th>Kelas Bisnis</th>
                      <th>Kelas VVIP</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($train_schedule as $data)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->station->city . " - " . $data->station->station_name }}</td>
                          <td>{{ $data->destination }}</td>
                          <td>{{ $data->train->train_name }}</td>
                          <td>{{ $data->boarding_time }}</td>
                          <td>IDR {{ number_format($data->train->trainFare->eco_seat) }}</td>
                          <td>IDR {{ number_format($data->train->trainFare->bus_seat) }}</td>
                          <td>IDR {{ number_format($data->train->trainFare->exec_seat) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection