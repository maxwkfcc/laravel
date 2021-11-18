@extends('layouts.app2')

@section('content')
    @if ($number < 5)
    <p>Lower than 5</p>    
    @elseif ($number == 5)
    <p>Equals 5</p>    
    @else
    <p>Greater than 5</p>
    @endif

    @unless (empty($names))
        @forelse ($names as $name)
            <p>{{ $name }}
        @empty
            <p>No Name</p>
        @endforelse
    @endunless
@endsection