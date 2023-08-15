@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Welcome, {{ Auth::user()->name }}</h5>
            <p>Berikut beberapa Valas yang mungkin kamu tertarik.</p>
          </div>
        </div>

      </div>

      </div>
    </div>
  </section>
  @endsection
