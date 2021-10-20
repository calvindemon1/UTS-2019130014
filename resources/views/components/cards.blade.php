<div class="col-4-lg">
    <div class="card m-3 row" style="width: 15rem">
        <div class="card-body text-right">
            <strong
                class="card-title badge badge-pill badge-dark text-light">#{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}</strong>
        </div>
        <a class="text-center" href="{{ route('detail', [$id]) }}"><img class="card-img"
                style="width: 200px; height: 200px;" src="{{ $img }}" data-holder-rendered="true"></a>
        <div class="card-footer text-center border-top-0 bg-transparent">
            <div>
                <p class="text-dark">{{ $name }}</p>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
