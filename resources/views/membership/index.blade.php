@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Daftar Membership</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Membership</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Membership</h5>
                
                <a href="/membership/add" class="btn btn-sm btn-outline-success mb-3">Tambah Membership</a>
                <!-- Membership -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th data-sortable="true">#</th>
                            <th data-sortable="true">Nama</th>
                            <th data-sortable="true">Discount</th>
                            <th data-sortable="true">Min. Profit</th>
                            <th data-sortable="true">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($memberships as $membership)
                        <tr data-index="{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $membership->nama }}</td>
                            <td>{{ $membership->discount }} %</td>
                            <td>{{ $membership->minimum_profit }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <a href="/membership/{{ $membership->id }}/edit" class="btn btn-outline-warning">Edit</a>
                                  <form action="/membership/{{ $membership->id }}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this membership?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

      </div>
    </div>
  </section>
  @endsection
