@extends('layouts.otika')
@section('service')
active
@endsection
@section('title')
Service
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
                        @if (session('service_message'))
                        <div class="alert alert-success ">{{session('service_message')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td><span class="text-warning"><i class="{{$service->service_icon}} fa-3x"></i></span></td>
                                <td>{{ucwords(strtolower($service->service_title))}}</td>
                                <td>{{$service->service_description}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm btn-outline-warning" href = "{{route('servicedit',$service->id)}}"><i class=" fa-1x fa fa-edit"></i></a>
                                    <a type="submit" class="btn btn-sm  btn-outline-danger" href = "{{route('servicedelete',$service->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
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
                        {{$services->links('pagination::bootstrap-5')}}
                </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card">
                <div class="card-header bg-primary text-light">Service</div>
                <div class="card-body">
                    @if (session('service_success_mess'))
                      <div class="alert alert-success">{{session('service_success_mess')}}</div>
                    @endif
                    
                    <form action="{{route('servicepost')}}" method="POST">
                        @csrf
                         <div class="form-group mt-3">
                            <label >Service Icon</label>
                            <input type="text" class="form-control" name="service_icon" placeholder="Enter Icon">
                            @error('service_icon')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Service Title</label>
                            <input class="form-control" name="service_title" placeholder="Enter Title" rows="4"></input>
                            @error('service_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                         </div>

                         <div class="form-group mt-3">
                            <label >Service Description</label>
                            <textarea class="form-control" name="service_description" placeholder="Enter Description" rows="4"></textarea>
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

          <div class="col-8">
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Service Trush Table</h6>
                      </div>
                      <div class="card-body">
                        @if (session('service_trush_messege'))
                        <div class="alert alert-success ">{{session('service_trush_messege')}}</div>
                        @endif
                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($service_trush_all as $service_trush)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td><span class="text-warning"><i class="{{$service_trush->service_icon}} fa-3x"></i></span></td>
                                <td>{{ucwords(strtolower($service_trush->service_title))}}</td>
                                <td>{{$service_trush->service_description}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn  btn-outline-success" href ="{{route('servicestore',$service_trush->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
                                    <a type="submit" class="btn  btn-outline-danger " href = "{{route('serviceforcedelete',$service_trush->id)}}"><i class=" fa-1x fa fa-unlink"></i></a>
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
                        {{$service_trush_all->links('pagination::bootstrap-5')}}
                </div>
            </div>
          </div>


    </div>
</div>
@endsection
