<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        
        <a href="/home/diagnosa" class="btn btn-primary"><i class="fas fa-file"></i> Dianosa Baru</a>
        <a href="/pasien/print/{{$pasien->id}}" class="btn btn-warning" target="blank"><i class="fas fa-print"></i> Print</a>
        <div class="row">
          <div class="col-md-6">
            <table class="table" data-aos="fade-up" >
              <tr>
                <td>Tanggal Identifikasi</td>
                <td>: {{$pasien->tanggal }}</td>
              </tr>
              <tr>
                <td>Keakuratan</td>
                <td>: {{$pasien->akumulasi_cf }}</td>
              </tr>

              <tr>
                <td>Persentasi</td>
                <td>: {{$pasien->persentase }}%</td>
              </tr>

              <tr>
                <td>Diagnosa Penyakit</td>
                <td>: {{$pasien->penyakit->name }}</td>
              </tr>

               <tr>
                <td>Deskripsi</td>
                <td>: {!!$pasien->penyakit->desc !!}</td>
              </tr>

               <tr>
                <td>Penanganan</td>
                <td>: {!!$pasien->penyakit->penanganan !!}</td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
             <table class="table table-hover">
              <tr >
                <th width="70px">No</th>
                <th>Gejala</th>
                <th>Nilai</th>
              </tr>

              @foreach ($diagnosa as $item)
      
              @if ($item->nilai_cf != 0)
                  
                <tr data-aos="fade-up"  data-aos-delay="{{$loop->iteration * 200}}">
                  <td>{{$loop->iteration}}</td>
                  <td>{{isset($item->gejala) ? $item->gejala->name : ''}}</td>
                  <td>{{$item->nilai_cf}}</td>
                  
                </tr>
              @endif

              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>