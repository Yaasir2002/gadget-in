@extends('template/admin')

@section('content2')
<a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">No</th>
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
        <td style="width: 20%;">{{ $product->deskripsi }}</td>
        <td>{{ $product->foto }}</td>
        <td>{{ $product->type->nama }}</td>
        <td style="white-space: nowrap;">
          <a href="{{ route('produk.edit', ['id' => $product->id]) }}" class="btn btn-success">Edit</a>
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