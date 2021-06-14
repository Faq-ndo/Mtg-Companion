@extends('master')

@section('page-content')
    <h1 class="h3 mb-4 text-gray-800">Card View</h1>
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">{{ $card->name }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{ $card->image_uris->normal }}" alt="">
                </div>
                <div class="col-sm-5">
                    <h2>{{ $card->name }}</h2>
                    <p><b>Mana Cost:</b> {{ $card->mana_cost }}</p>
                    <p><b>Type:</b> {{ $card->type_line }}</p>
                    <p><b>Text:</b> {{ $card->oracle_text }}</p>
                    <p><b>Released at:</b> {{$card->released_at}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
