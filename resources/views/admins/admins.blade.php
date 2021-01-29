@extends('layout.admins_layouts.admin_main')
@section('main')



<div class="card" style="width:100%">
 <div class="card-header">
 <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

  <div class="card-header-right">
  <i class="icofont icofont-spinner-alt-5"></i>
</div>

</div>
<div class="card-block">
     <h4 class="sub-title">Add admin</h4>
<form action="/admin/store" method="post" enctype="multipart/form-data" >
 @csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Admin name</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Enter admin name" name="name">
</div>
@error("name")
<p style="color:red;">{{$message}}</p>
@enderror 
</div>


    <div class="form-group row">
     <label class="col-sm-2 col-form-label">Admin Password</label>
      <div class="col-sm-10">
     <input type="password" class="form-control" placeholder="Password input" name="password">
      </div>
      @error("password")
      <p style="color:red;">{{$message}}</p>
      @enderror
     </div>

                                                              
     <div class="form-group row">
     <label class="col-sm-2 col-form-label">Admin email </label>
     <div class="col-sm-10">
     <input type="email" class="form-control"placeholder="Enter Admin email" name="email">
      </div>
      @error("email")
      <p style="color:red;">{{$message}}</p>
      @enderror
      </div>



      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Admin Image</label>
      <div class="col-sm-10">
      <input type="file" class="form-control" name="admin_image">
      </div>
      @error("admin_image")
      <p style="color:red;">{{$message}}</p>
      @enderror
      </div>


    <div class="form-group row">
     <label class="col-sm-2 col-form-label">role</label>
   <div class="col-sm-10">
    <select name="role" class="form-control">
     <option value="Admin">Select Admin role</option>
    <option value="Admin">Admin</option>
  </select>
 </div>
 </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
 </div>

 </form>

<div class="row">
<div class="col-sm-6">
                                                                              
</div>
 </div>
 <div class="row">
  <div class="col-sm-6 mobile-inputs">
                                                                               
</div>
   <div class="col-sm-6 mobile-inputs">
                                                                               
     </div>
    </div>
   </div>
  </div>
<div class="card-block table-border-style">
    <div class="table-responsive">
     <table class="table table-striped">
       <thead>
            <tr>
              <th>id</th>
              <th>Admin Name</th>
              <th>Admin email</th>
              <th>Admin Image</th>
              <th>edit</th>
             <th>delete</th>
            </tr>

             </thead>
                                                   
             <tbody>
           @foreach($x as $value) 
             <tr>
                                             
             <td>{{$value->id}}</td>
             <td>{{$value->name}}</td>
             <td>{{$value->email}}</td>
             <td><img height="200em" width="200em" src='{{asset("images/$value->admin_image")}}'></td>                                
              <td>
            <form method="post" action="/admin/delete/{{$value->id}}">
             @method("DELETE")
             @csrf
             <input type="submit" value="delete" class="btn btn-danger">

             </form>
                </td>
             
                <td>
                   <button class="btn btn-primary">
                    <a href="admin/edit/{{$value->id}}" style="text-decoration:none; color:black;">Edit</a></button>
                </td>
                </tr>
               
                @endforeach    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
              @endsection
</body>
</html>