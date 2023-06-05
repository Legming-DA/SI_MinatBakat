@extends('layouts.app')
@section('title', 'Edit Data Aturan')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold">Edit Data Aturan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('aturan.index') }}">Data Aturan</a></li>
                    <li class="breadcrumb-item active">Edit Data Aturan</li>
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
                    <h3 class="card-title">Edit Aturan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('hasil_indikasi.update', $hasil_indikasi->kd_hasil) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" class="form-control" name="kd_hasil" value="{{ $hasil_indikasi->kd_hasil }}" placeholder="Nomor">
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <select class="form-control" name="nisn">
                                @foreach ($siswa as $nisn => $namaSiswa)
                                <option value="{{ $nisn}}" {{ $hasil_indikasi->nisn == $nisn ? 'selected' : '' }}>
                                    {{ $namaSiswa }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Aturan</label>
                            <select class="form-control" name="kd_aturan">
                                @foreach ($aturan as $kd_aturan => $hasilAturan)
                                <option value="{{ $kd_aturan }}" {{ $hasil_indikasi->kd_aturan == $kd_aturan ? 'selected' : '' }}>
                                    {{ $hasilAturan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="kd_jurusan">
                                @foreach ($jurusan as $kd_jurusan => $bidangJurusan)
                                <option value="{{ $kd_jurusan }}" {{ $hasil_indikasi->kd_jurusan == $kd_jurusan ? 'selected' : '' }}>
                                    {{ $bidangJurusan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hasil Indikasi</label>
                            <input type="text" class="form-control" name="hasil_indikasi" value="{{ $hasil_indikasi->hasil_indikasi }}" placeholder="Hasil Aturan">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-save mr-1" aria-hidden="true"></i>Save Changes</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>
    </div>
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