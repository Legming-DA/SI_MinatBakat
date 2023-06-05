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
          <h3 align="center">Laporan Data Aturan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="tbsiswa" class="table table-bordered table-striped"  border="" align="center">
          <thead>
                <tr>
                  <th class="sorting sorting_asc">No</th>
                  <th>Indikator</th>
                  <th>Minat-Bakat</th>
                  <th>Hasil Aturan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($aturan as $data)
                <tr>
                  <td>{{ $data->kd_aturan }}</td>
                  <td>{{ $data->indikator_mb->nama_indikator }}</td>
                  <td>{{ $data->minat_bakat->jenis_minatbakat }}</td>
                  <td>{{ $data->hasil_aturan }}</td>
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