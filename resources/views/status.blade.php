@extends('templates/layout')

@section('title', 'Status')

@section('content')
<main id="main">
    <section class="hero-section inner-page">
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
                <h1 data-aos="fade-up" data-aos-delay="">Status Pesanan</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="service-details" class="service-details" style="background-color: #F8F9FA;">
      <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: 100px; margin-bottom: 100px">
        
      <div class="row justify-content-md-center">
      <div class="col-12">
        @if (count($services) == 0)
          <div class="alert alert-warning" role="alert">
            Anda belum melakukan pemesanan.
          </div>
        @else
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID Pesanan</th>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Layanan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->date }}</td>
                    <td>{{ Auth::user()->username }}</td>
                    <td>{{ $service->phone }}</td>
                    <td>{{ $service->address }}</td>
                    <td>{{ $service->service }}</td>
                    <td>{{ $service->volume == 0 ? "-" : $service->volume . " Liter" }}</td>
                    <td>{{ $service->status }}</td>
                    <td><button type="button" onclick="window.location='/service/cancel/{{$service->id}}'" class="btn btn-danger btn-sm"" {{ in_array($service->status, array("Batal", "Selesai")) ? "disabled" : ""}}>Batalkan</button></td>
                </tr>
              @endforeach
            </tbody>
        </table>
        @endif
      </div>
    </section>
</main>
@endsection