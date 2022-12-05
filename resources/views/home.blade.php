@extends ('layouts.app')

@section('content')

<body style = "">
  <!-- Header  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, </h1>
        <h1>I am Ailsa! </h1>
        <a href="/contact" class="cta">Contact Me</a>
      </div>
    </div>
  </section>
  <!-- header  -->
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="/foto.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About Me</h1>
        <p> Saya adalah mahasiswa semester tiga program teknologi Rekayasa Perangkat Lunak 
            yang berkuliah di Universitas Gadjah Mada yang tertarik dengan kepenulisan dan
            web development. Merupakan pribadi yang mudah beradaptasi, memiliki manajemen waktu yang baik, 
            pemerhati detail dan dapat bekerja dengan target. Meskipun saya sedang berkuliah, 
            saya mampu mengerjakan tugas secara on-site.
         </p>
</div>
  </section>
  <!-- End About Section -->
@endsection