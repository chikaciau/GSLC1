@extends('layouts.app')

@section('content')
<div class="container">
<h2>Teacher List</h2>

<table class="table table-primary table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($teachers as $teacher)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $teacher->name }}</td>
        </tr>
        @empty
        <p>No users</p>
        @endforelse
    </tbody>
    <tfoot>
        @for($a=1; $a<=$teachers->count(); $a++)
            @php $count++ @endphp
        @endfor
        <p>Jumlah Guru: {{ $count }}</p>
    </tfoot>
  </table>

</div>
@endsection