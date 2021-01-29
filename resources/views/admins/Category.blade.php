@extends('layout.admins_layouts.admin_main')

@section('title')
    Category CRUD
@endsection

@section('main')

        <div class="col-sm-8">
    <div class="card-block">
        <h4 class="sub-title">Create Category</h4>
        <form method="post" action="/category" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Category Name" name="cat_name" value="{{old('cat_name')}}">
                </div>
                @error("cat_name")
                <p style="color:red;">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Category Description</label>
                <div class="col-sm-10">
                    <textarea rows="5" cols="5" class="form-control" placeholder="Category Description" name="cat_desc">{{old('cat_desc')}} </textarea>
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

<!-- Table Start -->
<div class="col-sm-12">

<div class="card">
 <div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
                <th scope="col">Category Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->cat_name}}</td>
                <td>{{$category->cat_desc}}</td>
                <td><img height="200em" width="200em" src='{{asset("images/cat_images/$category->cat_image")}}'></td>
                <td><a href="editCategory/{{$category->id}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                <td><a href="delete/{{$category->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

<!-- Table End -->


@endsection
