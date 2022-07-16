<!-- Modal pour la suppression -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="supp" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="supp">Supprimer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent='destroyCategory'>
                @csrf


                <div class="modal-body">
                    Voulez-vous vraiment Supprimer cette cette catégory ?
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" >Oui</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nom</button>
                </div>

            </form>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">

    @if(session('message'))
        <div class="alert alert-success" >{{session('message')}}</div>
    @endif()
        <div class="card">
            <div class="card-header">
                <h4>Les catégories
                    <a href="{{url('admin/category/create')}}" class="btn btn-primary float-end btn-sm text-white">Ajouter une catégorie</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
                            <td>
                                
                                <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success">Edit</a>
                                <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>

                </table>
                <div>
                    {{$categories->links()}}
                </div>

            </div>

        </div>
    </div>
</div>
@push('script')

<script>
  
window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>

@endpush