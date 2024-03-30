@extends('layouts.otika')
@section('contact')
active
@endsection
@section('title')
 Contact
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Contact</div>
                <div class="card-body">
                    @if (session('contact_message'))
                      <div class="alert alert-success">{{session('contact_message')}}</div>
                    @endif
                    
                    <form action="{{route('contactgpost')}}" method="POST" >
                        @csrf
                         <div class="form-group mt-3">
                            <label >Contact Title</label>
                            <textarea class="form-control" name="contact_title" rows="4">{{$contacts->where('contact_name','contact_title')->first()->contact_value}}</textarea>
                         </div>

                  {{-- contact Address Part Start--}}
                         <div class="form-group mt-3">
                             <label >Contact Address Icon</label>
                             <textarea class="form-control" name="cont_add_icon" rows="4">{{$contacts->where('contact_name','cont_add_icon')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Address Title</label>
                             <textarea class="form-control" name="cont_add_title" rows="4">{{$contacts->where('contact_name','cont_add_title')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Address Information</label>
                             <textarea class="form-control" name="cont_add_info" rows="4">{{$contacts->where('contact_name','cont_add_info')->first()->contact_value}}</textarea>
                        </div>

                  {{-- contact Phone Part Start--}}
                         <div class="form-group mt-3">
                             <label >Contact Phone Icon</label>
                             <textarea class="form-control" name="cont_phone_icon" rows="4">{{$contacts->where('contact_name','cont_phone_icon')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Phone Title</label>
                             <textarea class="form-control" name="cont_phone_title" rows="4">{{$contacts->where('contact_name','cont_phone_title')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Phone Number</label>
                             <textarea class="form-control" name="cont_phone_info" rows="4">{{$contacts->where('contact_name','cont_phone_info')->first()->contact_value}}</textarea>
                        </div>

                    {{-- contact Email Part Start--}}
                         <div class="form-group mt-3">
                             <label >Contact Email Icon</label>
                             <textarea class="form-control" name="cont_email_icon" rows="4">{{$contacts->where('contact_name','cont_email_icon')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Email Title</label>
                             <textarea class="form-control" name="cont_email_title" rows="4">{{$contacts->where('contact_name','cont_email_title')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Email Addess</label>
                             <textarea class="form-control" name="cont_email_info" rows="4">{{$contacts->where('contact_name','cont_email_info')->first()->contact_value}}</textarea>
                        </div>

               {{-- contact Website Part Start--}}
                         <div class="form-group mt-3">
                             <label >Contact Website Icon</label>
                             <textarea class="form-control" name="cont_web_icon" rows="4">{{$contacts->where('contact_name','cont_web_icon')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Website Title</label>
                             <textarea class="form-control" name="cont_web_title" rows="4">{{$contacts->where('contact_name','cont_web_title')->first()->contact_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Contact Website Number</label>
                             <textarea class="form-control" name="cont_web_info" rows="4">{{$contacts->where('contact_name','cont_web_info')->first()->contact_value}}</textarea>
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