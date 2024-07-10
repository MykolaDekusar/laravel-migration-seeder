<main>
    <div class="container-filtered">
        <div class="row-filtered">
            @foreach ($trains as $train)
                <div class="card-extended">
                    @if ($train->is_cancelled)
                        <h3 class="card-title"><span class="black">Ci dispiace il tuo treno è cancellato :(</span></h3>
                        <button><a href="/">Torna Indietro</a></button>
                    @else
                        <h3 class="card-title"><span class="white">Società:</span> {{ $train->agency }}</h3>
                        <h3 class="score"><span class="black">Partenza:</span> {{ $train->departure_station }}</h3>
                        <h3 class="score"><span class="black">Arrivo:</span> {{ $train->arrival_station }}</h3>
                        <p class="score"><span class="black">Ora Partenza:</span> {{ $train->departure_time }}</p>
                        <p class="score"><span class="black">Codice Treno:</span> {{ $train->train_Code }}</p>
                        <p class="score"><span class="black">Ora Arrivo:</span> {{ $train->arrival_time }}</p>
                        <button><a href="/">Torna Indietro</a></button>
                </div>
                <div class="card-extended">

                    @if ($train->is_in_time)
                        <h3 class="card-title"><span class="white">Il treno è:</span> In orario</h3>
                    @else
                        <h3 class="card-title"><span class="white">Il treno è:</span> In ritardo</h3>
                    @endif
                </div>
            @endif
            @endforeach
        </div>
    </div>

</main>
