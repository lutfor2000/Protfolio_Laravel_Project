@extends('layouts.otika')
@section('skill')
active
@endsection
@section('title')
Skill
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
                        @if (session('skill_message'))
                        <div class="alert alert-success ">{{session('skill_message')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Title</th>
                                <th>Parsent (%)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($skills as $skill)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($skill->skill_title))}}</td>
                                <td>{{$skill->skill_parsent}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm btn-outline-warning" href = "{{route('skilledite',$skill->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm  btn-outline-danger" href = "{{route('skilldelete',$skill->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
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
                        {{$skills->links('pagination::bootstrap-5')}}
                </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card">
                <div class="card-header bg-primary text-light">Skill</div>
                <div class="card-body">
                    @if (session('skill_add_mess'))
                      <div class="alert alert-success">{{session('skill_add_mess')}}</div>
                    @endif
                    
                    <form action="{{route('skillepost')}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Skill Title</label>
                            <input type="text" class="form-control" name="skill_title" placeholder="Enter Title">
                            @error('skill_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Skill Parsent(%) </label>
                            <input type="number" class="form-control" name="skill_parsent"  placeholder="Enter Parsent" rows="4"></input>
                            @error('skill_parsent')
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

          <div class="col-8">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Skill Trush Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('skill_trashed_message'))
                        <div class="alert alert-success ">{{session('skill_trashed_message')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Title</th>
                                <th>Parsent (%)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($skill_trushs as $skill_trush)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($skill_trush->skill_title))}}</td>
                                <td>{{$skill_trush->skill_parsent}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn  btn-outline-success" href ="{{route('skillrestore',$skill_trush->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
                                    <a type="submit" class="btn  btn-outline-danger " href = "{{route('skillforcedelete',$skill_trush->id)}}"><i class=" fa-1x fa fa-unlink"></i></a>
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