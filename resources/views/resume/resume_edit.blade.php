@extends('layouts.otika')
@section('resume')
active
@endsection
@section('title')
Resume Edit
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Resume</div>
                <div class="card-body">
                    @if (session('resume_success_mess'))
                      <div class="alert alert-success">{{session('resume_success_mess')}}</div>
                    @endif
                    
                    <form action="{{route('resumeupdate',$resumes->id)}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Date</label>
                            <input type="text" class="form-control" name="resume_date" value="{{$resumes->resume_date}}">
                            @error('resume_date')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Degree</label>
                            <textarea class="form-control" name="resume_degree" rows="4">{{$resumes->resume_degree}}</textarea>
                            @error('resume_degree')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >University Name</label>
                            <textarea class="form-control" name="resume_univarsity"  rows="4">{{$resumes->resume_univarsity}}</textarea>
                            @error('resume_univarsity')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Description</label>
                            <textarea class="form-control" name="resume_descrtiption" rows="4">{{$resumes->resume_descrtiption}}</textarea>
                            @error('resume_descrtiption')
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