@extends('layouts.codeblaze')
@section('body')
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
    {{-- <div class="slider-item ">
        <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third js-fullheight order-md-last img" style="background-image:url({{asset('codeblaze_asset/images/bg_1.png')}});">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Hello!</span>
                  <h1 class="mb-4 mt-3"><span>Clark Thompson</span></h1>
                  <h2 class="mb-4">A Freelance Web Designer</h2>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
              </div>
            </div>
          </div>
      </div>
    </div> --}}
     @foreach ($banners as $banner)
     <div class="slider-item">
         <div class="overlay"></div>
       <div class="container">
         <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
             <div class="one-third js-fullheight order-md-last img"  style="background-image:url({{asset('uploads/banner_photo/'.$banner->banner_photo)}});">
                 <div class="overlay"></div>
             </div>
             <div class="one-forth d-flex align-items-center ftco-animate " data-scrollax=" properties: { translateY: '70%' }">
                 <div class="text">
                     <span class="subheading text-light">{{$banner->hello_text}}</span>
                   <h1 class="mb-4 mt-3"><span>{{$banner->banner_title}} </span>{{$banner->banner_sub_title}}</h1>
                   <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
               </div>
             </div>
           </div>
       </div>
     </div>
     @endforeach
  </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
  <div class="container">
      <div class="row d-flex">
          <div class="col-md-6 col-lg-5 d-flex">
              <div class="img-about img d-flex align-items-stretch">
                  <div class="overlay"></div>
                  @foreach ($aboutphotos as $aboutphoto)
                  <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('uploads/about_photo/'.$aboutphoto->about_photo)}});">
                  </div>
                  @endforeach
                  {{-- <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('codeblaze_asset/images/bg_1.png')}});">
                  </div> --}}
              </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
              <div class="row justify-content-start pb-3">
            <div class="col-md-12 heading-section ftco-animate">
                {{-- <h1 class="big">About</h1> --}}
              <h2 class="mb-4">About Me</h2>
              <p>{{$aboutsettings_all->where('about_setting_name','about_description')->first()->about_setting_value}}</p>
              <ul class="about-info mt-4 px-md-0 px-2">
                  <li class="d-flex"><span>Name:</span> <span>{{ucwords(strtolower($aboutsettings_all->where('about_setting_name','name')->first()->about_setting_value))}}</span></li>
                  <li class="d-flex"><span>Date of birth:</span> <span>{{$aboutsettings_all->where('about_setting_name','date_of_birth')->first()->about_setting_value}}</span></li>
                  <li class="d-flex"><span>Address:</span> <span>{{$aboutsettings_all->where('about_setting_name','address')->first()->about_setting_value}}</span></li>
                  <li class="d-flex"><span>Zip code:</span> <span>{{$aboutsettings_all->where('about_setting_name','zip_code')->first()->about_setting_value}}</span></li>
                  <li class="d-flex"><span>Email:</span> <span>{{$aboutsettings_all->where('about_setting_name','email')->first()->about_setting_value}}</span></li>
                  <li class="d-flex"><span>Phone: </span> <span>{{$aboutsettings_all->where('about_setting_name','phone_number')->first()->about_setting_value}}</span></li>
              </ul>
            </div>
          </div>
        <div class="counter-wrap ftco-animate d-flex mt-md-3">
        <div class="text">
            <p class="mb-4">
              <span class="number" data-number="{{$aboutsettings_all->where('about_setting_name','complete_project')->first()->about_setting_value}}">0</span>
              <span>Project complete</span>
          </p>
          <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
        </div>
        </div>
      </div>
  </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb" id="resume-section">
  <div class="container">
      <div class="row justify-content-center pb-5">
    <div class="col-md-10 heading-section text-center ftco-animate">
        {{-- <h1 class="big big-2">Resume</h1> --}}
      <h2 class="mb-4">Resume</h2>
      <p>{{$settings->where('setting_name','resume')->first()->setting_value}}</p>
    </div>
  </div>
      <div class="row">

        @foreach ($resumes as $resume)
        <div class="col-md-6">
            <div class="resume-wrap ftco-animate">
                <span class="date">{{$resume->resume_date}}</span>
                <h2>{{$resume->resume_degree}}</h2>
                <span class="position">{{$resume->resume_univarsity}}</span>
                <p class="mt-4">{{$resume->resume_descrtiption}}</p>
            </div>
        </div>
        @endforeach

      </div>
      <div class="row justify-content-center mt-5">
          <div class="col-md-6 text-center ftco-animate">
              <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
          </div>
      </div>
  </div>
