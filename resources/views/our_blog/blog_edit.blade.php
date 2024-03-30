@extends('layouts.otika')
@section('blog')
active
@endsection
@section('title')
Our Blog
@endsection
@section('content')
<div class="container">
    <div class="row">
     
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Our Project</div>
                <div class="card-body">
                    @if (session('blog_status'))
                      <div class="alert alert-success">{{session('blog_status')}}</div>
                    @endif
                    
                    <form action="{{route('blogupdate',$blog_info->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Blog Date</label>
                            <input type="text" class="form-control" name="blog_date" value="{{strtoupper($blog_info->blog_date)}}">
                            @error('blog_date')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Title</label>
                            <input type="text" class="form-control" name="blog_title" value="{{ucwords(strtolower($blog_info->blog_title))}}"></input>
                            @error('blog_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Description</label>
                            <textarea type="number" class="form-control" name="blog_description" rows="4">{{$blog_info->blog_description}}</textarea>
                            @error('blog_description')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <img src="{{asset('uploads/blog_photo/'.$blog_info->blog_photo)}}" width="100" alt="Not found" >
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Photo</label>
                            <input type="file" class="form-control" name="blog_new_photo"></input>
                            @error('blog_photo')
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

{{-- @section('footer_scrtipt_add')
<script src="{{asset('js/defoult.js')}}"></script>
@endsection --}}