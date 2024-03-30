@extends('layouts.otika')

@section('content')
<div class="container">
    <div class="row">
          <div class="col-5 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Profile Photo Upload</div>
                <div class="card-body">
                    @if (session('profile_photo_update'))
                      <div class="alert alert-success">{{session('profile_photo_update')}}</div>
                    @endif
                    
                    <form action="{{route('profileupdate',$profile_info->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3 text-center">
                            <img src="{{asset('uploads/profile_photo/'.$profile_info->user_photo)}}"  width="100" alt="Not found" >
                         </div>

                         <div class="form-group mt-3">
                            <label >Profile Photo</label>
                            <input type="file" class="form-control" name="user_photo">
                            @error('user_photo')
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