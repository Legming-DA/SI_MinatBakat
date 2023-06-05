<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @section('title', ' Cetak Data Jurusan')

</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info card-outline">
        <div class="card">
          <h3 align="center">Laporan Data Jurusan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="tbsiswa" class="table table-bordered table-striped"  border="" align="center">
          <thead>
                <tr>
                  <th>No</th>
                  <th>Bidang Jurusan</th>
                  <th>Deskripsi</th>
                  <th>Persyaratan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($jurusan as $data)
                <tr>
                  <td>{{ $data->kd_jurusan }}</td>
                  <td>{{ $data->bidang_jurusan }}</td>
                  <td>{{ $data->deskripsi }}</td>
                  <td>{{ $data->persyaratan }}</td>
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