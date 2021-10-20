<div class="row mt-3 pt-5">
    <div class="col mt-6 align-self-center">
        <img class="rounded mx-auto d-block" style="width: 250px; height:250px;"
            src="{{ asset('/img/' . $pokemon->image) }}">
    </div>
    <div class="col mt-6">
        <p class="text-muted"># {{ $pokemon->id }}</p>
        <h3>{{ $pokemon->name }}</h3>
        <h4>Abilities</h4>
        @foreach (json_decode($pokemon->abilities) as $item)
            <p class="badge badge-dark">{{ $item }}</p>
        @endforeach
        <h4>Profile</h4>
        <table class="table">
            <?php
            $hsl = $pokemon->height;
            $feet = $hsl * 3.2808;
            $hsl2 = $pokemon->weight;
            $lbs = $hsl2 * 2.205;
            ?>
            <thead>
                <tr>
                    <th scope="col">Height</th>
                    <th scope="col" class="text-muted">
                        {{ number_format($feet, 2, '.', '') }}ft.
                        ({{ number_format($pokemon->height, 2, '.', '') }} m)
                    </th>
                    <th scope="col">Weight</th>
                    <th scope="col" class="text-muted">{{ number_format($lbs, 2, '.', '') }} lbs
                        ({{ number_format($pokemon->weight, 2, '.', '') }} kg)</th>
                </tr>
                <tr>
                    <th scope="col">Species</th>
                    <th scope="col" class="text-muted">{{ $pokemon->species }}</th>
                    <th scope="col">Types</th>
                    <th scope="col">
                        @foreach (json_decode($pokemon->types) as $items)
                            <strong class="badge badge-dark">{{ $items }}</strong>
                        @endforeach
                    </th>
                </tr>
            </thead>
        </table>
        <h4>Stats</h4>
        {{-- <div class="row">
            <strong class="col">HP</strong>
            <div class="progress ">
                <div class="col progress-bar bg-danger" role="progressbar" style="width: 200%;" aria-valuenow="75%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>75%</strong></div>
            </div>

        </div>
        <div class="row">
            <strong class="col">Attack</strong>
            <div class="progress">
                <div class="col progress-bar bg-secondary" role="progressbar" style="width: 200%;" aria-valuenow="75%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>75%</strong></div>
            </div>
        </div>
        <div class="row">
            <strong class="col">Defense</strong>
            <div class="progress">
                <div class="col progress-bar bg-warning" role="progressbar" style="width: 200%;" aria-valuenow="200%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>200%</strong></div>
            </div>
        </div>
        <div class="row">
            <strong class="col">Sp. Attack</strong>
            <div class="progress">
                <div class="col progress-bar bg-primary" role="progressbar" style="width: 200%;" aria-valuenow="75%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>75%</strong></div>
            </div>
        </div>
        <div class="row">
            <strong class="col">Sp. Defense</strong>
            <div class="progress">
                <div class="col progress-bar bg-success" role="progressbar" style="width: 200%;" aria-valuenow="75%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>75%</strong></div>
            </div>
        </div>
        <div class="row">
            <strong class="col">Speed</strong>
            <div class="progress">
                <div class="col progress-bar bg-info" role="progressbar" style="width: 200%;" aria-valuenow="75%"
                    aria-valuemin="0" aria-valuemax="200%"><strong>75%</strong></div>
            </div>
            </div> --}}
        @include('components.progress')
    </div>
</div>
