@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="container">
        <form action="{{ url('/home/search?search_query={$search}') }}" class="row mt-5 justify-conter-center"
            method="GET">
            <div class="input-group col-10" method="GET" role="search">
                <input class="form-control" type="text" name="search" value="{{ request('search') }}">
            </div>
            <div class="input-group-append col">
                <button style="height:37px; " class="btn bg-danger text-light" type="submit">Search Pokémon</button>
            </div>
        </form>

        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('random') }}"><button class="btn btn-block bg-warning text-dark">Surprise
                        Me!</button></a>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button data-toggle="dropdown" id="dropdownMenuButton"
                        class="btn btn-block bg-primary dropdown-toggle text-light">Order
                        By</button>
                    <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('asc') }}">Lowest Number</a>
                        <a class="dropdown-item" href="{{ route('desc') }}">Highest Number</a>
                        <a class="dropdown-item" href="{{ route('az') }}">A-Z</a>
                        <a class="dropdown-item" href="{{ route('za') }}">Z-A</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($pokemons as $item)
                @component('components.cards')
                    @slot('id')
                        {{ $item->id }}
                    @endslot

                    @slot('img')
                        {{ asset('/img/' . $item->image) }}
                    @endslot

                    @slot('name')
                        {{ $item->name }}
                    @endslot

                    @foreach (json_decode($item->types) as $items)
                        <p class="badge badge-dark">{{ $items }} </p>
                    @endforeach
                @endcomponent
            @endforeach

        </div>
    </div>
@endsection
