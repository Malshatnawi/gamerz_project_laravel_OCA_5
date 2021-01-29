@extends('layout.admins_layouts.admin_main')
@section('main')

                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Events</h4>
                                                            <form action="/update/{{$showall->id}}"  method="post"   enctype="multipart/form-data">
                                                            @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Event name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text"value= "{{$showall->event_name}}"   name="name"class="form-control">

                                                                        @error('name')
                                    
                               
                                    <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Event place</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" value="{{$showall->event_place}}" name="place"class="form-control"
                                                                        placeholder="Type your title in Placeholder">

                                                                        @error('place')
                                    
                               
                                    <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Eventdate</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date"  value="{{$showall->event_date}}" name="date"class="form-control"
                                                                        placeholder="You can't change me" >

                                                                        @error('date')
                                    
                               
                                    <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                    </div>
                                                                </div>
                                                                

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">image event
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file"   value=" <img src={{asset('images/$showall->event_image')}}>"  name="image" class="form-control"
                                                                            value="Enter yout content after me">
                                                                            @error('image')
                                    
                               
                                    <span class="help-block" style="color:red">{{ $message }}!</span>  @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Event description</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea rows="5" cols="5"   name="description" class="form-control"
                                                                                    placeholder="Default textarea"> {{$showall->event_desc}}</textarea>

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

@endsection