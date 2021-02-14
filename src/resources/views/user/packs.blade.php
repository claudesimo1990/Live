@extends('user.dashboard')

@section('dashboard_title') Expeditions @stop

@section('dashbord_content')

<div class="container mt-4">
    <!-- Content Row -->
    <div class="row">

        <caption>Liste d'Expeditions</caption>

        <table class="table table-striped">
            <thead>
                <tr>
                  <th class="text-center" scope="col">#</th>
                  <th class="text-center" scope="col">Depart</th>
                  <th class="text-center" scope="col">Date</th>
                  <th class="text-center" scope="col">Arrivee</th>
                  <th class="text-center" scope="col">Coli</th>
                  <th class="text-center" scope="col">Nombre</th>
                  <th class="text-center" scope="col">Poids du coli</th>
                  <th class="text-center" scope="col">prix</th>
                  <th class="text-center" scope="col">valider ?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packs as $index => $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $index }}</th>
                        <td class="text-center">{{ $item->from }}</td>
                        <td class="text-center">{{ $item->to }}</td>
                        <td class="text-center">{{ $item->dateFrom }}</td>
                        <td class="text-center">{{ $item->colis_name }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-center">{{ $item->kilo }}</td>
                        <td class="text-center">{{ $item->prix }}</td>
                        <td class="text-center">{{ $item->publish == 1 ? 'OUI' : 'NON' }}</td>
                    </tr>
                @endforeach
              </tbody>
        </table>

    </div>
</div>


@endsection