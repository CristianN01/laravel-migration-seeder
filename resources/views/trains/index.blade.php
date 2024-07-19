@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')
    <h1>
        Trains
    </h1>
    @dump($trains)
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>
                    Tipo treno: <em>{{ $train->azienda }}</em>
                </p>
                <p>
                    Partenza da: <em>{{ $train->stazione_di_partenza }}</em>
                </p>
                <p>
                    Arrivo a: <em>{{ $train->stazione_di_arrivo }}</em>
                </p>
                <p>
                    CODICE: <strong>{{ $train->codice_treno }}</strong>
                </p>
                <p>
                    N carrozze: <em>{{ $train->numero_carrozze }}</em>
                </p>
                <p>
                    In orario: <em>{{ $train->in_orario }}</em>
                </p>
                <p>
                    <em>{{ $train->cancellato }}</em>
                </p>

            </li>
        @endforeach
    </ul>
@endsection
