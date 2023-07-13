@extends('template/admin')

@section('content2')
<div class="table-responsive" style="max-height: 400px; overflow-x: scroll;">
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
      @php $number = 1;  @endphp
      @foreach($users as $user)
      <tr>
        <td>{{ $number }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td style="width: 20%;">{{ $user->password }}</td>
        <td>{{ $user->role }}</td>
      </tr>
      @php $number++ @endphp
      @endforeach
    </tbody>
  </table>
</div>
@endsection