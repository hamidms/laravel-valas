@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>History</h1>
    <nav>
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/transaction/c">Valas</a></li>
        <li class="breadcrumb-item active">Buy</li>
    </ol> --}}
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
    
                <div class="card-body">
                  <h5 class="card-title">Recent Activity <span>| Mutasi </span></h5>
    
                  <div class="activity">
                    @foreach ($transactions as $transaction)
                        
                    <div class="activity-item d-flex">
                      <div class="activite-label">{{ $transaction->transaction->tgl_transaksi }}</div>
                      <i class="bi bi-circle-fill activity-badge {{ $transaction->type === 'sell' ? 'text-danger' : 'text-success' }} align-self-start"></i>
                      <div class="activity-content">
                        {{ $transaction->type }}  {{ $transaction->qty }} <span class="fw-bold text-dark">{{ $transaction->valas->nama }}</span>
                      </div>
                    </div><!-- End activity item-->
    
                    @endforeach
                  </div>
    
                </div>
              </div>
        </div>
    </div>
</section>
@endsection
