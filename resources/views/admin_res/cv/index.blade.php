@extends("admin_res.app")

@section('head')
<link rel="stylesheet" href="{{asset('css/cv.css')}}">
<script type="text/javascript">
		function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = '<div id="cv-wrapper">'+document.getElementById(el).innerHTML+"</div>";
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>
@endsection

@section('footer')

<!-- page script -->

@endsection

@section('footer')


@endsection

@section("main-content")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			CV - {{Auth()->user()->name}}
			<small><!-- sub title --></small>
		</h1>
		
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div id="cv-wrapper">
					<div class="cv-sidebar">
						<div class="photo" style="background-image: url({{ asset('images/profile.jpg') }})  !important;"></div>
						<div class="bio">
							<h1 class="title">{{$cv->name}}</h1>
							<h2 class="sub-title">{{$cv->position}}</h2>
						</div>
						<div class="col-md-12 profile-details">
							<section >
								<div class="heading"><h1>About me</h1></div>
								<div class="sec-body">
									<p>{{$cv->about}}</p>
									<p class="contact">
										<span><i class="fa fa-inbox"></i> {{$cv->email}} </span><br />
										<span><i class="fa fa-phone"></i> {{$cv->contact}} </span><br />
										<span><i class="fa fa-map-marker"></i> {{$cv->address}} </span><br />

									</p>
								</div>
							</section>

							<section id="social-links">
								<div class="heading"><h1>Follow me</h1></div>
								<div class="sec-body">
									<p>
										@foreach ($socials as $social)
										<span><i class="fa fa-{{$social->name}}"></i> {{$social->link}}</span><br />
										@endforeach

									</p>
								</div>
							</section>

							<section >
								<div class="heading"><h1>Hobbies</h1></div>
								<div class="sec-body">
									<p>
										<span># Cycling </span><br />
										<span># Traveling </span><br />
										<span># Gaming </span><br />

									</p>
								</div>
							</section>
						</div>

					</div>
					<div class="cv-body">
						<div class="col-md-12">
							<section >
								<div class="heading"><div class="icon"><i class="fa fa-briefcase"></i></div>Experiences</div>
								<div class="sec-body">

									@foreach ($experiences as $exp)
									<div class="list-item-design1">
										<div class="p1">{{$exp->duration}} </div>
										<div class="p2"><i class="fa fa-circle-o"></i></div>
										<div class="p3">
											<div class="list-title"><span>{{$exp->position}}</span> / <span class="list-sub-title">{{$exp->company_name}}</span></div>
											<div class="list-body">{{$exp->details}}</div>
										</div>
									</div>
									@endforeach

								</div>
							</section>
							<section >
								<div class="heading"><div class="icon"><i class="fa fa-bank "></i></div>Education</div>
								<div class="sec-body">
									
									@foreach ($educations as $edu)
									<div class="list-item-design1">
										<div class="p1">{{$edu->type}} </div>
										<div class="p2"><i class="fa fa-circle-o"></i></div>
										<div class="p3">
											<div class="list-title"><span>{{$edu->course}}</span> / <span class="list-sub-title">{{$edu->institute}}</span></div>
											<div class="list-body">{{$edu->duration}} <br />
												<i class="fa fa-trophy"> </i> {{$edu->result}} 
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</section>

							<section >
								<div class="heading"><div class="icon"><i class="fa fa-user "></i></div>References</div>
								<div class="sec-body">
									<div class="list-item-design1">
										<div class="p1">Website Dev Co. LLC</div>
										<div class="p2"><i class="fa fa-circle-o"></i></div>
										<div class="p3">
											<div class="list-title"><span>Adam Goldsmith</span> / <span class="list-sub-title">CEO</span></div>
											<div class="list-body">
												<span><i class="fa fa-inbox"></i> adamfgoldsmith@gmail.com</span><br/>
												 <span><i class="fa fa-phone"></i> 317.371.7870 </span><br />
											</div>
										</div>
									</div> 
									<div class="list-item-design1">
										<div class="p1">Daffodil International Academy</div>
										<div class="p2"><i class="fa fa-circle-o"></i></div>
										<div class="p3">
											<div class="list-title"><span>Md. Siplu Sinha</span> / <span class="list-sub-title">Lecturer</span></div>
											<div class="list-body">
												<span><i class="fa fa-inbox"></i> siplusinha@daffodil.ac</span><br /> 
												<span><i class="fa fa-phone"></i> +88 01740 641 022 </span><br />
											</div>
										</div>
									</div>


									
								</div>
							</section>

							<section >
								<div class="heading"><div class="icon"><i class="fa fa-bolt"></i></div>Skills</div>
								<div class="sec-body">
									<div class="list-item-design2">
										<ul>
											@foreach ($skills as $skill)
											<li><span >{{$skill->name}}</span> 
												<span class="score"> 
													@for ($i = 0; $i <= 10; $i++)
													@if ($i < $skill->rank)
													<i class="fa fa-circle"></i>
													@else
													<i class="fa fa-circle-o"></i>
													@endif

													@endfor
												</span> 
											</li>

											@endforeach
										</ul>

									</div>

								</div>
							</section>
						</div>


					</div>
				</div>
<div class="col-md-12">
<input type="button" class="btn btn-primary pull-right " onclick="printContent('cv-wrapper')" value="Print CV " />
</div>
							
				<!-- /.box -->

			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection