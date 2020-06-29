@extends('layout')

@section('content')

	<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    			
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
		
					@if(session()->has('flash'))

					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						{{ session()->get('flash') }}
					</div>

					@endif

	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>

				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{route('messages')}}">
				    		{{csrf_field()}}
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" placeholder="Name" required>
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" placeholder="Email" required>
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="body" id="message" class="form-control" rows="8" placeholder="Your Message Here" required></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <button type="submit" class="btn btn-primary pull-right">Submit</button>
				            </div>
				        </form>

	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

@stop