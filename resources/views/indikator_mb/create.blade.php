@extends('layouts.app')
@section('title', 'Input Data Indikator')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold">Data Indikator</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Input Data Indikator</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Create</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('indikator_mb.store') }}" method="POST">
    @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Kode Indikator</label>
                <input type="text" class="form-control" name="kd_indikator" placeholder="Kode Indikator">
            </div>
            <div class="form-group">
                <label>Nama Indikator</label>
                <input type="text" class="form-control" name="nama_indikator" placeholder="Nama Indikator">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="textarea" class="form-control" name="keterangan" placeholder="keterangan">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
</div>
</div>

<!-- /.card -->
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