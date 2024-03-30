@extends('layouts.otika')

@section('content')
<div class="container">
    <div class="row">
          <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Banner Add</div>
                <div class="card-body">
                    @if (session('banner_success_mess'))
                      <div class="alert alert-success">{{session('banner_success_mess')}}</div>
                    @endif
                    
                    <form action="{{route('bannerupdate',$banner_infos->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Hello Text</label>
                            <input type="text" class="form-control" name="hello_text" value="{{$banner_infos->hello_text}}">
                            @error('banner_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Banner Title</label>
                            <input class="form-control" name="banner_title" value="{{$banner_infos->banner_title}}"></input>
                            @error('banner_sub_title') 
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Banner Sub Title</label>
                            <textarea class="form-control" name="banner_sub_title" rows="4">{{$banner_infos->banner_sub_title}}</textarea>
                            @error('banner_sub_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <img src="{{asset('uploads/banner_photo/'.$banner_infos->banner_photo)}}"  width="100" alt="Not found" >
                         </div>
                         <div class="form-group mt-3">
                            <label >Banner Photo</label>
                            <input type="file" class="form-control" name="banner_new_photo">
                            @error('banner_photo')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="btn-group  mt-3">
                         <button type="submit" class="btn btn-primary">Add Now</button>
                         </div>
                     </form>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection