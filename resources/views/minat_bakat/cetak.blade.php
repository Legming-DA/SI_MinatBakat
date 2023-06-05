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
          <h3 align="center">Laporan Data Minat-Bakat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="tbsiswa" class="table table-bordered table-striped"  border="" align="center">
          <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Minat-Bakat</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($minat_bakat as $data)
                <tr>
                <td>{{ $data->kd_minatbakat }}</td>
                  <td>{{ $data->jenis_minatbakat }}</td>
                  <td>{{ $data->deskripsi }}</td>
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