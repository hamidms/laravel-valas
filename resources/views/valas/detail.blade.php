@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Detail Valas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="/valas">Valas</a></li>
        <li class="breadcrumb-item active">Detail</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <canvas id="myChart">
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Valas</h5>
                
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
  
<script>
    var valas_tanggal_rate = <?php echo json_encode($valas_tanggal_rate)?>;
    var valas_nilai_jual = <?php echo json_encode($valas_nilai_jual)?>;
    var nilai_jual_tertinggi = <?php echo json_encode($nilai_jual_tertinggi)?>;
    var nilai_jual_terendah = <?php echo json_encode($nilai_jual_terendah)?>;
    console.log(parseInt(nilai_jual_tertinggi));
    new Chart("myChart", {
      type: "line",
      data: {
        labels: valas_tanggal_rate,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: valas_nilai_jual
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: parseInt(nilai_jual_tertinggi), max:parseInt(nilai_jual_terendah)}}],
        }
      }
    });
    </script>
  @include('partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>

  @endsection
