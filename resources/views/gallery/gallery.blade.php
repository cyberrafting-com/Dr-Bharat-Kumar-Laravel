@php($title = "Gallery | Dr. Bharat Raju, Orthopedic Surgeon, Navi Mumbai")  
@section('meta_desc')Explore our gallery to see Dr. Bharat Raju in action. View patient transformations, treatment success stories, and our state-of-the-art facilities in Navi Mumbai.@endsection
@extends('layouts.default')    
@section('content')

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Images</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Images</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

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