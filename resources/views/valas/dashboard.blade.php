@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Valas</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Valas</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    
    <section class="section contact">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-grid gap-2">
                        <a href="/transaction/buy" class="btn btn-success mt-4">Beli Valas</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-grid gap-2">
                        <a href="/transaction/sell" class="btn btn-danger mt-4">Jual Valas</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            @foreach ($valas as $va)
            <div class="col-md-3 col-sm-4">
            <div class="info-box card">
                <h3>{{ $va->nama }}</h3>
                <p>Nilai Jual: {{ $va->nilai_jual }}</p>
                <p>Nilai Beli: {{ $va->nilai_beli }}</p>
            </div>
            </div>
            @endforeach
        </div>

    </section>
</section>
@endsection
