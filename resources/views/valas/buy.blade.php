@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Beli Valas</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/valas/dashboard">Valas</a></li>
        <li class="breadcrumb-item active">Buy</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Beli Valas
                    </h5>
                    <form action="/transaction/checkout" method="GET">
                        <div class="row mb-3">
                            
                            <label class="col-sm-2 col-form-label mb-4">Select Valas</label>
                            <div class="col-sm-10 mb-4">
                              <select class="form-select" aria-label="Default select example" name="valas_id">
                                <option selected="">Pilih Valas</option>
                                @foreach ($valas as $va)
                                <option value="{{ $va->id }}">{{ $va->nama }} | {{ $va->nilai_beli }}</option>
                                @endforeach
                              </select>
                            </div>

                            <label for="qty" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10 mb-4">
                                <input type="text" name="qty" class="form-control mb-4" id="floatingQty" placeholder="Jumlah yang ingin dibeli">
                            </div>
                          </div>

                          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/transaction/dashboard" class="btn btn-secondary">Kembali</a>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
