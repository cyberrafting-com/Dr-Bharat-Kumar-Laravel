@php($title = "Gallery | Dr. Bharat Raju, Orthopedic Surgeon, Navi Mumbai")  
@section('meta_desc') @endsection
@extends('layouts.default')    
@section('content')

<section class="lightbox-gallery" style="padding: 90px 0;">
     
    <div class="container"> 
    <div class="abt_heading_wrapper text-center">
      <h2 class="f700 pb-4 blue ">Gallery</h2>
    </div>
        <div class="row photos">
          <div class="col-md-4">
              <a href="{{ asset('/resources/assets/images/gallery-1.jpeg')}}" data-lightbox="photos">
                  <img class="img-thumbnail" src="{{ asset('/resources/assets/images/gallery-1.jpeg')}}" alt="dr pushparaj Moolya">
              </a>
          </div>

          <div class="col-md-4">
              <a href="{{ asset('/resources/assets/images/gallery-2.jpeg')}}" data-lightbox="photos">
                  <img class="img-thumbnail" src="{{ asset('/resources/assets/images/gallery-2.jpeg')}}" alt="dr pushparaj Moolya">
              </a>
          </div>    
        </div>
      </div>
</section>



@stop