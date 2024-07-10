<main>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="card">
                    <div class="card-content">
                        <h3 class="card-title"><span class="white">Società:</span> {{ $train->agency }}</h3>
                        <h3 class="score"><span class="black">Partenza:</span> {{ $train->departure_station }}</h3>
                        <h3 class="score"><span class="black">Arrivo:</span> {{ $train->arrival_station }}</h3>
                        <p class="score"><span class="black">Ora Partenza:</span> {{ $train->departure_time }}</p>
                        <p class="score"><span class="black">Codice Treno:</span> {{ $train->train_Code }}</p>
                        <p class="score"><span class="black">Ora Arrivo:</span> {{ $train->arrival_time }}</p>
                        <button><a href="/filteredTrains/{{ $train->id }}">Clicca per dettagli</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</main>
