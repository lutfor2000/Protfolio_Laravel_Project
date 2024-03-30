@extends('layouts.otika')
@section('setting')
active
@endsection
@section('title')
 Setting
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Setting Part</div>
                <div class="card-body">
                    @if (session('setting_message'))
                      <div class="alert alert-success">{{session('setting_message')}}</div>
                    @endif
                    
                    <form action="{{route('settingpost')}}" method="POST" >
                        @csrf
                         <div class="form-group mt-3">
                            <label >Resume</label>
                            <textarea class="form-control" name="resume" rows="4">{{$settings->where('setting_name','resume')->first()->setting_value}}</textarea>
                         </div>

                         <div class="form-group mt-3">
                             <label >Services</label>
                             <textarea class="form-control" name="services" rows="4">{{$settings->where('setting_name','services')->first()->setting_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >My Skills</label>
                             <textarea class="form-control" name="my_skill" rows="4">{{$settings->where('setting_name','my_skill')->first()->setting_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Our Projects</label>
                             <textarea class="form-control" name="our_project" rows="4">{{$settings->where('setting_name','our_project')->first()->setting_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Our Blog</label>
                             <textarea class="form-control" name="our_blog" rows="4">{{$settings->where('setting_name','our_blog')->first()->setting_value}}</textarea>
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