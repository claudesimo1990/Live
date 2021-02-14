@extends('user.dashboard')

@section('dashboard_title') Reservations @stop

@section('dashbord_content')

<div class="container">
    <!-- Content Row -->
    <div class="row">

        <caption>Liste de reservations</caption>

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Depart</th>
                  <th scope="col">Date</th>
                  <th scope="col">Kilos</th>
                  <th scope="col">Date de reservation</th>
                  <th scope="col">Date de confirmation</th>
                  <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $index => $item)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ findPostWithId($item->post_id)->from }}</td>
                  <td>{{ findPostWithId($item->post_id)->dateFrom }}</td>
                  <td>{{ $item->kilos }}</td>
                  <td>{{ $item->reservation_date }}</td>
                  <td>{{ $item->validation_date }}</td>
                  <td>
                    @if ($item->status == "in_progress")
                      <span class="badge badge-info">en cours...</span>
                    @elseif($item->status == "rejected")
                      <span class="badge badge-danger">rejeter</span>
                    @elseif($item->status == "accepted")
                      <span class="badge badge-success">confirmer</span>
                    @endif
                  </td>
                </tr>    
              @endforeach
              </tbody>
        </table>

    </div>
</div>

@endsection