</section>

<section class="ftco-section" id="services-section">
  <div class="container">
      <div class="row justify-content-center py-5 mt-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
        {{-- <h1 class="big big-2">Services</h1> --}}
      <h2 class="mb-4">Services</h2>
      <p>{{$settings->where('setting_name','services')->first()->setting_value}}</p>
    </div>
  </div>
      <div class="row">
              @foreach ($serveces as $servece)
              <div class="col-md-4 text-center d-flex ftco-animate">
                  <a href="{{route('servicedetails',$servece->id)}}" class="services-1">
                      <span class="icon">
                          <i class="{{$servece->service_icon}}"></i>
                      </span>
                      <div class="desc">
                          <h3 class="mb-5">{{$servece->service_title}}</h3>
                      </div>
                  </a>
              </div>
              @endforeach
          </div>
  </div>
</section>

  
  <section class="ftco-section" id="skills-section">
      <div class="container">
          <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
        {{-- <h1 class="big big-2">Skills</h1> --}}
      <h2 class="mb-4">My Skills</h2>
      <p>{{$settings->where('setting_name','my_skill')->first()->setting_value}}</p>
    </div>
  </div>
          <div class="row">
            @foreach ($skills as $skill) 
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>{{ucwords(strtolower($skill->skill_title))}}</h3>
                    <div class="progress">
                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->skill_parsent}}%">
                        <span>{{$skill->skill_parsent}}</span>
                          </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>


<section class="ftco-section ftco-project" id="projects-section">
  <div class="container">
      <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
        {{-- <h1 class="big big-2">Projects</h1> --}}
      <h2 class="mb-4">Our Projects</h2>
      <p>{{$settings->where('setting_name','our_project')->first()->setting_value}}</p>
    </div>
  </div>
      <div class="row">
        @foreach ($our_projects as $our_projects)
            
        <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center project_img_css" style="background-image: url({{asset('uploads/project_photo/'.$our_projects->project_photo_one)}});">
               <div class="overlay"></div>
               <div class="text text-center p-4">
                   <h3><a href="{{route('projectdetails',$our_projects->id)}}">{{ucwords(strtolower($our_projects->project_title_one))}}</a></h3>
                   <span>{{$our_projects->project_sub_title_one}}</span>
               </div>
            </div>
         </div>

         <div class="col-md-8 ">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center project_img_css" style="background-image: url({{asset('uploads/project_photo/'.$our_projects->project_photo_two)}});">
               <div class="overlay"></div>
               <div class="text text-center p-4">
                   <h3><a href="{{route('projectdetails',$our_projects->id)}}">{{ucwords(strtolower($our_projects->project_title_two))}}</a></h3>
                   <span>{{$our_projects->project_sub_title_two}}</span>
               </div>
           </div>
         </div>
        @endforeach

      </div>
  </div>
</section>


