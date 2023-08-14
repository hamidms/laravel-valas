@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Tambah Data Customer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="/customer">Customer</a></li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Customer</h5>

              <!-- Tambah Data Customer -->
              <form class="row g-3" method="POST" action="{{ route('customer.store') }}" novalidate>
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Nama Customer">
                        <label for="floatingName">Nama Customer</label>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username">
                        <label for="floatingUsername">Username</label>
                    </div>
                    @error('username')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="alamat" class="form-control" placeholder="Alamat" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" name='membership_id' id="floatingSelect" aria-label="Membership">
                      <option selected="" value="3">Basic</option>
                      <option value="4">Silver</option>
                      <option value="5">Platinum</option>
                    </select>
                    <label for="floatingSelect">Membership</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/customer" class="btn btn-secondary">Kembali</a>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
      </div>
    </div>
  </section>
  @endsection
