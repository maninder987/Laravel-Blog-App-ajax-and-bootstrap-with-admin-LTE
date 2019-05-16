@extends('layouts.frontend')




@section('content')
	<div id="fh5co-main">


		<div id="fh5co-portfolio">
			<div class="fh5co-portfolio-item ">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url(frontend/images/work_1.jpg);"></div>
				<div class="fh5co-portfolio-description">
					<h2>Project First</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
				</div>
			</div>
			<div class="fh5co-portfolio-item fh5co-img-right">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url(frontend/images/work_2.jpg);"></div>
				<div class="fh5co-portfolio-description">
					<h2>Project Second</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
				</div>
			</div>
			<div class="fh5co-portfolio-item ">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url(frontend/images/work_3.jpg);"></div>
				<div class="fh5co-portfolio-description">
					<h2>Project Third</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
				</div>
			</div>
			<div class="fh5co-portfolio-item fh5co-img-right">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url(frontend/images/work_4.jpg);"></div>
				<div class="fh5co-portfolio-description">
					<h2>Project Fourth</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
				</div>
			</div>
		</div>

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
