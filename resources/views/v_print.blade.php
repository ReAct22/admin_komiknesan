
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h5 class="page-header">
          <i class="fas fa-globe"></i> Laporan Siswa
          <small class="float-right">Date: {{ date("d-M-Y") }}</small>
        </h5>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->

    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Mata</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
        ?>
        @foreach ($siswa as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama_siswa}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->mapel}}</td>
        </tr>
        @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
