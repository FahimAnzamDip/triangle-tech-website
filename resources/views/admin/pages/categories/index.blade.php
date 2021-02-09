@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Project Categories</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Categories</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <button data-target="#createModal" data-toggle="modal" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Category
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center mb-0" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total Projects</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <div class="badge badge-info">{{ $category->projects->count() }}</div>
                                    </td>
                                    <td>{{ $category->created_at->format('jS F Y') }}</td>
                                    <td>
                                        <button onclick="editCategory({{ $category->id }})" class="btn btn-primary mb-1  edit"><i class="fas fa-edit"></i></button>

                                        <a href="{{ route('categories.delete', $category->id) }}" id="delete"
                                           class="btn btn-danger mb-1"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalTitle">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category Name<span class="text-danger">*</span></label>
                            <input id="category_name" type="text" class="form-control" name="category_name" required>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Create Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="createModal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalTitle">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="edit_category_name">Category Name<span class="text-danger">*</span></label>
                            <input id="edit_category_name" type="text" class="form-control" name="category_name"
                                   required>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('backend-scripts')
    <script>
        function editCategory (id) {
            $.ajax({
                url: '/categories/' + id + '/edit',
                type: 'get',
                dataType: 'json',
                success: function (data) {
                    $('#edit_category_name').val(data.category_name);
                    $('form').attr('action', "{{ url('/') }}" + "/categories/" + id);
                }
            });
            $('#updateModal').modal('show');
        };
    </script>
@endsection
