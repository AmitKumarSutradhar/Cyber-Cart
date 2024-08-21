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
                            <h4>Edit Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Icon</label>
                                    <div class="">
                                        <button class="btn btn-primary" data-icon="{{ $category->icon }}" name="icon" data-selected-class="btn-danger"
                                                data-unselected-class="btn-info" role="iconpicker"></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select name="status" id="inputState" class="form-control">
                                        <option value="1"  {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $category->status == 0 ? 'selected' : ''}}>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Info</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
