@extends('layouts.otika')
@section('clientmessage')
active
@endsection
@section('title')
Client Message
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-12 m-auto">
           
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Client Message</h6>
                      </div>
                      <div class="card-body">
                        @if (session('clientmessage_status'))
                        <div class="alert alert-success ">{{session('clientmessage_status')}}</div>
                        @endif

                         @if ($clientmessages->count() != 0) 
                         <div id="main_section" > 
                             <div id="total_client_btn" class="alert alert-light text-center">Total Client : {{$clientmessages->count()}}</div>
                         </div>
                         @endif

                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientmessages as $clientmessage)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($clientmessage->client_name))}}</td>
                                <td>{{$clientmessage->client_email}}</td>
                                <td>{{ucwords(strtolower($clientmessage->client_subject))}}</td>
                                <td>{{$clientmessage->client_message}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm  btn-outline-danger edite_buton" href ="{{route('clientmessagedelete',$clientmessage->id)}}"><i class=" fa-1x fa fa-trash"></i></a>
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
                        {{-- {{$clientmessages->links('pagination::bootstrap-5')}} --}}
                         @if ($clientmessages->count() != 0)
                         <div class="btn-group text-center">
                            <a type="submit" class="btn btn-sm text-danger edite_buton" href = "{{route('clientdeleteall')}}"><i class=" fa-1x fa fa-trash"></i><span class="badge bg-danger text-light ml-1">All Delete</span></a>
                         </div>
                         @endif
                </div>
            </div>
          </div>
          
          <div class="col-12 m-auto">
           
            <div class="card">
                    <div class="card-header bg-primary text-light">
                       <h6>Client Message</h6>
                      </div>
                      <div class="card-body">
                        @if (session('restore_trash_mes'))
                        <div class="alert alert-success ">{{session('restore_trash_mes')}}</div>
                        @endif

                         {{-- @if ($clientmessages_trush_alls->count() != 0) 
                         <div id="main_section" > 
                             <div id="total_client_btn" class="alert alert-light text-center">Total Client : {{$clientmessages_trush_alls->count()}}</div>
                         </div>
                         @endif --}}

                        <table class = "table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientmessages_trush_alls as $clientmessages_trush)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ucwords(strtolower($clientmessages_trush->client_name))}}</td>
                                <td>{{$clientmessages_trush->client_email}}</td>
                                <td>{{ucwords(strtolower($clientmessages_trush->client_subject))}}</td>
                                <td>{{$clientmessages_trush->client_message}}</td>
                                <td>
                                <div class="btn-group text-center ">
                                    <a type="submit" class="btn btn-sm  btn-outline-info edite_buton" href ="{{route('clientmessagerestore',$clientmessages_trush->id)}}"><i class=" fa-1x fa fa-undo"></i></a>
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
                        {{-- {{$clientmessages->links('pagination::bootstrap-5')}} --}}
                         @if ($clientmessages_trush_alls->count() != 0)
                         <div class="btn-group text-center">
                            <a type="submit" class="btn btn-sm text-info edite_buton" href = "{{route('clientallforcedelete')}}"><i class=" fa-1x fa fa-trash"></i><span class="badge bg-success text-light ml-1">Foece All Delete</span></a>
                         </div>
                         @endif
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
@section('footer_scrtipt_add')
@include('js_file/all_js')
@endsection