
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($banner as $key => $item)
    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$item->urutan == '1' ? 'active' : ''}}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">

    @foreach ($banner as $item)
        
    <div class="carousel-item {{$item->urutan == '1' ? 'active' : ''}}">
      <img class="first-slide" src="{{$item->image}}" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>{{$item->topik}}</h1>
          <p>{{$item->desc}}</p>
          <p><a class="btn btn-lg btn-success" href="/home/diagnosa" role="button">Mulai Diagnosa</a></p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container">

  <div class="text-center">
    <h5><b>Tentang</b></h5>
  </div>

  <div class="row">
    <div class="col-md-6">
      <img src="/img/about.jpg" width="100%" data-aos="fade-up" data-aos-delay="300" alt="">
    </div>
    <div class="col-md-6">
      

        <p data-aos="fade-up" data-aos-delay="600">Aplikasi sistem pakar diagnosa penyakit tomat adalah sebuah sistem yang dirancang untuk membantu dalam mengidentifikasi penyakit yang mungkin menyerang tanaman tomat. Sistem ini menggunakan kecerdasan buatan dan pengetahuan yang terkait dengan penyakit pada tanaman tomat untuk memberikan diagnosis yang akurat.

          Tujuan dari aplikasi ini adalah untuk membantu petani atau ahli pertanian dalam mengatasi masalah penyakit pada tanaman tomat dengan cara yang lebih efisien. Dengan menggunakan aplikasi ini, pengguna dapat memasukkan gejala atau karakteristik yang terlihat pada tanaman tomat yang sedang sakit. Berdasarkan informasi yang diberikan, sistem pakar akan menganalisis data dan membandingkannya dengan pengetahuan yang ada untuk menghasilkan diagnosis yang tepat.
          
          Aplikasi ini biasanya menggunakan aturan atau basis pengetahuan yang telah dibangun sebelumnya. Basis pengetahuan ini berisi informasi tentang gejala-gejala yang terkait dengan setiap penyakit, serta langkah-langkah yang dapat diambil untuk mengatasi penyakit tersebut. Sistem pakar akan mencocokkan gejala yang dimasukkan oleh pengguna dengan gejala yang ada dalam basis pengetahuan untuk menghasilkan hasil diagnosa.
          
          Dengan adanya aplikasi sistem pakar diagnosa penyakit tomat, diharapkan petani atau ahli pertanian dapat dengan cepat mengenali dan mengatasi penyakit pada tanaman tomat secara efektif. Aplikasi ini juga dapat membantu dalam mengurangi kerugian yang disebabkan oleh penyakit tanaman tomat dan meningkatkan hasil panen secara keseluruhan.</p>
    </div>
  </div>
</div>


<div class="col-md-12 bg-success py-5 my-5">
  <div class="container">
    <h5 class="text-white">Apa yang kami Punya?</h5>
    <p class="text-white">Lihat selengkapnya di laman ini</p>
  </div>
</div>


@include('home.home.galeri');