@extends('layouts.codeblaze_details')
@section('details_body')
<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-10 heading-section text-center ftco-animate">
          {{-- <h1 class="big big-2">Resume</h1> --}}
        <h2 class="mb-4">Service</h2>
      </div>
    </div>
        <div class="row">
  
        
          <div class="col-md-10 m-auto">
              <div class="resume-wrap ftco-animate text-center">
                  <span class="dtails_icon"> <i class="{{$service_details_info->service_icon}}"></i></span>
                  <h2>{{$service_details_info->service_title}}</h2>
                  <p class="mt-4">{{$service_details_info->service_description}}</p>
              </div>
          </div>
        
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="{{route('codeblaze')}}" class="btn btn-primary py-4 px-5">Go Back</a></p>
            </div>
        </div>
    </div>
  </section>
@endsection