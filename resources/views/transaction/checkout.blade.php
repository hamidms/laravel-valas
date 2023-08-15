@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Checkout</h1>
    <nav>
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/transaction/c">Valas</a></li>
        <li class="breadcrumb-item active">Buy</li>
    </ol> --}}
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Order Summary
                    </h5>
                    <br>
                    <div>
                        <p>( {{ $valas->nama }} ) {{ $qty }} x {{ $valas->nilai_beli }}</p>
                        <h3>Rp. {{ $qty*$valas->nilai_beli }}</h3>
                    </div>
                    <br>
                    <div>
                        <p>Discount ( {{ $user->membership->nama }} )</p>
                        <h3>Rp. -{{ $qty*$valas->nilai_beli*$user->membership->discount/100 }}</h3>
                    </div>
                    <hr>
                    <div>
                        <p>Order Total</p>
                        <h3>Rp. {{ ($qty*$valas->nilai_beli)-($qty*$valas->nilai_beli*$user->membership->discount/100) }}</h3>
                    </div>
                    <br>

                    <form action="/transaction/payment" method='POST'>
                        @csrf
                        <input type="hidden" name="no_transaksi" value="{{ $valas->nama }}{{ rand(100000,999999) }}">
                        <input type="hidden" name="nama_customer" value="{{ $user->name }}">
                        <input type="hidden" name="tgl_transaksi" value="{{ date('Y-m-d') }}">
                        <input type="hidden" name="discount" value="{{ $qty*$valas->nilai_beli*$user->membership->discount/100 }}">
                        <input type="hidden" name="valas_id" value="{{ $valas->id }}">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="rate" value="{{ ($qty*$valas->nilai_beli)-($qty*$valas->nilai_beli*$user->membership->discount/100) }}">
                        <input type="hidden" name="qty" value="{{ $qty }}">
                        
                        <button type="submit" class="btn btn-primary">Complete Order</button>
                        
                        <a href="/valas/dashboard" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
