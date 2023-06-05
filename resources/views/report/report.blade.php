@extends('layouts.app')
@section('title', 'Reports')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="font-weight-bold">Report Data</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<div class="card">
  <div class="card-header">
    <a href="#" class="btn btn-secondary btn-xs float-right">
      <i class="fas fa-cloud-upload-alt"></i>
      Save to Cloud</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="sorting sorting_asc">No.</th>
          <th>Laporan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Data Siswa</td>
          <td>
            <a href="{{ route('siswa.cetak') }}">
              <button type="button" class="btn btn-danger btn-xs d-inline-block">
                <i class="fas fa-file-pdf"></i> PDF</button> </a>
          </td>
        </tr>
        <!-- <tr>
          <td>2.</td>
          <td>Data Siswa</td>
          <td>
            <div class="text-center">
              <button type="button" class="btn btn-success btn-xs d-inline-block">
                <i class="fas fa-file-excel"></i>
                CSV</button>
              <button type="button" class="btn btn-danger btn-xs d-inline-block">
                <i class="fas fa-file-pdf"></i> PDF</button>
            </div>
          </td>
        </tr> -->
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection