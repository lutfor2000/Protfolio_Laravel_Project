@extends('layouts.otika')
@section('freelanching')
active
@endsection
@section('title')
Freelencing Messages Edit
@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-header bg-primary text-light">Freelencing Messages Edit</div>
                    <div class="card-body">
                        @if (session('freelencing_mess'))
                          <div class="alert alert-success">{{session('freelencing_mess')}}</div>
                        @endif
                        
                        <form action="{{route('freelancingupdate',$free_info->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group mt-3">
                                <label >Title One</label>
                                <input type="text" class="form-control" name="fre_title_one" value="{{$free_info->fre_title_one}}">
                                @error('fre_title_one')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Title Two</label>
                                <input type="text" class="form-control" name="fre_title_two" value="{{$free_info->fre_title_two}}"></input>
                                @error('fre_title_two')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Title Three</label>
                                <input type="text" class="form-control" name="fre_title_three"  value="{{$free_info->fre_title_three}}" ></input>
                                @error('fre_title_three')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>
    
                             <div class="form-group mt-3">
                                <label >Description</label>
                                <textarea type="number" class="form-control" name="fre_description" rows="4">{{$free_info->fre_description}}</textarea>
                                @error('fre_description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                             </div>

                             <div class="form-group mt-3">
                                <img src="{{asset('uploads/free_photo/'.$free_info->fre_photo)}}"  width="100" alt="Not found" >
                             </div>

                             <div class="form-group mt-3">
                                <label >Photo</label>
                                <input type="file" class="form-control" name="fre_new_photo"></input>
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
       

</div>
@endsection

{{-- @section('footer_scrtipt_add')
<script>
   
</script>
@endsection --}}