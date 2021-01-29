@extends('layout.admins_layouts.admin_main')

@section('title')
    Edit Category
@endsection

@section('main')

    <div class="col-sm-8">
        <div class="card-block">
            <h4 class="sub-title">Edit Category</h4>
            <form method="post" action="/updateCategory/{{$category->id}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Category Name" name="cat_name" value="{{$category->cat_name}}">
                    </div>
                    @error("cat_name")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" class="form-control" placeholder="Category Description" name="cat_desc">{{$category->cat_desc}} </textarea>
                    </div>
                    @error("cat_desc")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="cat_image">
                    </div>
                    @error("cat_image")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>


        </div>
    </div>
    <div class="col-sm-2"></div>
    <!-- Form end -->
@endsection
