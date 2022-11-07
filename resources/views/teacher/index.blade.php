@extends('layouts.app')

@section('content')
<h2>Teacher List</h2>
    <ol>
        @forelse ($teachers as $teacher)
        <li>{{ $teacher->name }}</li>
        @empty
            <p>No users</p>
        @endforelse
    </ol>

    @for($a=1; $a<=$teachers->count(); $a++)
        @php $count++ @endphp
    @endfor

    <p>Jumlah Guru: {{ $count }}</p>
@endsection