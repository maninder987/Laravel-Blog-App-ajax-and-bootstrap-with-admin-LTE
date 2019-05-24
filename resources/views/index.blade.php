@extends('layouts.frontend')




@section('content')
	<div id="fh5co-main">

@if($posts)

<?php $counter=1; ?>
   @foreach($posts as $post)
	 <?php

			if($counter%2 ==0)
		   {
	  ?>
		<div id="fh5co-portfolio">
			<div class="fh5co-portfolio-item ">
				<div class="fh5co-portfolio-figure animate-box"  style="background-image: url({{ $post['picture'] }}); background-size:contain;"></div>
				<div class="fh5co-portfolio-description">
					<h2>{{ $post['title'] }}</h2>
					<span><small>Author:</small></span>
					<p><?php echo strip_tags($post['content']);?></p>
					<p><a href="#" class="btn btn-primary">Read More <?php if(Auth::user()){ echo ucfirst(Auth::user()->name); } ?></a></p>
				</div>
			</div>
		</div>
		<?php
	}else if($counter%2 != 0 ){
			?>
			<div id="fh5co-portfolio">
			<div class="fh5co-portfolio-item fh5co-img-right">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url({{ $post['picture'] }}); background-size:contain;">
				</div>

				<div class="fh5co-portfolio-description">
					<h2>{{ $post['title'] }}</h2>
					<span><small>Author:</small></span>
					<p><?php echo strip_tags($post['content']);?></p>
					<p><a href="#" class="btn btn-primary">Read More <?php if(Auth::user()){ echo ucfirst(Auth::user()->name); } ?></a></p>
				</div>
			</div>
		</div>
			<?php
	}
		$counter++; ?>
   @endforeach
@endif


		<div id="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">Leadership</h2>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="{{ asset('frontend/images/user.jpg') }}" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Will Barrow</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="{{ asset('frontend/images/user_2.jpg') }}" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Max Conversion</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="{{ asset('frontend/images/user_3.jpg') }}" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Hanson Deck</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="{{ asset('frontend/images/user.jpg') }}" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3>Sue Shei</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>

	@endsection
