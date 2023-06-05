<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @section('title', ' Cetak Data Aturan')

</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info card-outline">
        <div class="card">
          <h3 align="center">Laporan Data Hasil</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="tbsiswa" class="table table-bordered table-striped"  border="" align="center">
          <thead>
                <tr>
                  <th class="sorting sorting_asc">No</th>
                  <th>Nama Siswa</th>
                  <th>Aturan</th>
                  <th>Bidang Jurusan</th>
                  <th>Hasil Indikasi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($hasil_indikasi as $data)
                <tr>
                  <td>{{ $data->kd_hasil }}</td>
                  <td>{{ $data->siswa->nama }}</td>
                  <td>{{ $data->aturan->hasil_aturan }}</td>
                  <td>{{ $data->jurusan->bidang_jurusan }}</td>
                  <td>{{ $data->hasil_indikasi }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
</body>
</html>