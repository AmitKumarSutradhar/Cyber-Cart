@extends('admin.master')

@section('body')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputState">Category</label>
                                    <select name="category_id" id="inputState" class="form-control main-category">
                                        <option value="" selected="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('type') }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select name="status" id="inputState" class="form-control">
                                        <option value="1" selected="">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('body').on('change','.main-category', function (e) {
                let id = $(this).val();

                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.get-subcategories') }}",
                    data: {
                        id:id,
                    },
                    success: function(data){
console.log(data)
                    },
                    error: function(xhr, status, error){
                    console.log(error)
                },
                });
            })
        });
    </script>
@endpush
