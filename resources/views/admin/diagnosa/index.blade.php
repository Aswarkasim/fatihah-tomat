<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">

        <form action="/admin/diagnosa/pasien/create" method="POST">
          @csrf
        <div class="form-group">
          <label for=""><b>Tanggal</b></label>
          <input type="date" class="form-control" name="tanggal" required placeholder="Tanggal">
        </div>


        <div class="float-right">
          <button type="submit" class="btn btn-primary">Masuk ke diagnosa <i class="fas fa-arrow-right"></i></button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>