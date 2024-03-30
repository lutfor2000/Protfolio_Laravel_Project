@extends('layouts.otika')
@section('skill')
active
@endsection
@section('title')
Skill Edit
@endsection
@section('content')
<div class="container">
    <div class="row">

          <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Skill Edit</div>
                <div class="card-body">
                    @if (session('skill_add_mess'))
                      <div class="alert alert-success">{{session('skill_add_mess')}}</div>
                    @endif
                    
                    <form action="{{route('skillupdate',$skill_info->id)}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Skill Title</label>
                            <input type="text" class="form-control" name="skill_title" value="{{$skill_info->skill_title}}">
                            @error('skill_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Skill Parsent(%) </label>
                            <input type="number" class="form-control" name="skill_parsent" value="{{$skill_info->skill_parsent}}"></input>
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

    </div>
</div>
@endsection