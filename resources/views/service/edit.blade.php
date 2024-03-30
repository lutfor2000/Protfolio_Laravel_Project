@extends('layouts.otika')
@section('service')
active
@endsection
@section('title')
Service Edit
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Service</div>
                <div class="card-body">
                    @if (session('service_success_mess'))
                      <div class="alert alert-success">{{session('service_success_mess')}}</div>
                    @endif
                    
                    <form action="{{route('serviceupdate',$service_view->id)}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Service Icon</label>
                            <input type="text" class="form-control" name="service_icon" value="{{$service_view->service_icon}}">
                            @error('service_icon')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Service Title</label>
                            <input class="form-control" name="service_title" value="{{$service_view->service_title}}"></input>
                            @error('service_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Service Description</label>
                            <textarea class="form-control" name="service_description"  rows="4">{{$service_view->service_description}}</textarea>
                            @error('service_description')
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