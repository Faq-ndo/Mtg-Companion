@extends('master')

@section('page-content')
    <h1 class="h3 mb-4 text-gray-800">Card View</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"></h6>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($card->data as $result)
                    @if(isset($result->image_uris->png))
                    <div class="mtg-card-container">
                        <img class="mtg-card-sm" src="{{ $result->image_uris->png }}" alt="">
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
