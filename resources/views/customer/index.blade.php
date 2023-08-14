@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Daftar Customer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Customer</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customer</h5>
                
                <a href="/customer/add" class="btn btn-sm btn-outline-success mb-3">Tambah Customer</a>
                <!-- Customer -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th data-sortable="true">#</th>
                            <th data-sortable="true">Nama</th>
                            <th data-sortable="true">Alamat</th>
                            <th data-sortable="true">Membership</th>
                            <th data-sortable="true">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr data-index="{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->membership->nama }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <a href="/customer/{{ $user->id }}/edit" class="btn btn-outline-warning">Edit</a>
                                  <a href="/customer/{{ $user->id }}/delete" class="btn btn-outline-danger">Delete</a>
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
