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
        <div class="col-8">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Service Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('blog_messs'))
                        <div class="alert alert-success ">{{session('blog_messs')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Blog Date</th>
                                <th>Blog Title</th>
                                <th>Blog Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($our_blogs as $our_blog)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{strtoupper($our_blog->blog_date)}}</td>
                                <td>{{ucwords(strtolower($our_blog->blog_title))}}</td>
                                <td>
                                    <img src="{{asset('uploads/blog_photo/'.$our_blog->blog_photo)}}"  width="100" alt="Not found" >
                                </td>
                               
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm text-warning edite_buton" href = "{{route('blogedit',$our_blog->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm text-danger  edite_buton" href = "{{route('blogdelete',$our_blog->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
                                </div>
                                </td>
                            </tr> 
                            @empty
                            <tr class="text-center">
                                <td colspan="20" class="text-danger"> <small>No Data To Show</small></td>
                            </tr>
                            @endforelse
                        </tbody>
                        </table>
                        {{$our_blogs->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    

        <div class="col-4">
            <div class="card">
                <div class="card-header bg-primary text-light">Our Project</div>
                <div class="card-body">
                    @if (session('blog_add_mess'))
                      <div class="alert alert-success">{{session('blog_add_mess')}}</div>
                    @endif
                    
                    <form action="{{route('blogpost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Blog Date</label>
                            <input type="text" class="form-control" name="blog_date" placeholder="Enter Date">
                            @error('blog_date')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Title</label>
                            <input type="text" class="form-control" name="blog_title"  placeholder="Enter title" ></input>
                            @error('blog_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Description</label>
                            <textarea type="number" class="form-control" name="blog_description"  placeholder="Enter  Descrtiption" rows="4"></textarea>
                            @error('blog_description')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Blog Photo</label>
                            <input type="file" class="form-control" name="blog_photo"></input>
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

       
          <div class="col-12">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Skill Trush Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('blog_trash_mes'))
                        <div class="alert alert-success ">{{session('blog_trash_mes')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Blog Date</th>
                                <th>Blog Title</th>
                                <th>Blog Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blog_trushs as $blog_trushs)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{strtoupper($blog_trushs->blog_date)}}</td>
                                <td>{{ucwords(strtolower($blog_trushs->blog_title))}}</td>
                                <td>
                                    <img src="{{asset('uploads/blog_photo/'.$blog_trushs->blog_photo)}}"  width="100" alt="Not found" >
                                </td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm text-success project_undu" href ="{{route('blogrestore',$blog_trushs->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
                                    <a type="submit" class="btn btn-sm text-danger project_undu" href = "{{route('blogforcedelete',$blog_trushs->id)}}"><i class=" fa-1x fa fa-unlink"></i></a>
                                </div>
                                </td>
                            </tr> 
                            @empty
                            <tr class="text-center">
                                <td colspan="20" class="text-danger"> <small>No Data To Show</small></td>
                            </tr>
                            @endforelse
                        </tbody>
                        </table>
                       
                </div>
            </div>
          </div>


    </div>
</div>
@endsection

{{-- @section('footer_scrtipt_add')
<script src="{{asset('js/defoult.js')}}"></script>
@endsection --}}