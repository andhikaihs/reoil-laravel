@extends('templates/layout')

@section('title', 'Home')

@section('content')
<section class="hero-section" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-112 hero-text-image">
                <div class="row">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 data-aos="fade-right">Manfaatkan Limbah Minyak Jelantahmu!</h1>
                        <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Reoil membantu anda untuk mengolah minyak jelantah.</p>
                        <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Mulai</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="main">
    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade-up">
            <h2 class="section-heading">Beberapa Produk Hasil Pengolahan Minyak Jelantah Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Sabun</h3>
              <p>Minyak jelantah bisa diolah menjadi berbagai jenis sabun.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-brightness-high"></i>
              </div>
              <h3 class="mb-3">Biodiesel</h3>
              <p>Menjadi bahan pokok dalam pembuatan biofuel, terutama biodiesel.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Aroma terapi</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-8" >
            <img src="img/earth3d.png" alt="Image" class="img-fluid" data-aos="fade-up" width="30%">
            <h2 class="section-heading mt-5">Cukup Lakukan 3 Langkah</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Daftar</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Isi Data Diri</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Minta Penjemputan</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Sejarah</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
          </div>
          <div class="col-md-6 text-center" data-aos="fade-left">
            <img src="img/books.png" alt="Image" class="img-fluid" width="70%">
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Penjemputan</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
          </div>
          <div class="col-md-6 text-center" data-aos="fade-right">
            <img src="img/kurir.png" alt="Image" class="img-fluid" width="80%">
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Timbal Balik dari Konsumen</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Sangat bermanfaat!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>
                    <p class="review-user">
                      <img src="img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Suriyanti</span>, &mdash; IRT
                      </span>
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Mengurangi Limbah Rumah Tangga</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>
                    <p class="review-user">
                      <img src="img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Johan Smith</span>, &mdash; Pemilik Warung
                      </span>
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Terima Kasih!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>
                    <p class="review-user">
                      <img src="img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black"></span>MeiLin, &mdash; Manager Restoran
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center">
            <h2>Mulai sekarang!</h2>
          </div>
          <div class="col-md-6 text-center">
            <iframe width="500" height="215" src="https://www.youtube.com/embed/F-v7UbnpXf8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection