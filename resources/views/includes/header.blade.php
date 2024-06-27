<nav class="navbar navbar-expand-md">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('/resources/assets/images/
		dr-bharat-logo.png')}}" alt="">
		</a>
			
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fas fa-bars"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{route('about')}}">About Me</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('robotic-knee-replacement-surgery-kharghar-navi-mumbai')}}">Robotic Knee Replacement</a>
					<a class="dropdown-item" href="{{route('hip-replacement')}}">Hip Replacement</a>
					<a class="dropdown-item" href="{{route('knee-replacement')}}">Knee Joint Replacement</a>
					<a class="dropdown-item" href="{{route('sport-injury-treatment')}}">Sports Injuries</a>
					<a class="dropdown-item" href="{{route('arthritis-treatment')}}">Arthritis Treatment</a>
					<a class="dropdown-item" href="{{route('fracture-treatment')}}">Fracture Treatment</a>
				</div>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Testimonials</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('video-testimonials')}}">Video Testimonials</a>
					<a class="dropdown-item" href="{{route('testimonials')}}">Google Reviews</a>
				</div>
			</li>
				
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('gallery')}}">Images</a>
					<a class="dropdown-item" href="{{route('patient-education')}}">Patient Education</a>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{route('contact')}}">Contact Us</a>
			</li>
		</ul>
		<div class="book-online-btn">
			<a target="_blank" href="https://payu.in/web/7C18937AD79349CBD7AC6880CF03B066">Book Online</a>
		</div>
		</div>
	</div>
</nav>