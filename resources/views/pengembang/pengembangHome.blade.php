@extends('layout.app')
  
@section('title', 'Dashboard pengembang')
  
@section('contents')
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <b>Data pengajuan</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahData }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                          <b>Data diproses</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahDataProses }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><b>Data diterima</b>
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlahDataDiterima }}</div>
                          </div>
                       
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          <b>Data ditolak</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahDataDitolak }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-times fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection