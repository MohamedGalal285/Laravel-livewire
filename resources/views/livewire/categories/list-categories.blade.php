<div>
    @livewire('categories.create-category')
    @livewire('categories.edit-category')
    @include('components.alert-create')
    @include('components.delete-modal')

    <div class="card">

        <div class="card mt-4">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create new category
                </button>
            </div>

        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">#
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">User Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                    Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending">Image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $inx =>  $category)
                                <tr class="odd">
                                    <td>{{$inx+1}}</td>
                                    <td>{{$category->user->name}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <img src="{{asset($category->image)}}" style="width: 75px;object-fit: contain" alt="User profile">
                                    </td>
                                    <td>
                                        <button type="button" wire:click="edit({{ $category->id }})" class="btn btn-info btn-sm mr-2">Edit</button>
                                        <button type="button" wire:click="deleteId({{ $category->id }})" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            Delete</button>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
