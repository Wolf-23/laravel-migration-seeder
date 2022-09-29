@extends('layout.app')
@section('title-page', 'HomePage')

@section('main')
    @foreach ($trains as $train)
        <h1> Treno {{$train->code}} di {{$train->brand}}</h1>
        <h3>Partenza {{$train->date_departure}} da {{$train->departure}}</h3>
        <h3>Arrivo {{$train->date_arrival}} da {{$train->arrival}}</h3>
        <h4>Disponibili {{$train->n_carriages}} carrozze</h4>
        @if ($train->in_time == 1)
            <h5>Il treno è in Orario</h5>
        @else
            <h5>Il treno è in Ritardo</h5>
        @endif
        @if ($train->deleted == 1)
            <h5>CANCELLATO</h5>
        @else
            <h5>REGOLARE</h5>
        @endif
    @endforeach
@endsection