@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <div>
                <h2 class="text-white fw-bolder">Elenco tecnologie</h2>
            </div>
            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.technologies.create') }}" role="button">Aggiungi tecnologia</a>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <div class="col-12 my-3 background_dark_2 border_radius_50 table_container">
            <table class="table">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($technologies as $technology)
                    <tr class="text-white">
                        <td>{{ $technology['id']}}</td>
                        <td>{{ $technology['name']}}</td>
                        <td>{{ $technology['slug']}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('admin.technologies.edit', $technology->slug) }}" role="button" title="Modifica la tecnologia">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-square btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection