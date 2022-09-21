@extends('layouts.main')

@section('main-content')

<div class="text-center">
    <ul>
        @foreach($trains as $train)
        <li class="list-group-item">
            <div class="card d-flex my-3">
                <h1> AZIENDA: {{ $train->azienda}} </h1>
                <h3 class="me-5"> IDENTIFICATIVO TRENO: {{$train->codice_treno}}</h3>
                <h3 class="me-5"> DA: {{$train->stazione_di_partenza}}</h3>
                <h3 class="me-5"> A: {{$train->stazione_di_arrivo}}</h3>
                <h3 class="me-5"> ARRIVO PREVISTO ORE: {{$train->orario_di_partenza}}</h3>
                <h3 class="me-5"> PARTENZA PREVISTA ORE: {{$train->orario_di_arrivo}}</h3>
                <h3 class="me-5"> TOTALE CARROZZE TRENO: {{$train->numero_carrozze}}</h3>
                <h3 class="me-5"> IN ORARIO: {{$train->in_orario}}</h3>
                <h3> TRENO CANCELLATO: {{$train->cancellato}}</h3>
            </div>
        </li>

        @endforeach
    </ul>

</div>

@endsection