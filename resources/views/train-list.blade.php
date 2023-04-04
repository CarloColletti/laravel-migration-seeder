<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
  <title>{{ env('APP_NAME') }} </title>
</head>
<body>

  <main>
    <div class="container">
      <div class="row g-5">
        @foreach ( $trains as $train)
            <div class="col-4" >
              <h2>Scheda Treno:</h2>
              <div class="card" style="width: 25rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Azienda: {{ $train->azienda }}</li>
                  <li class="list-group-item">Stazione di Partenza: {{ $train->stazione_di_partenza }}</li>
                  <li class="list-group-item">Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</li>
                  <li class="list-group-item">Orario di Partenza: {{ $train->orario_di_partenza }}</li>
                  <li class="list-group-item">Orario di Arrivo: {{ $train->orario_di_arrivo }}</li>
                  <li class="list-group-item">Codice Treno: {{ $train->codice_treno }}</li>
                  <li class="list-group-item">Numero Carrozze: {{ $train->numero_carrozze }}</li>
                  <li class="list-group-item">Treno in Orario: {{ $train->in_orario }}</li>
                  <li class="list-group-item">Treno Cancellato: {{ $train->cancellato }}</li>
                </ul>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </main>
</body>
</html>