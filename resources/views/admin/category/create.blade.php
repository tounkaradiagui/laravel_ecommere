@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>L'ajout d'une catégorie
                    <a href="{{url('admin/category/create ')}}" class="btn btn-danger float-end btn-sm text-white">Retour</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="" class="form-control">
                            @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-6 mb- 3">
                            <label for="name">Article</label>
                            <input type="text" name="slug" id="" class="form-control">
                            @error('slug') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name">Description</label>
                            <textarea name="description" id="" cols="" rows="3" class="form-control"></textarea>
                            @error('description') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name">Statut</label><br>
                            <input type="checkbox" name="status" id="">
                        </div>

                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="name">Titre</label>
                            <input type="text" name="meta_title" id="" class="form-control">
                            @error('meta_title') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name">Mot clé</label>
                            <textarea name="meta_keyword" id="" cols="" rows="" class="form-control" ></textarea>
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name">En-tête</label>
                            <textarea name="meta_description" id="" cols="" rows="3" class="form-control"></textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end text-white" >Enregistrer</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection