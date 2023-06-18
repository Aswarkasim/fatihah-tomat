<div class="container p-5">
  <div class="text-center">

    <h4><b>DIAGNOSA</b></h4>
  </div>

  <div class="row">
    <div class="offset-3 col-md-6">
      <div class="card">
        <div class="card-body">


          <form action="/home/diagnosa/pasien/create" method="POST">
            @csrf
          <div class="form-group">
            <label for=""><b>Tanggal</b></label>
            <input type="date" class="form-control mt-2" name="tanggal" required placeholder="Tanggal">
          </div>


          <div class="float-right">
            <button type="submit" class="btn btn-success mt-2" data-aos="fade-up">Masuk ke diagnosa <i class="fas fa-arrow-right"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>