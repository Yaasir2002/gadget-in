@extends('template/admin')

@section('content1')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Pesanan</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Home</a></li>
      <li class="breadcrumb-item active">Pesanan</li>
    </ol>
  </div>
</div>
@endsection

@section('content2')
<div class="table-responsive" style="max-height: 400px; overflow-x: scroll;">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Nama</th>
        <th scope="col">Produk</th>
      </tr>
    </thead>
    <tbody>
      @php $number = 1;  @endphp
      @foreach($orders as $order)
      <tr>
        <td>{{ $number }}</td>
        <td>{{ $order->kode }}</td>
        <td>{{ $order->tgl }}</td>
        <td>{{ $order->jumlah }}</td>
        <td style="width: 40%;">{{ $order->keterangan }}</td>
        <td>{{ $order->customer->nama }}</td>
        <td>{{ $order->product->nama }}</td>
      </tr>
      @php $number++ @endphp
      @endforeach
    </tbody>
  </table>
</div>
@endsection