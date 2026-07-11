@props(['marginTop' => false])

<section class="clients @if ($marginTop) mt @endif">
    <div class="clients__container">
        @for ($i = 1; $i <= 8; $i++)
            <div class="clients__item">
                <img src="{{ asset('img/home/clients/' . $i . '.svg') }}" alt="Client {{ $i }}">
            </div>
        @endfor
    </div>
</section>
