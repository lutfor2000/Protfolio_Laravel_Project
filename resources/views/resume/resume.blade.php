@extends('layouts.otika')
@section('resume')
active
@endsection
@section('title')
Resume
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-8">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Resume Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('resume_success'))
                        <div class="alert alert-success ">{{session('resume_success')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Date</th>
                                <th>Degree</th>
                                <th>University Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($resumes as $resume)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$resume->resume_date}}</td>
                                <td>{{$resume->resume_degree}}</td>
                                <td>{{ucwords(strtolower($resume->resume_univarsity))}}</td>
                                <td>{{$resume->resume_descrtiption}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm btn-outline-info" href = "{{route('resumedite',$resume->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm  btn-outline-danger" href = "{{route('resumedelete',$resume->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
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
                        {{$resumes->links('pagination::bootstrap-5')}}
                </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card">
                <div class="card-header bg-primary text-light">Resume</div>
                <div class="card-body">
                    @if (session('resume_success_mess'))
                      <div class="alert alert-success">{{session('resume_success_mess')}}</div>
                    @endif
                    
                    <form action="{{route('resumepost')}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Date</label>
                            <input type="text" class="form-control" name="resume_date" placeholder="Enter Date">
                            @error('resume_date')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Degree</label>
                            <textarea class="form-control" name="resume_degree" placeholder="Enter Degree" rows="4"></textarea>
                            @error('resume_degree')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >University Name</label>
                            <textarea class="form-control" name="resume_univarsity" placeholder="Enter University Name" rows="4"></textarea>
                            @error('resume_univarsity')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>
                         <div class="form-group mt-3">
                            <label >Description</label>
                            <textarea class="form-control" name="resume_descrtiption" placeholder="Enter Description" rows="4"></textarea>
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
          <div class="col-12">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Resume Trush Item</h6>
                      </div>
                      <div class="card-body">
                        @if (session('resume_trush_messege'))
                        <div class="alert alert-success ">{{session('resume_trush_messege')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Date</th>
                                <th>Degree</th>
                                <th>University Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($resume_trush_all as $resume_trush)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$resume_trush->resume_date}}</td>
                                <td>{{$resume_trush->resume_degree}}</td>
                                <td>{{ucwords(strtolower($resume_trush->resume_univarsity))}}</td>
                                <td>{{$resume_trush->resume_descrtiption}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn  btn-outline-success" href ="{{route('resumerestore',$resume_trush->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
                                    <a type="submit" class="btn  btn-outline-danger " href = ""><i class=" fa-1x fa fa-unlink"></i></a>
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
                        {{-- {{$resume_trush_all->links('pagination::bootstrap-5')}} --}}
                </div>
            </div>
          </div>
    </div>
</div>
@endsection