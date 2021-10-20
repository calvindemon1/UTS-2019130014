@extends('layouts.master')

@section('title', $pokemon->name)

@section('content')
    <div class="container m-3 ">
        <div class="row">
            <div class="col">
                @if ($pokemon->id == 1)
                    <a href="/detail/{{ $all[150]->id }}"><button class="btn btn-danger btn-block">#
                            {{ str_pad($all[150]->id, 3, '0', STR_PAD_LEFT) }}
                            {{ $all[150]->name }}
                        </button></a>
                @else
                    <a href="/detail/{{ $pokemon->id - 1 }}"><button class="btn btn-danger btn-block">#
                            {{ str_pad($pokemon->id - 1, 3, '0', STR_PAD_LEFT) }}
                            {{ $all[$pokemon->id - 2]->name }}
                        </button></a>
                @endif

            </div>
            <div class="col">
                @if ($pokemon->id == 151)
                    <a href="/detail/{{ $all[0]->id }}"><button class="btn btn-danger btn-block">#
                            {{ str_pad($all[0]->id, 3, '0', STR_PAD_LEFT) }}
                            {{ $all[0]->name }}
                        </button></a>
                @else
                    <a href="/detail/{{ $pokemon->id + 1 }}"><button class="btn btn-danger btn-block">#
                            {{ str_pad($pokemon->id + 1, 3, '0', STR_PAD_LEFT) }}
                            {{ $all[$pokemon->id + 0]->name }}
                        </button></a>
                @endif
            </div>
        </div>
    </div>


    <div class="container border m-3">

        @include('components.detailbody')
        <div class="row justify-content-center mt-3">
            <h4>Evolutions</h4>
        </div>
        <div class="row justify-content-center">

            @forelse ($evor as $item)
                @component('components.cards')
                    @slot('id')
                        {{ $all[$item - 1]->id }}
                    @endslot

                    @slot('img')
                        {{ asset('/img/' . $all[$item - 1]->image) }}
                    @endslot

                    @slot('name')
                        {{ $all[$item - 1]->name }}
                    @endslot
                @endcomponent
            @empty
                <div class="card text-center" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">No Evolutions for this Pokemon</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
