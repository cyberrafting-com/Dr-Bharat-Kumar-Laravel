@php($title = "Best Doctor for Fracture Treatment | Dr. Bharat Raju, Orthopedic Surgeon, Navi Mumbai")  
@section('meta_desc')Dr. Bharat Raju offers expert fracture treatment in Navi Mumbai. Compassionate care, quick recovery, and comprehensive orthopedic services. Contact us for immediate assistance.@endsection
@extends('layouts.default')    
@section('content')

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Fracture Treatment</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Fracture Treatment</li>
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
                <img src="{{ asset('/resources/assets/images/fracture-service-img.jpg')}}" class="img-fluid" alt="arthritis-service-img">
            </div>  
        </div>

		<div class="row justify-content-center mb-4">
			<div class="col-md-11">
				<p class="pb-2">A fracture is a broken bone. It can range from a thin crack to a complete break. Most fractures occur when a bone is subjected to more force or pressure than it can support.</p>
			</div>
		</div>

		<div class="row justify-content-center pb-60">
            <div class="col-md-11">
                <div class="panel-group mb-4" id="accordion" role="tablist" aria-multiselectable="true">               
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Symptoms
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                            <p class="pb-2">The most common signs and symptoms of fracture are:</p>
                            <ul class="pb-3 ml-3">
                                <li>Pain</li>
                                <li>Deformity</li>
                                <li>Swelling</li>
                                <li>Bruising</li>
                                <li>Bleeding</li>
                                <li>Limping</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Diagnosis
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                            
                            <ul class="pb-3 ml-3">
                                <li>Physical examination</li>
                                <li>X-ray</li>
                                <li>CT scan</li>
                                <li>MRI</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Treatments
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                            <ul class="pb-3 ml-3">
                                <li>Incomplete, Non-displaced fracture- Immobilisation in a splint or cast.</li>
                                <li>Complete, displaced fracture: Fixation of fractures using plates and screws or rods.</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <h2 class="pb-3 blue">Call Today for your Fracture Treatment in Navi Mumbai</h2>
                <p>Call our office at <span class="blue f600">022 2774 4239</span> or <span class="blue f600">022 2774 4229</span> to request your consultation with Dr. Bharat Kumar. Come see why so many in Navi Mumbai trust their fracture treatment to Dr. Bharat Kumar! We proudly offer same-day and weekend appointments with little wait times. Start your path back to a pain-free life today!</p>
            </div>
        </div>
	</div>
</div>

@stop