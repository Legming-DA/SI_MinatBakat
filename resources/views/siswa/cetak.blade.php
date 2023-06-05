<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @section('title', ' Cetak Data Siswa')

</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info card-outline">
        <div class="card">
          <h3 align="center">Laporan Data Siswa</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="tbsiswa" class="table table-bordered table-striped"  border="" align="center">
              <thead>
                <tr>
                  <th >NISN</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Usia</th>
                  <th>Email</th>
                  <th>No. Telepon</th>
                  <th>Asal Sekolah</th>
                </tr>
              </thead>
              <tbody>
                @foreach($siswa as $data)
                <tr>
                  <td>{{ $data->nisn }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->jenis_kelamin }}</td>
                  <td>{{ $data->usia }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->no_telepon }}</td>
                  <td>{{ $data->asal_sekolah }}</td>
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