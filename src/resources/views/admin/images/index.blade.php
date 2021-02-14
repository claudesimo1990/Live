@extends('admin.layout')

@section('admin_content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-6">
                <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le nom de l'image " name="file">
                        @error('file') <small class="form-text text-danger">l'image est obligatoire</small> @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Nom de l'image</label>
                        <input class="form-control" type="text" name="name" id="name">
                        @error('name') <small class="form-text text-danger">le nom est obligatoire</small> @enderror
                    </div>

                    <div class="form-group">
                        <label for="target">l'objectif de l'image</label>
                        <input class="form-control" type="text" name="target" id="target" placeholder="Header">
                        @error('target') <small class="form-text text-danger">l'objectif est obligatoire</small> @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">save</button>
                    </div>

                </form>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center bg-success p-3">
                    <ol class="text-white">
                        <li>Page d'accueil est : homepage.png</li>
                        <li>a propos est : about.png</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-uppercase">Images</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($imgs as $item)
                        <div class="col-md-6">
                            <p>{{$item->name}}</p>
                            <img src="{{asset('storage/Home/'.$item->name)}}" alt="">
                            <div class="text-center mt-3">
                                <form action="{{route('images.destroy',$item->id)}}" method="POST">
                                    {{ method_field('delete') }}
                                    @csrf
                                    <button type="submit" class="btn btn-danger">supprimer</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection
