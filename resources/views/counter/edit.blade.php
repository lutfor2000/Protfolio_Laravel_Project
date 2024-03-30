@extends('layouts.otika')
@section('counter')
active
@endsection
@section('title')
Counter Edit
@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Counter Edit</div>
                <div class="card-body">
                    @if (session('count_add_mess'))
                      <div class="alert alert-success">{{session('count_add_mess')}}</div>
                    @endif
                    
                    <form action="{{route('counterupdate',$counter_info->id)}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Counter Name</label>
                            <input type="text" class="form-control" name="counter_name" value="{{ucwords(strtolower($counter_info->counter_name))}}">
                            @error('counter_name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Counter Number</label>
                            <input type="number" class="form-control" name="counter_number" value="{{$counter_info->counter_number}}"></input>
                            @error('counter_number')
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

