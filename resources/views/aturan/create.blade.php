@extends('layouts.app')
@section('title', 'Input Data Aturan')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold">Data Aturan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Input Data Aturan</li>
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
                <form action="{{ route('aturan.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Aturan</label>
                            <input type="text" class="form-control" name="kd_aturan" placeholder="Kode Peran">
                        </div>
                        <div class="form-group">
                            <label for="peran">Indikator</label>
                            <select class="form-control" id="peran" name="kd_indikator">
                                <option value="">Pilih Indikator</option>
                                @foreach ($indikatorList as $indikatorId => $namaIndikator)
                                <option value="{{ $indikatorId }}">{{ $namaIndikator }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="peran">Minat dan Bakat</label>
                            <select class="form-control" id="peran" name="kd_minatbakat">
                                <option value="">Pilih Minat dan Bakat</option>
                                @foreach ($minatbakatList as $minatbakatId => $jenisMinatBakat)
                                <option value="{{ $minatbakatId }}">{{ $jenisMinatBakat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hasil Aturan</label>
                            <input type="text" class="form-control" name="hasil_aturan" placeholder="Nama Peran">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
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