
@extends('layout')

@section('content')

<h1>Autógyártók</h1>
<div>
    <a href="{{route('makers.create') }}" title="Új">Új hozzáadása</a>
    @foreach($makers as $maker)
        <div class = "row {{$loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
            <div class="col id">{{$maker->id}}</div>
            <div class="col name">{{$maker->name}}</div>
        </div>
    @endforeach
</div>

@endsection