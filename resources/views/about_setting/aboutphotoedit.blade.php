@extends('layouts.otika')
@section('aboutsetting')
active
@endsection
@section('title')
About Photo Update
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">About Photo Update</div>
                <div class="card-body">
                    @if (session('about_setting_mes'))
                      <div class="alert alert-success">{{session('about_setting_mes')}}</div>
                    @endif
                    <form action="{{route('aboutphotoupdate',$aboutphoto_infos->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                    <img src="{{asset('uploads/about_photo/'.$aboutphoto_infos->about_photo)}}"  width="100" alt="Not found" >
                    </div> 
                 
                    <div class="form-group mt-3">
                    <label >New About Photo Add </label>
                    <input type="file" class="form-control" name="new_about_photo">
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
