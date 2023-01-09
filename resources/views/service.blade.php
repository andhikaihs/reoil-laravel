@extends('templates/layout')

@section('title', 'Service')

@section('content')
<main id="main">
    <!-- ======= FeatPricingures Section ======= -->
    <div class="hero-section inner-page">
      <div class="wave">
        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#F8F9FA">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Our Services</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h2 class="section-heading">Layanan Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" >
              <div class="pricing h-75 text-center">
                <h3>Pengumpulan</h3>
                <ul class="list-unstyled">
                  <li>Minyak jelantah kami kumpulkan melalui penjemputan ataupun pengantaran</li>
                  <li></li>
                </ul>
                <img src="img/collect.png" alt="Image" class="img-fluid" width="55%">
              </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-down" >
              <div class="pricing h-75 text-center popular">
                <h3>Pengolahan</h3>
                <ul class="list-unstyled">
                  <li>Pengolahan minyak jelantah menjadi produk yang siap pakai</li>
                  <li></li>
                </ul>
                <img src="img/olah.png" alt="Image" class="img-fluid" width="55%">
              </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" >
              <div class="pricing h-75 text-center">
                  <h3>Pembelian</h3>
                  <ul class="list-unstyled">
                    <li>Produk hasil pengolahan minyak jelantah akan dijual kembali dan disumbangkan</li>
                    <li></li>
                  </ul>
                  <img src="img/sell.png" alt="Image" class="img-fluid" width="55%">
                </div>
              </div>  
        </div>
      </div>
      
    </section>
    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 me-auto text-center">
            <h2>Mulai Dari Langkah Kecil</h2>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->
  </main><!-- End #main -->
@endsection