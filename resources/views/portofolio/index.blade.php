@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Portfolio</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div>
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
            
                <!-- Revenue Card -->
                <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
    
                    <div class="card-body">
                    <h5 class="card-title">Total Portofolio</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                        <h6>Rp. {{ $totalRate }}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
                </div><!-- End Revenue Card -->
    
                <!-- Profit Card -->
                <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
    
                    <div class="card-body">
                    <h5 class="card-title">Total Profit</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-pulse-line"></i>
                        </div>
                        <div class="ps-3">
                        <h6>Rp. {{  $profit }}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
                </div><!-- End Profit Card -->
    
                <!-- Revenue Card -->
                <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
    
                    <div class="card-body">
                    <h5 class="card-title">Current Portofolio</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                        <h6>Rp. {{ $totalRate_current }}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
                </div><!-- End Revenue Card -->
    
                <!-- Profit Card -->
                <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
    
                    <div class="card-body">
                    <h5 class="card-title">Current Profit</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-pulse-line"></i>
                        </div>
                        <div class="ps-3">
                        <h6>Rp. {{  $profit_current }}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
    
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Profit Card -->
    </div>

    <div>
        <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="card-body pb-0">
                <h5 class="card-title">Daftar Valas <span>| owned</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Valas</th>
                      <th scope="col">Nilai Beli</th>
                      <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transactions as $transaction)
                    <tr data-index="{{ $loop->iteration }}">
                        <td>{{ $loop->iteration }}</td>
                        <td class="fw-bold">{{ $transaction->valas->nama }}</td>
                        <td>{{ $transaction->rate }}</td>
                        <td>{{ $transaction->transaction->tgl_transaksi }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div>
    </div>
  </section>
@endsection
