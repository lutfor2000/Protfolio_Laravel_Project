@extends('layouts.otika')
@section('freelanching')
active
@endsection
@section('title')
Freelencing Messages
@endsection
@section('content')
<div class="container">
    <div class="row">

        @if ($freelancings->count())
        <div class="col-10 m-auto">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Freelancing Messages</h6>
                      </div>
                      <div class="card-body">
                        @if (session('freelencing_mess'))
                        <div class="alert alert-success ">{{session('freelencing_mess')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Title One</th>
                                <th>Title Two</th>
                                <th>Title Three</th>
                                <th>Description</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($freelancings as $freelancing)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($freelancing->fre_title_one))}}</td>
                                <td>{{ucwords(strtolower($freelancing->fre_title_two))}}</td>
                                <td>{{ucwords(strtolower($freelancing->fre_title_three))}}</td>
                                <td>{{$freelancing->fre_description}}</td>
                                <td>
                                    <img src="{{asset('uploads/free_photo/'.$freelancing->fre_photo)}}"  width="100" alt="Not found" >
                                </td>
                            </tr> 
                            <tr>
                                <div class="btn-group text-center mb-3">
                                    <a type="submit" class="btn btn-sm text-warning free_btn" href = "{{route('freelancingedit',$freelancing->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm text-danger  free_btn" href = "{{route('freelancingdelete',$freelancing->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
                                </div>
                            </tr >
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
        @else
        <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-header bg-primary text-light">Freelencing Messages</div>
                    <div class="card-body">
                        @if (session('freelencing_mess'))
                          <div class="alert alert-success">{{session('freelencing_mess')}}</div>
                        @endif
                        
                        <form action="{{route('freelancingpost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group mt-3">
                                <label >Title One</label>
                                <input type="text" class="form-control" name="fre_title_one" placeholder="Enter Title One">
                                @error('fre_title_one')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Title Two</label>
                                <input type="text" class="form-control" name="fre_title_two"  placeholder="Enter title Two" ></input>
                                @error('fre_title_two')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Title Three</label>
                                <input type="text" class="form-control" name="fre_title_three"  placeholder="Enter title Three" ></input>
                                @error('fre_title_three')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Description</label>
                                <textarea type="number" class="form-control" name="fre_description"  placeholder="Enter  Descrtiption" rows="4"></textarea>
                                @error('fre_description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Photo</label>
                                <input type="file" class="form-control" name="fre_photo"></input>
                                @error('fre_photo')
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
        @endif 

</div>
@endsection

{{-- @section('footer_scrtipt_add')
<script>
   
</script>
@endsection --}}