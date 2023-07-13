@extends('template/admin')

@section('content2')
<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
<div class="table-responsive" style="max-height: 400px; overflow-x: scroll;">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">NO. Hp</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php $number = 1;  @endphp
      @foreach($customers as $customer)
      <tr>
        <td>{{ $number }}</td>
        <td>{{ $customer->nama }}</td>
        <td>{{ $customer->address }}</td>
        <td>{{ $customer->no_hp }}</td>
        <td style="white-space: nowrap;">
          <a href="{{ route('pelanggan.edit2', ['id' => $customer->id]) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('pelanggan.destroy', $customer) }}" method="POST" style="display: inline;">
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