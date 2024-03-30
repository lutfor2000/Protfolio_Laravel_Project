@extends('layouts.otika')
@section('footer')
active
@endsection
@section('title')
Footer
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">Footer Part</div>
                <div class="card-body">
                    
                      <small class="text-danger" id="footer_error"></small>
                    
                     <form id="footer_form">
                        @csrf
                         <div class="form-group mt-3">
                            <label >About</label>
                            <textarea class="form-control" name="about_addres" rows="4">{{$footers->where('footer_name','about_addres')->first()->footer_value}}</textarea>
                         </div>
                        
                         <div class="form-group mt-3">
                             <label >Location</label>
                             <textarea class="form-control" name="footer_location" rows="4">{{$footers->where('footer_name','footer_location')->first()->footer_value}}</textarea>
                        </div>
        
                         <div class="form-group mt-3">
                             <label >Phone Number</label>
                             <textarea class="form-control" name="footer_phone" rows="4">{{$footers->where('footer_name','footer_phone')->first()->footer_value}}</textarea>
                        </div>

                         <div class="form-group mt-3">
                             <label >Email</label>
                             <textarea class="form-control" name="footer_email" rows="4">{{$footers->where('footer_name','footer_email')->first()->footer_value}}</textarea>
                        </div>
                            
                         <div class="form-group mt-3">
                             <label >Twiter Link</label>
                             <textarea class="form-control" name="twiter_link" rows="4">{{$footers->where('footer_name','twiter_link')->first()->footer_value}}</textarea>
                        </div>
                            
                         <div class="form-group mt-3">
                             <label >Faceboock Link</label>
                             <textarea class="form-control" name="faceboock_link" rows="4">{{$footers->where('footer_name','faceboock_link')->first()->footer_value}}</textarea>
                        </div>
                            
                         <div class="form-group mt-3">
                             <label >Instagram Link</label>
                             <textarea class="form-control" name="instagram_link" rows="4">{{$footers->where('footer_name','instagram_link')->first()->footer_value}}</textarea>
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
@section('footer_scrtipt_add')
@include('js_file/footer')
@endsection