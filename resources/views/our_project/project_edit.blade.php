@extends('layouts.otika')
@section('ourproject')
active
@endsection
@section('title')
Our Project
@endsection
@section('content')
<div class="container">
    <div class="row">
   
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-light">Our Project</div>
                <div class="card-body">
                    @if (session('our_project_status'))
                      <div class="alert alert-success">{{session('our_project_status')}}</div>
                    @endif
                    
                    <form action="{{route('projectupdate',$project_info->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Project title One</label>
                            <input type="text" class="form-control" name="project_title_one" value="{{$project_info->project_title_one}}">
                            @error('project_title_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project sub title One</label>
                            <input type="text" class="form-control" name="project_sub_title_one"  value="{{$project_info->project_sub_title_one}}" ></input>
                            @error('project_sub_title_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Descrtiption One</label>
                            <textarea type="number" class="form-control" name="project_desc_one" rows="4">{{$project_info->project_desc_one}}</textarea>
                            @error('project_desc_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <img src="{{asset('uploads/project_photo/'.$project_info->project_photo_one)}}" width="100" alt="Not found" >
                         </div>

                         <div class="form-group mt-3">
                            <label >Project new Photo(1000px * 1580px)</label>
                            <input type="file" class="form-control" name="project_new_photo_one"></input>
                            @error('project_photo_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project title Two</label>
                            <input type="text" class="form-control" name="project_title_two" value="{{$project_info->project_title_two}}">
                            @error('project_title_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project sub title Two</label>
                            <input type="text" class="form-control" name="project_sub_title_two" value="{{$project_info->project_sub_title_two}}" ></input>
                            @error('project_sub_title_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Descrtiption Two</label>
                            <textarea type="number" class="form-control" name="project_desc_two" rows="4">v{{$project_info->project_desc_two}}</textarea>
                            @error('project_desc_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3 d-block">
                            <img src="{{asset('uploads/project_photo/'.$project_info->project_photo_two)}}" width="100" alt="Not found" >
                         </div>

                         <div class="form-group mt-3">
                            <label >Project New Photo (1000px * 667px)</label>
                            <input type="file" class="form-control" name="project_new_photo_two" ></input>
                            @error('project_photo_two')
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
