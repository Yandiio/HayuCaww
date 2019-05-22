@extends('admin.layouts.app')

@section('content')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Booking</li>
        </ol>
      </div><br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Grafik penjualan tiket tahun {{date('Y')}}</h4>
          </div>
          <div class="panel-body">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Jumlah Pemesanan</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          {{ $pemesanan->count('id') }}
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Kereta Api & Pesawat
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Pengguna</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{ $pengguna->count('user_id') }}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Seluruh Pengguna
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Jumlah Pemesanan</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          {{$jadwal_p->count('id')}}
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Pesawat
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Jumlah Pemesanan</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          {{ $jadwal_t->count('id') }}
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Kereta
                  </p>
                </div>
              </div>
            </div>
          </div>
          
            <div style="width:75%;">
                {!! $chartjs->render() !!}
            </div>
          </div>
        </div>
@endsection
