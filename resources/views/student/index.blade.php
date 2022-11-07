@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student List</h1>    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                @if($dt->job == 'student')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->name }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
  </table>
  <h1>Teacher List</h1>    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                @if($dt->job == 'teacher')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->name }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
  </table>
    @while($count<=$data->count())
        @php $count++ @endphp
    @endwhile
    Jumlah Data: {{ $count }}
</div>
@endsection