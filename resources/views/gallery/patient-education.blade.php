@php($title = "Patient Education Videos On Orthocare and Treatment by Dr. Bharatkumar Raju")  
@section('meta_desc')Watch Dr. Bharatkumar Raju's educational videos on orthocare and treatments. Gain valuable insights and tips from Navi Mumbai's leading orthopedic surgeon.@endsection
@extends('layouts.default')    
@section('content')

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Patient Education</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Patient Education</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="testimonials">
  <div class="container">
    <div class="abt_heading_wrapper" style="background-color: transparent;padding: 40px 0;">
      <h2 class="f700 blue text-center pb-0" style="color: #00626f;">Education Videos</h2>
    </div>

    <div class="row">
        <!-- <div class="owl-carousel testimonial-wrapper" id="sec-testimonial"> -->
          <div class="col-md-4">
                <iframe width="100%" height="290" src="https://www.youtube.com/embed/qvzGzjt6kZg" title="Expert Insights on Total Knee Replacement Surgery: Dr. Gangaraju Bharatkumar&#39;s Advice and Guidance" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
               
                   <div class="col-md-4">
                       <iframe width="100%" height="290" src="https://www.youtube.com/embed/7Kfjatb_Jtc" title="Treatment Options For Arthritis &amp; When Will You Need Joint Replacement | Dr Gangaraju Bharatkumar" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                       </div>
                       
                   <div class="col-md-4">
                       <iframe width="100%" height="290" src="https://www.youtube.com/embed/uG4qo3Hu7f8" title="Understanding Arthritis: Causes and Insights from Orthopedic Expert Dr. Gangaraju Bharatkumar" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    
    </div>
  </div>
</section>

@stop