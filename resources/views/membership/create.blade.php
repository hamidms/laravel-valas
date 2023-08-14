@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Tambah Data Membership</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="/membership">Membership</a></li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Membership</h5>

              <!-- Tambah Data Membership -->
              <form class="row g-3" method="POST" action="{{ route('membership.store') }}" novalidate>
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control" id="floatingName" placeholder="Nama Membership">
                        <label for="floatingName">Nama Membership</label>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="discount" class="form-control" id="floatingdiscount" placeholder="Discount">
                        <label for="floatingdiscount">Discount</label>
                    </div>
                    @error('discount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="minimum_profit" class="form-control" id="floatingminimum_profit" placeholder="Minimum Profit">
                        <label for="floatingminimum_profit">Minimum Profit</label>
                    </div>
                    @error('minimum_profit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/membership" class="btn btn-secondary">Kembali</a>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
      </div>
    </div>
  </section>
  @endsection
