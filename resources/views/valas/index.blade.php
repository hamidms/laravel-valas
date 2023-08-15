@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Daftar Valas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Valas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Valas</h5>
                
                <a href="/valas/add" class="btn btn-sm btn-outline-success mb-3">Tambah Valas</a>
                <!-- Valas -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th data-sortable="true">#</th>
                            <th data-sortable="true">Nama</th>
                            <th data-sortable="true">Nilai Jual</th>
                            <th data-sortable="true">Nilai Beli</th>
                            <th data-sortable="true">Tanggal Rate</th>
                            <th data-sortable="true">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($valas as $va)
                        <tr data-index="{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $va->nama }}</td>
                            <td>{{ $va->nilai_jual }}</td>
                            <td>{{ $va->nilai_beli }}</td>
                            <td>{{ $va->tanggal_rate }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <a href="/valas/{{ $va->nama }}/detail" class="btn btn-outline-info">Detail</a>
                                  <a href="/valas/{{ $va->id }}/edit" class="btn btn-outline-warning">Edit</a>
                                  <form action="/valas/{{ $va->id }}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this valas?')">
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
