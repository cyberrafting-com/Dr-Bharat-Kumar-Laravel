@php($title = "Sport Injury Treatment Specialist  Navi Mumbai |Dr. Bharatkumar")  
@section('meta_desc')Recover faster with Dr. Bharatkumar, Navi Mumbai's sports injury treatment specialist. Expert care for athletes, personalized rehabilitation plans, and top-notch facilities.@endsection
@extends('layouts.default')    
@section('content')

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Sport Injury Treatment</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Sport Injury Treatment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="srvc-meta">
	<div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-11">  
                <img src="{{ asset('/resources/assets/images/sport-injury-service-img.jpg')}}" class="img-fluid" alt="arthritis-service-img">
            </div>    
        </div>
		<div class="row justify-content-center mb-4">  
			<div class="col-md-11">
				<p class="pb-2">From casual bikers and weekend warriors to best-in-class athletes, anyone can experience injuries. If you’ve experienced a sports-related injury or condition, we are here to help get you back to doing what you love.</p>
                <p class="pb-2">Some of the sports related injuries that we address:</p>
                <ul class="ml-3">
                <li>Ankle Sprain</li>
                <li>Knee Injuries</li>
                <li>Tennis and Golfer's elbow</li>
                <li>Fractures and Dislocations</li>
                <li>Rotator cuff injury</li>
                </ul>
			</div>
		</div>
	</div>
</div>

@stop