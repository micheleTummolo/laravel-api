@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row my-4">
        <div calss="col-12">
            <h2 class="text-white mb-5">Aggiungi un nuovo tipo</h2>
        </div>
        @if($errors->any())
        <div class="col-12">
                <div class="alert alert-danger">
                    <ul class="list-unstyled m-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        </div>
        @endif
        <div class="col-12 background_dark_2 border_radius_50 table_container">
            <form action="{{ route('admin.types.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label class="form-label text-white">Tipo</label>
                    <input type="text" name="type" class="form-control" placeholder="">
                </div>
               
                <div class="col-12 mt-5">
                    <div class="button_container">
                        <button type="submit" class="btn btn-primary my_button hover_bg_light">Aggiungi tipo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection