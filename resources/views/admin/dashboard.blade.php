@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-white fw-bolder">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-5 mt-3">
            <div class="background_dark_2 border_radius_50 table_container">
                <h3 class="text-white m-0">Progetti inseriti: <span>{{ count($projects) }}</span></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5 mt-3">
            <div class="background_dark_2 border_radius_50 table_container">
                <h3 class="text-white m-0">Tipi inseriti: <span>{{ count($types) }}</span></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5 mt-3">
            <div class="background_dark_2 border_radius_50 table_container">
                <h3 class="text-white m-0">Tecnologie inserite: <span>{{ count($technologies) }}</span></h3>
            </div>
        </div>
    </div>
</div>
@endsection
