<div class="container my-5">
  <div class="row">
    <div class="col-md-8">
      <div class="text-center mb-4">
        <h1 class="brush-font text-orange pt-3">Galeri</h1>
      </div>
      
<style>
  .img-wrapper{
    max-width: 300px;
    max-height: 200px;
    overflow: hidden;
  }
</style>

      <div class="row ">
    
        @foreach ($galeri as $item)
            
        <a href="{{ $item->gambar }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
          <div class="img-wrapper" data-aos="fade-up" data-aos-delay="{{ $loop->iteration*200 }}">
            <img src="{{ $item->gambar }}" class="img-fluid rounded py-3" target="blank">
          </div>
        </a>
        @endforeach
      </div>
    
      <div class="d-flex justify-content-center mt-5">
        {{-- {{$galeri->links()}} --}}
      </div>
    </div>


    
  </div>
</div>



<script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>