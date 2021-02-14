@extends('admin.layout')

@section('admin_content')

    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-uppercase">Nouvelle Image</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img">
                        </div>
                        <button type="submit">envoyer</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
