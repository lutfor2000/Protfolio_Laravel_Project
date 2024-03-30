@extends('layouts.otika')
@section('aboutsetting')
active
@endsection
@section('title')
About Setting
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">About Part</div>
                <div class="card-body">
                    @if (session('about_setting_message'))
                      <div class="alert alert-success">{{session('about_setting_message')}}</div>
                    @endif
                    
                    <form action="{{route('aboutsettingpost')}}" method="POST" >
                        @csrf
                         <div class="form-group mt-3">
                            <label >About Discription</label>
                            <textarea class="form-control" name="about_description" rows="4">{{$aboutsettings_all->where('about_setting_name','about_description')->first()->about_setting_value}}</textarea>
                         </div>
                         <div class="form-group mt-3">
                             <label >Name</label>
                             <textarea class="form-control" name="name" rows="4">{{$aboutsettings_all->where('about_setting_name','name')->first()->about_setting_value}}</textarea>
                            </div>
                            
                            <div class="form-group mt-3">
                               <label >Date of birth</label>
                               <textarea class="form-control" name="date_of_birth" rows="4">{{$aboutsettings_all->where('about_setting_name','date_of_birth')->first()->about_setting_value}}</textarea>
                            </div>
                            <div class="form-group mt-3">
                               <label >Address</label>
                               <textarea class="form-control" name="address" rows="4">{{$aboutsettings_all->where('about_setting_name','address')->first()->about_setting_value}}</textarea>
                            </div>
                            <div class="form-group mt-3">
                               <label >Zip code</label>
                               <textarea class="form-control" name="zip_code" rows="4">{{$aboutsettings_all->where('about_setting_name','zip_code')->first()->about_setting_value}}</textarea>
                            </div>
                            <div class="form-group mt-3">
                               <label >Email</label>
                               <textarea class="form-control" name="email" rows="4">{{$aboutsettings_all->where('about_setting_name','email')->first()->about_setting_value}}</textarea>
                            </div>
                            <div class="form-group mt-3">
                               <label >Phone Number</label>
                               <textarea class="form-control" name="phone_number" rows="4">{{$aboutsettings_all->where('about_setting_name','phone_number')->first()->about_setting_value}}</textarea>
                            </div>
                            <div class="form-group mt-3">
                               <label >Project complete</label>
                               <textarea class="form-control" name="complete_project" rows="4">{{$aboutsettings_all->where('about_setting_name','complete_project')->first()->about_setting_value}}</textarea>
                            </div>
                         <div class="btn-group  mt-3">
                         <button type="submit" class="btn btn-primary">Add Now</button>
                         </div>
                     </form>
                </div>
            </div>
          </div>

          <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">About Photo</div>
                <div class="card-body">
                    @if (session('about_setting_mes'))
                      <div class="alert alert-success">{{session('about_setting_mes')}}</div>
                    @endif
                    
                    <form action="{{route('aboutsettingphoto')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            {{-- @php
                                $about_photos_count = App\Models\Aboutphoto::select('about_photo')->count();
                            @endphp --}}
                            
                            @if ($aboutphotos->count())
                                @foreach ($aboutphotos as $item)
                                <div class="form-group text-center">
                                    <img src="{{asset('uploads/about_photo/'.$item->about_photo)}}"  width="100" alt="Not found" >
                                </div> 
                                <div class="btn-group text-center d-block">
                                    <a type="submit" class="btn btn-sm btn-outline-info" href = "{{route('aboutphotoedit',$item->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm  btn-outline-danger" href = "{{route('aboutphotodelete',$item->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
                                </div>
                                @endforeach
                            @else
                                <div class="form-group mt-3">
                                    <label >About Photo</label>
                                    <input type="file" class="form-control" name="about_photo">
                                    @error('about_photo')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="btn-group  mt-3">
                                <button type="submit" class="btn btn-primary">Add Now</button>
                                </div>
                            @endif
                     </form>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection