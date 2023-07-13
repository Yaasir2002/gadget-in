@extends('template/admin')

@section('content2')
<a href="{{ route('type.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
<div class="table-responsive" style="max-height: 400px; overflow-x: scroll;">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Tipe Produk</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php $number = 1;  @endphp
      @foreach($types as $type)
      <tr>
        <td class="text-center">{{ $number }}</td>
        <td>{{ $type->nama }}</td>
        <td style="white-space: nowrap;">
          <a href="{{ route('type.edit3', ['id' => $type->id]) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('type.destroy', $type) }}" method="POST" style="display: inline;">
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