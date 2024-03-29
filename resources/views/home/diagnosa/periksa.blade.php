<div class="container my-3">


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table" style="max-width: 400px">
              <tr>
                <td>Tanggal Pemeriksaan</td>
                <td>: {{$pasien->tanggal}}</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

            {{-- <div class="card shadow-sm">ss</div> --}}
            <h5><strong>Pilih Gejala</strong></h5>

            <table class="table table-hover">
              <tr>
                <th width="70px">No</th>
                <th>Gejala</th>
                <th>#</th>
              </tr>

              @foreach ($gejala as $item)
                  <?php
                      $cek = App\Models\Diagnosa::wherePasienId($pasien->id)->whereGejalaId($item->id)->first();
                      if($cek == null){
                  ?>
                  <tr data-aos="fade-up"  data-aos-delay="{{$loop->iteration * 200}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-cogs"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="true">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="/home/diagnosa/pilih?gejala_id={{$item->id}}&nilai=0.4">Kurang Yakin</a>
                          <a class="dropdown-item" href="/home/diagnosa/pilih?gejala_id={{$item->id}}&nilai=0.8">Cukup Yakin</a>
                          <a class="dropdown-item" href="/home/diagnosa/pilih?gejala_id={{$item->id}}&nilai=1">Yakin</a>
                            
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                }
                  ?>
              @endforeach
            </table>
          </div>

           <div class="col-md-6">
            <a href="/home/diagnosa/proses" class="btn btn-danger btn-block"><i class="fas fa-spinner"></i> Diagnosa</a>
            <table class="table table-hover">
              <tr>
                <th width="70px">No</th>
                <th>Gejala</th>
                <th>Nilai</th>
                <th>#</th>
              </tr>

              @foreach ($diagnosa as $item)
      
                  <tr data-aos="fade-up"  data-aos-delay="{{$loop->iteration * 200}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->gejala->name}}</td>
                    <td>{{$item->nilai_cf}}</td>
                    <td>
                      <a href="/home/diagnosa/delete?diagnosa_id={{$item->id}}"><i class="fas fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

              @endforeach
            </table>
          </div>

        </div>


      </div>
    </div>
  </div>
</div>
</div>