@extends('layout')
@section('content')

		<section class="header section-padding">
			<div class="background">&nbsp;</div> 
			<div class="container">
				<div class="header-text">
					<h1>Contact Me</h1>
					<p>
					Feel free to contact Me!
					</p>
				</div>
			</div>
		</section>

        <div class="container">
			<section class="section-padding">
				<div class="jumbotron text-center">
						<h1>Wish to contact me for work?</h1>
						<p>Contact me by sending an email using the form below:</p> 
						{{ HTML::ul($errors->all(), array('class'=>'errors')) }}
						{{ Form::open(array('url' => 'contact')) }}   
						{{ Form::label('Subject') }} 
						{{ Form::text('subject','', array('type'=>'text', 'title'=>'' )) }} 
						<br/>
						{{ Form::label('Email') }}
						{{ Form::text('email','') }}
						<br/>
						{{ Form::label('Message') }}
						{{ Form::textarea('message','', array('class' => 'field', 'title'=>'Enter your Message')) }} 
						<br />
						{{ Form::submit('Submit', array('type'=>'button', 'class' => 'btn btn-lg btn-primary openbutton')) }}
						{{ Form::close() }}
				</div>

			</section>
			<div class="contact-text col-md-4 col-md-offset-4">
				<p>I can also be reached on phone at:<span class="grey">+254 723 772430</span><br/>
					&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;and via email at <span class="grey"> munene.ian@gmail.com</span>
				</p>
			</div>
		</div> 

@stop