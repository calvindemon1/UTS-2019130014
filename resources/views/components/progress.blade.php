<div class="row">
    <div class="col">
        <strong>HP</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $pokemon->hp }}%">
                <span class="text-left ml-2">{{ $pokemon->hp }}</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Attack</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-orange" role="progressbar" style="width: {{ $pokemon->attack }}%"><span
                    class="text-left ml-2">{{ $pokemon->attack }}</span></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Defense</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-yellow" role="progressbar" style="width: {{ $pokemon->defense }}%"><span
                    class="text-left ml-2">{{ $pokemon->defense }}</span></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Sp. Attack</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $pokemon->sp_attack }}%"><span
                    class="text-left ml-2">{{ $pokemon->sp_attack }}</span></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Sp. Defense</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-green" role="progressbar" style="width: {{ $pokemon->sp_defense }}%"><span
                    class="text-left ml-2">{{ $pokemon->sp_defense }}</span></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Speed</strong>
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar bg-purple" role="progressbar" style="width: {{ $pokemon->speed }}%"><span
                    class="text-left ml-2">{{ $pokemon->speed }}</span></div>
        </div>
    </div>
</div>
