@extends('layout')

@section('section')

<h1>Karosszériák</h1>
<div>
    @include('success')
    <a href="{{route('bodies.create') }}" title="Új">Új hozzáadása</a>
    @foreach($bodies as $body)
        <div class = "row {{$loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
            <div class="col id">{{$body->id}}</div>