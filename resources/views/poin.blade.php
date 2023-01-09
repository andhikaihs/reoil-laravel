@extends('templates/layout')

@section('title', 'Poin')

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
                <h1 data-aos="fade-up" data-aos-delay="">Tukar Poin</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="section bg-light">
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block alert-dismissible" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif ($message = Session::get('error'))
                <div class="alert alert-danger alert-block alert-dismissible" role="alert">	
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row align-items-stretch" data-aos="fade-down">
              <div class="row">
                <div class="col-md-4 text-center bg-info rounded-pill">
                  <h3>Poin Anda</h3>
                </div>
                <div class="col-md-8 text-center text-white bg-secondary">
                  <h3>{{ $point }}</h3>
                </div>
              </div>
                <div class="col-lg-4 my-5 mb-lg-0" data-aos="fade-up" >
                    <div class="pricing h-75 text-center">
                        <h3>Voucher Indomaret</h3>
                        <ul class="list-unstyled">
                            <li>10000 Poin = Voucher Belanja Rp10.000</li>
                            <li></li>
                        </ul>
                        <img src="img/indomaret.png" alt="Image" class="img-fluid" width="70%">
                        <div class="d-grid gap-1 col-4 mx-auto">
                            <button class="btn btn-primary mt-5" onclick="window.location='/poin/claim/indomaret'">Tukar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-5 mb-lg-0" data-aos="fade-up" >
                    <div class="pricing h-75 text-center popular">
                        <h3>Voucher Gojek</h3>
                        <ul class="list-unstyled">
                            <li>15000 Poin = Voucher Gojek Rp10.000</li>
                            <li></li>
                        </ul>
                        <img src="img/gojek.png" alt="Image" class="img-fluid" width="50%">
                        <div class="d-grid gap-1 col-4 mx-auto">
                          <button class="btn btn-light mt-5" onclick="window.location='/poin/claim/gojek'">Tukar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-5 mb-lg-0" data-aos="fade-up" >
                    <div class="pricing h-75 text-center">
                        <h3>Voucher Ikea</h3>
                        <ul class="list-unstyled">
                            <li>20000 Poin = Voucher Belanja Rp10.000</li>
                            <li></li>
                        </ul>
                        <img src="img/ikea.png" alt="Image" class="img-fluid" width="55%">
                        <div class="d-grid gap-1 col-4 mx-auto">
                          <button class="btn btn-primary mt-5" onclick="window.location='/poin/claim/ikea'">Tukar</button>
                        </div>
                    </div>  
                </div>
            </div>
        </div> 
    </section>
    <section id="service-details" class="service-details" style="background-color: #F8F9FA;">
      <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 100px">
        
      <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h2 class="section-heading">Riwayat Poin</h2>
          </div>
      </div>
      <div class="row align-items-stretch">
      <div class="row justify-content-md-center">
      <div class="col-12">
        @if (count($pointhistory) + count($voucherhistory) == 0)
        <div class="alert alert-warning" role="alert">
          Riwayat kosong.
        </div>
        @else
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Poin</th>
                <th scope="col">Kode Voucher</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pointhistory as $item)
              <tr>
                <td>{{ $item->date }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ "+" . $item->point }}</td>
                <td>{{ $item->code ?? "-" }}</td>
              </tr>
              @endforeach
              @foreach ($voucherhistory as $item)
              <tr>
                <td>{{ $item->date }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ "-" . $item->point }}</td>
                <td>{{ $item->code }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
        @endif
      </div>
    </section>
</main>
<!-- End #main -->
@endsection