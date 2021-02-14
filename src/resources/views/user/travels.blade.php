@extends('user.dashboard')

@section('dashboard_title') Travels @stop

@section('dashbord_content')

<div class="container">
    <!-- Content Row -->
    <div class="row mt-4">

        <caption>Liste de voyages</caption>

        <table class="table table-striped">
            <thead>
                <tr>
                  <th class="text-center" scope="col">#</th>
                  <th class="text-center" scope="col">Depart</th>
                  <th class="text-center" scope="col">Date</th>
                  <th class="text-center" scope="col">Arrivee</th>
                  <th class="text-center" scope="col">Date</th>
                  <th class="text-center" scope="col">Kilos disponible</th>
                  <th class="text-center" scope="col">valider ?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travels as $index => $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $index }}</th>
                        <td class="text-center">{{ $item->from }}</td>
                        <td class="text-center">{{ $item->to }}</td>
                        <td class="text-center">{{ $item->dateFrom }}</td>
                        <td class="text-center">{{ $item->dateTo }}</td>
                        <td class="text-center">{{ $item->kilo }}</td>
                        <td class="text-center">{{ $item->publish == 1 ? 'OUI' : 'NON' }}</td>
                    </tr>
                @endforeach
              </tbody>
        </table>

    </div>
</div>


@endsection