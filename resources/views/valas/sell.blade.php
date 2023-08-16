@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Jual Valas</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/valas/dashboard">Valas</a></li>
        <li class="breadcrumb-item active">Sell</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Jual Valas
                    </h5>

                    <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Valas</th>
                            <th scope="col">Nilai Beli</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($transactions as $transaction)
                          <tr data-index="{{ $loop->iteration }}">
                              <td>{{ $loop->iteration }}</td>
                              <td class="fw-bold">{{ $transaction->valas->nama }}</td>
                              <td>{{ $transaction->rate }}</td>
                              <td>{{ $transaction->transaction->tgl_transaksi }}</td>
                              <td>
                                <form action="/transaction/sell/{{ $transaction->id }}" method="POST" onsubmit="return confirm('Are you sure you want to sell this valas?')">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Jual</button>
                                </form>
                              </td>
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
