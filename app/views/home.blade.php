@extends('layout') 
@section('content')  
		<section class="header section-padding">
			<div class="background">&nbsp;</div> 
			<div class="container">
				<div class="header-text">
					<h1>Ian Munene:</h1>
					<p>
					Making the world a better place, <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; one line of code at a time   
					</p>
				</div>
			</div>
		</section>

        <div class="container">
			<section class="section-padding">
				<div class="jumbotron text-center">
						<h1><span class="grey">WELCOME TO</span> MY HOME</h1>
						<p>
						My previous work includes:
						</p>
				</div>
				<div class="jumbotron text-center">
					<div class="row">
						<div class="showcase-box col-md-4">
							<div class="showcase-item">
								<img src="{{ asset('img/screenshot1.png') }}" />
								<p>
								Supamall an E-commerce web app
								</p>
							</div>
						</div>
						<div class="showcase-box col-md-4">
							<div class="showcase-item">
								<img src="{{ asset('img/screenshot2.png') }}" />
								<p>
								Content from the E-commerce web app
								</p>
							</div>
						</div>
						<div class="showcase-box col-md-4">
							<div class="showcase-item">
								<img src="{{ asset('img/screenshot3.png') }}" />
								<p>
								More content from the E-commerce web app
								</p>
						</div>
					</div>
				</div>
			</section>
		</div>
@stop