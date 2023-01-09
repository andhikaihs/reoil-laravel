@extends('templates/layout')

@section('title', 'Admin')

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
                <h1 data-aos="fade-up" data-aos-delay="">Transaksi</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: 100px; margin-bottom: 100px">
        
      <div class="row justify-content-md-center">
      <div class="col-12">
        @if (count($transactions) == 0)
        <div class="alert alert-warning" role="alert">
            Belum ada transaksi.
        </div>
        @else
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID Pesanan</th>
                <th scope="col">ID User</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                  <th scope="row">{{ $transaction->id }}</th>
                  <td>{{ $transaction->user_id }}</td>
                  <td>{{ $transaction->name }}</td>
                  <td>{{ $transaction->phone }}</td>
                  <td>{{ $transaction->address }}</td>
                  <form action="{{'/transaksi/update/' . $transaction->id}}" method="POST">
                    @csrf
                    <td><input type="text" id="volume" name="volume" class="me-1" style="width: 35px;" value="{{ $transaction->volume }}" {{ in_array($transaction->status, array("Selesai", "Batal")) ? "disabled" : "" }}>Liter</td>
                    <td>
                      <select name="status" id="status" class="form-control" {{ in_array($transaction->status, array("Selesai", "Batal")) ? "disabled" : "" }}>
                        <option value="Menunggu Konfirmasi" {{ $transaction->status == "Menunggu Konfirmasi" ? "selected" : "" }}>Menunggu Konfirmasi</option>
                        <option value="Permintaan Diterima" {{ $transaction->status == "Permintaan Diterima" ? "selected" : "" }}>Permintaan Diterima</option>
                        <option value="Kurir Menjemput" {{ $transaction->status == "Kurir Menjemput" ? "selected" : "" }}>Kurir Menjemput</option>
                        <option value="Diambil Kurir" {{ $transaction->status == "Diambil Kurir" ? "selected" : "" }}>Diambil Kurir</option>
                        <option value="Selesai" {{ $transaction->status == "Selesai" ? "selected" : "" }}>Selesai</option>
                        <option value="Batal" {{ $transaction->status == "Batal" ? "selected" : "" }}>Batal</option>
                      </select>
                    </td>
                    <td>
                      <button class="btn btn-warning" type="submit" {{ in_array($transaction->status, array("Selesai", "Batal")) ? "disabled" : "" }}>Simpan</button>
                    </td>
                  </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
      </div>
    </section>
    </main>
@endsection