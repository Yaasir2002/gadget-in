@extends('template/admin')

@section('content1')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Produk</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Home</a></li>
      <li class="breadcrumb-item active">Produk</li>
    </ol>
  </div>
</div>
@endsection

@section('content2')
<a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
<div class="table-responsive" style="max-height: 400px; overflow-x: scroll;">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Produk</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Foto</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php $number = 1;  @endphp
      @foreach($products as $product)
      <tr>
        <td>{{ $number }}</td>
        <td>{{ $product->kode }}</td>
        <td>{{ $product->nama }}</td>
        <td>{{ $product->stok }}</td>
        <td>{{ $product->harga }}</td>
        <td style="width: 40%;">{{ $product->deskripsi }}</td>
        <td>{{ $product->foto }}</td>
        <td>{{ $product->type->nama }}</td>
        <td style="white-space: nowrap;">
          <a href="{{ route('produk.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('produk.destroy', $product) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @php $number++ @endphp
      @endforeach
    </tbody>
  </table>
</div>
@endsection