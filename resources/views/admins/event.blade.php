@extends('layout.admins_layouts.admin_main')

@section('title')
Event
@endsection
@section('main')

                                            <div class="col-sm-12">
                                                
                                                @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                                </div>
                                                @endif
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">

                                               
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Events</h4>
                                                            <form action="/Event"  method="post"   enctype="multipart/form-data">
                                                            @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Event name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text"   value="{{ old('name') }}" name="name"class="form-control">

                                                                        @error('name')
                                    
                               
                                                            <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Event place</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text"  value="{{ old('place') }}" name="place"class="form-control"
                                                                        placeholder="Type your title in Placeholder">

                                                                        @error('place')
                                    
                               
                                                        <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Eventdate</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date"  value="{{ old('date') }}" name="date"class="form-control"
                                                                        placeholder="You can't change me" >

                                                                        @error('date')
                                    
                               
                                                        <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">image event
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file"  value="{{ old('image') }}" name="image" class="form-control"
                                                                            value="Enter yout content after me">
                                                                            @error('image')
                                    
                               
                                                        <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Event description</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea rows="5" cols="5"  value=""  name="description"class="form-control"
                                                                                    placeholder="Default textarea" >{{old('description')}}</textarea>

                                                                                    @error('description')
                                    
                               
                                                            <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                                </div>
                                                                            </div>


                                                                            <button type="submit" class="btn btn-mat btn-primary ">Submit</button>
                                                                
                                                                
                                                                    
                                                            </form>
</div>


                                    <!-- Basic table card start -->
                                    
                                    <!-- Basic table card end -->
                                    <!-- Inverse table card start -->
                                   

</div>


</div>
</div>
<div class="card">
                                      
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Event Name</th>
                                                            <th>Event place</th>
                                                            <th>Event date</th>
                                                            <th>Event description </th>
                                                            <th>Event Image </th>
                                                           
                                                            <th>delete </th>
                                                            <th>Edit </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($show as $event)
                                                        <tr>
                                                      
                                                            <th scope="row">{{$event->id}}</th>
                                                            <td>{{$event->event_name}}</td>
                                                            <td>{{$event->event_place}}</td>
                                                            <td>{{$event->event_date}}</td>
                                                            <td>{{$event->event_desc}}</td>
                                                          
                                                            <td> <img height="200em" width="200em" src='{{asset("images/$event->event_image")}}'></td>
                                                           
                                                            <form action='delete/{{$event->id}}'method="post">
                                                            @method('DELETE')
                                                                @csrf
                                                            <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                                            </form>
                                                         <td> <a href="edit/{{$event->id}}" class="btn btn-primary">Edit</a></td>
                                                          
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                   
                               
                                
   
  


</form>

                                                                    @endsection