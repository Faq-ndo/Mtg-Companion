@extends('master')

@section('page-content')
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">MTG - Sets</h6>
        </div>
        <div class="card-body">
            @include('partials.Tables.set-table')
        </div>
    </div>
@endsection
