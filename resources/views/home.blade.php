@extends('layouts.otika')

@section('title')
Dashboard
@endsection
@section('home')
active
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <table class = "table table-bordered text-center">
                        <thead>
                           <tr>
                              <th>Serial No</th>
                              <th>User Name</th>
                              <th>Profile Photo</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                              @foreach ($users as $user)
                                 <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <img src="{{asset('uploads/profile_photo/'.$user->user_photo)}}"  width="50" alt="Not found" >
                                    </td>
                                    <td>
                                    <div class="btn-group ">
                                    <a type="submit" class="btn btn-sm btn-outline-danger" href = ""><i class=" fa-1x fa fa-trash"></i></a>
                                    <a type="submit" class="btn btn-sm btn-outline-warning" href = ""><i class=" fa-1x fa fa-edit"></i></a>
                                    </div>
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