<section class="ftco-section" id="blog-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-5">
    <div class="col-md-7 heading-section text-center ftco-animate">
      {{-- <h1 class="big big-2">Blog</h1> --}}
      <h2 class="mb-4">Our Blog</h2>
      <p>{{$settings->where('setting_name','our_blog')->first()->setting_value}}</p>
    </div>
  </div>
  <div class="row d-flex">

    @foreach ($our_blogs as $our_blog)
    <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
        <a href="{{route('blogdetails',$our_blog->id)}}" class="block-20" style="background-image: url({{asset('uploads/blog_photo/'.$our_blog->blog_photo)}});">
        </a>
        <div class="text mt-3 float-right d-block">
            <div class="d-flex align-items-center mb-3 meta">
              <p class="mb-0">
                  <span class="mr-2">{{$our_blog->blog_date}}</span>
                  <a href="#" class="mr-2">{{$our_blog->usertabelereletion->name}}</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
              </p>
          </div>
          <h3 class="heading"><a href="{{route('blogdetails',$our_blog->id)}}">{{$our_blog->blog_title}}</a></h3>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
  <div class="container">
          <div class="row d-md-flex align-items-center">
      @foreach ($counters as $counter)
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text">
            <strong class="number" data-number="{{$counter->counter_number}}">0</strong>
            <span>{{ucwords(strtolower($counter->counter_name))}}</span>
          </div>
        </div>
      </div>
      @endforeach
    
  </div>
</div>
</section>

@foreach($freelencings as $freelencing)
<section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{asset('uploads/free_photo/'.$freelencing->fre_photo)}})">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-7 ftco-animate text-center">
                  <h2>{{$freelencing->fre_title_one}} <span>{{$freelencing->fre_title_two}} </span>{{$freelencing->fre_title_three}}</h2>
                  <p class="text-light">{{$freelencing->fre_description}}</p>
                  <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
              </div>
          </div>
      </div>
</section>
@endforeach

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      {{-- <h1 class="big big-2">Contact</h1> --}}
      <h2 class="mb-4">Contact Me</h2>
      <p>{{$contacts->where('contact_name','contact_title')->first()->contact_value}}</p>
    </div>
  </div>

  <div class="row d-flex contact-info mb-5">
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="{{$contacts->where('contact_name','cont_add_icon')->first()->contact_value}}"></span>
            </div>
            <h3 class="mb-4">{{$contacts->where('contact_name','cont_add_title')->first()->contact_value}}</h3>
          <p>{{$contacts->where('contact_name','cont_add_info')->first()->contact_value}}</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="{{$contacts->where('contact_name','cont_phone_icon')->first()->contact_value}}"></span>
            </div>
            <h3 class="mb-4">{{$contacts->where('contact_name','cont_phone_title')->first()->contact_value}}</h3>
          <p><a href="tel://1234567920">{{$contacts->where('contact_name','cont_phone_info')->first()->contact_value}}</a></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="{{$contacts->where('contact_name','cont_email_icon')->first()->contact_value}}"></span>
            </div>
            <h3 class="mb-4">{{$contacts->where('contact_name','cont_email_title')->first()->contact_value}}</h3>
          <p><a href="mailto:info@yoursite.com">{{$contacts->where('contact_name','cont_email_info')->first()->contact_value}}</a></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="{{$contacts->where('contact_name','cont_web_icon')->first()->contact_value}}"></span>
            </div>
            <h3 class="mb-4">{{$contacts->where('contact_name','cont_web_title')->first()->contact_value}}</h3>
          <p><a href="#">{{$contacts->where('contact_name','cont_web_info')->first()->contact_value}}</a></p>
        </div>
    </div>
  </div>

  <div class="row no-gutters block-9">
    <div class="col-md-6 order-md-last d-flex">

      <form action="{{route('clientmessagepost')}}"  method="POST" class="bg-light p-4 p-md-5 contact-form">
        @if (session('clientmessage_mess'))
        <span class="alert text-success">{{session('clientmessage_mess')}}</span>
        @endif

        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="client_name" placeholder="Your Name">
          @error('client_name')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="client_email" placeholder="Your Email">
          @error('client_email')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="client_subject" placeholder="Subject">
          @error('client_subject')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
          <textarea type ="text" name="client_message"  cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          @error('client_message')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
          <input type="submit"  class="btn btn-primary py-3 px-5">
        </div>
      </form>
    
    </div>
     @foreach ($aboutphotos as $aboutphoto)
         
     <div class="col-md-6 d-flex">
         <div class="img" style="background-image: url({{asset('uploads/about_photo/'.$aboutphoto->about_photo)}});"></div>
     </div>
     @endforeach

  </div>
</div>
</section>   
@endsection
	 