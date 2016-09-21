@extends('layouts.app')

@section('content')

        <style>
			.bg-image{
				background: url('/images/intro-bg.jpg');
			}
			
			.white-text {
				color:white;
			}
			
			.img-circle {
				border: 3px solid #007a6b;
			}
			
			.panel-margin {
				margin-top: -22px;
				margin-bottom: -30px;
			}
			
			.navbar-static-top {
				z-index: 1000;
				border-width: 0 0 0px;
			}
			
			
			.margin-bottom-30{
				margin-bottom: 30px;
			}
			
        </style>

			<div class="panel panel-default bg-image panel-margin">
			  <div class="panel-body">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 white-text"><img class="responsive-img center-block" style="width: 250px;" src="/images/logo.png" />
					
					<h3 class="text-center margin-bottom-30">Track your health status with us!</h3>
					
					</div>
					<div class="col-md-4"></div>
				</div>
					   
				<div class="row text-center">
                <div class="col-md-4">
                    <span>
						<img src="/images/doctor-point.png" class="img-circle"></img>
                    </span>
                    <h4 class="service-heading white-text">Interaction with doctors</h4>
                    <p class="text-muted white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <img src="/images/patient-point.png" class="img-circle"></img>
                    </span>
                    <h4 class="service-heading white-text">Fully-informed pacients</h4>
                    <p class="text-muted white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <img src="/images/health-point.png" class="img-circle"></img>
                    </span>
                    <h4 class="service-heading white-text">Online health tracking</h4>
                    <p class="text-muted white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>	  
					  
				  </div>

				  
			  </div>
			</div>
					 
@endsection