@extends('layouts.codeblaze_details')
@section('details_body')
<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-10 heading-section text-center ftco-animate">
          {{-- <h1 class="big big-2">Resume</h1> --}}
        <h2 class="mb-4">OUR PROJECT</h2>
      </div>
    </div>
        <div class="row">
  
        
          <div class="col-md-10 m-auto">
              <div class="resume-wrap ftco-animate text-center">
                  <h2 class="text-warning">{{strtoupper($project_details->project_title_two)}}</h2>
                   
                  <div class="form-group mt-3">
                    <img src="{{asset('uploads/project_photo/'.$project_details->project_photo_two)}}" class="img-fluid p-3 project_img_css" alt="Not found" >
                 </div>
                  <h3 class="text-warning">{{strtoupper($project_details->project_sub_title_two)}}</h3>
                  <p class="mt-4">{{$project_details->project_desc_two}}</p>
              </div>
          </div>

          <div class="col-md-10 m-auto">
              <div class="resume-wrap ftco-animate text-center">
                  <h2 class="text-warning">{{strtoupper($project_details->project_title_one)}}</h2>
                   
                  <div class="form-group mt-3">
                    <img src="{{asset('uploads/project_photo/'.$project_details->project_photo_one)}}" class="img-fluid p-3 project_img_css" alt="Not found" >
                 </div>
                  <h3 class="text-warning">{{strtoupper($project_details->project_sub_title_one)}}</h3>
                  <p class="mt-4">{{$project_details->project_desc_one}}</p>
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