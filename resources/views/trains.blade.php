@extends('layout.app')
@section('title-page', 'Trains')

@section('main')
    <div class="container">
        <h1 class="cont-title">Tutti i treni:</h1>
        <div class="card-container">
            @foreach ($allTrains as $train)
            <div class="card">
                <h2 class="name"> Treno {{$train->code}} della compagnia {{$train->brand}}</h2>
                <h3 class="departure">Partenza {{$train->date_departure}} da {{$train->departure}}</h3>
                <h3 class="arrival">Arrivo {{$train->date_arrival}} a {{$train->arrival}}</h3>
                <h4 class="carriages">Disponibili {{$train->n_carriages}} carrozze</h4>
                @if ($train->in_time == 1)
                    <h5 class="in-time">Il treno è in Orario</h5>
                @else
                    <h5 class="not-in-time">Il treno è in Ritardo</h5>
                @endif
                @if ($train->deleted == 1)
                    <h5 class="deleted">CANCELLATO</h5>
                @else
                    <h5 class="not-deleted">REGOLARE</h5>
                @endif
            </div>
            @endforeach
        </div>
    </div>
@endsection