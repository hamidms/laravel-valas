@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Tambah Data Valas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="/valas">Valas</a></li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Valas</h5>

              <!-- Tambah Data Valas -->
              <form class="row g-3" method="POST" action="{{ route('valas.store') }}" novalidate>
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control" id="floatingName" placeholder="Nama Valas">
                        <label for="floatingName">Nama Valas</label>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="nilai_jual" class="form-control" id="floatingNilaiJual" placeholder="Nilai Jual Valas">
                        <label for="floatingNilaiJual">Nilai Jual Valas</label>
                    </div>
                    @error('nilai_jual')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="nilai_beli" class="form-control" id="floatingNilaiBeli" placeholder="Nilai Beli Valas">
                        <label for="floatingNilaiBeli">Nilai Beli Valas</label>
                    </div>
                    @error('nilai_beli')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="date" name="tanggal_rate" class="form-control" id="floatingTanggalRate" placeholder="Tanggal Rate" value="{{ old('tanggal_rate', date('Y-m-d')) }}">
                        <label for="floatingTanggalRate">Tanggal Rate</label>
                    </div>
                    @error('tanggal_rate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/valas" class="btn btn-secondary">Kembali</a>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
      </div>
    </div>
  </section>
  @endsection
