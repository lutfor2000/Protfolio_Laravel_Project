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
                    @if (session('project_add_mess'))
                      <div class="alert alert-success">{{session('project_add_mess')}}</div>
                    @endif
                    
                    <form action="{{route('projectpost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Project title One</label>
                            <input type="text" class="form-control" name="project_title_one" placeholder="Enter Title">
                            @error('project_title_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project sub title One</label>
                            <input type="text" class="form-control" name="project_sub_title_one"  placeholder="Enter sub title" ></input>
                            @error('project_sub_title_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Descrtiption One</label>
                            <textarea type="number" class="form-control" name="project_desc_one"  placeholder="Enter  Descrtiption" rows="4"></textarea>
                            @error('project_desc_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Photo(1000px * 1580px)</label>
                            <input type="file" class="form-control" name="project_photo_one"></input>
                            @error('project_photo_one')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project title Two</label>
                            <input type="text" class="form-control" name="project_title_two" placeholder="Enter Title">
                            @error('project_title_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project sub title Two</label>
                            <input type="text" class="form-control" name="project_sub_title_two"  placeholder="Enter sub title" ></input>
                            @error('project_sub_title_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Descrtiption Two</label>
                            <textarea type="number" class="form-control" name="project_desc_two"  placeholder="Enter Descrtiption" rows="4"></textarea>
                            @error('project_desc_two')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Project Photo (1000px * 667px)</label>
                            <input type="file" class="form-control" name="project_photo_two" ></input>
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

          
          <div class="col-12">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Service Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('our_project_message'))
                        <div class="alert alert-success ">{{session('our_project_message')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Project title One</th>
                                <th>Project sub title One</th>
                                <th>Project Photo One</th>
                                <th>Project title two</th>
                                <th>Project sub title two</th>
                                <th>Project Photo two</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($our_projects as $our_project)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($our_project->project_title_one))}}</td>
                                <td>{{$our_project->project_sub_title_one}}</td>
                                <td>
                                    <img src="{{asset('uploads/project_photo/'.$our_project->project_photo_one)}}"  width="100" alt="Not found" >
                                </td>
                                <td>{{ucwords(strtolower($our_project->project_title_two))}}</td>
                                <td>{{$our_project->project_sub_title_two}}</td>
                                <td>
                                    <img src="{{asset('uploads/project_photo/'.$our_project->project_photo_two)}}"  width="100" alt="Not found" >
                                </td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm text-warning edite_buton" href = "{{route('projectedite',$our_project->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm text-danger  edite_buton" href = "{{route('projectdelete',$our_project->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
                                    {{-- <a type="submit" class="btn btn-sm  btn-outline-danger edite_buton" href = "{{route('projectdelte',$our_project->id)}}"><i class=" fa-1x fa fa-trash"></i></a> --}}
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
                        {{$our_projects->links('pagination::bootstrap-5')}}
                </div>
            </div>
          </div>

       
          <div class="col-12">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Skill Trush Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('project_trash_mes'))
                        <div class="alert alert-success ">{{session('project_trash_mes')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Project title One</th>
                                <th>Project sub title One</th>
                                <th>Project Photo One</th>
                                <th>Project title two</th>
                                <th>Project sub title two</th>
                                <th>Project Photo two</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($project_trush_alls as $project_trush_all)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($project_trush_all->project_title_one))}}</td>
                                <td>{{$project_trush_all->project_sub_title_one}}</td>
                                <td>
                                    <img src="{{asset('uploads/project_photo/'.$project_trush_all->project_photo_one)}}"  width="100" alt="Not found" >
                                </td>
                                <td>{{ucwords(strtolower($project_trush_all->project_title_two))}}</td>
                                <td>{{$project_trush_all->project_sub_title_two}}</td>
                                <td>
                                    <img src="{{asset('uploads/project_photo/'.$project_trush_all->project_photo_two)}}"  width="100" alt="Not found" >
                                </td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm text-success project_undu" href ="{{route('projectrestore',$project_trush_all->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
                                    <a type="submit" class="btn btn-sm text-danger project_undu" href = "{{route('projectforcedelete',$project_trush_all->id)}}"><i class=" fa-1x fa fa-unlink"></i></a>
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
                        {{-- {{$service_trush_all->links('pagination::bootstrap-5')}} --}}
                </div>
            </div>
          </div>


    </div>
</div>
@endsection

{{-- @section('footer_scrtipt_add')
<script src="{{asset('js/defoult.js')}}"></script>
@endsection --}}