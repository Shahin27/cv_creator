@extends("admin_res.app")

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('footer')

<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	})
</script>
@endsection

@section('footer')

<!-- CK Editor -->
<!--
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
 <script>
  $(function () {
    // Replace the <textcv id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textcv').wysihtml5()
  })
</script>
-->
@endsection

@section("main-content")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			CV
			<small><!-- sub title --></small>
		</h1>
		
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					@include('includes.messages')
					<div class="box-header with-border">
						<h3 class="box-title">
							Update CV</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{route('cv.update',$cv->id)}}" method="post">
					{{ csrf_field()}}

					{{method_field('put')}}
					<div class="box-body">

						<div class="col-lg-10 col-lg-offset-2 ">
							<div class="col-lg-8">
								<div class="form-group">
									<label for="nameInputText">Name</label>
									<input type="text" required="required" class="form-control" value="@isset ($cv){{$cv->name}}@else{{old('name')}}@endisset" name="name" id="nameInputText" placeholder="Enter Name">
								</div>
							</div>
							
							<div class="col-lg-8">
								<div class="form-group">
									<label for="positionInputText">Position</label>
									<input type="text" required="required" class="form-control" value="@isset ($cv){{$cv->position}}@else{{old('position')}}@endisset" name="position" id="positionInputText" placeholder="Enter Position">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="emailInputText">Email</label>
									<input type="email" required="required" class="form-control" value="@isset ($cv){{$cv->email}}@else{{old('email')}}@endisset" name="email" id="emailInputText" placeholder="Enter Email">
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group">
									<label for="contactInputText">Contact</label>
									<input type="text" required="required" class="form-control" value="@isset ($cv){{$cv->contact}}@else{{old('contact')}}@endisset" name="contact" id="contactInputText" placeholder="Enter Contact">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="addressInputText">Address</label>
									<input type="text"  class="form-control" value="@isset ($cv){{$cv->address}}@else{{old('address')}}@endisset" name="address" id="addressInputText" placeholder="Enter Address">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="aboutInputText">About</label>
									<textarea required="required" class="form-control" value="@isset ($cv){{$cv->about}}@else{{old('about')}}@endisset" name="about" id="aboutInputText" placeholder="Enter About"></textarea>
								</div>
							</div>

							<div class="col-lg-2">
								<div class="form-group">
									<label for="nameInputText" style="opacity: 0">submit</label><br/>
									<button type="submit" class="btn btn-primary">Submit
									</button>
								</div>
							</div>
						</div>

					</div>
				</form>
			</div>
			

		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection