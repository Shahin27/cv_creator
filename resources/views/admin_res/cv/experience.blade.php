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
    // Replace the <textexperience id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textexperience').wysihtml5()
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
			Experience
			<small><!-- sub title --></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
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
							@isset ($experience)Update @else Add New @endisset Experience</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="
					@isset ($experience){{route('experience.update',$experience->id)}}@else{{route('experience.store')}}@endisset" method="post">
					{{ csrf_field()}}

					@isset ($experience)
					{{method_field('put')}}
					@endisset
					<div class="box-body">

						<div class="col-lg-10 col-lg-offset-2 ">
							
							
							<div class="col-lg-8">
								<div class="form-group">
									<label for="company_nameInputText">Compnay Name</label>
									<input type="text" required="required" class="form-control" value="@isset ($experience){{$experience->company_name}}@else{{old('company_name')}}@endisset" name="company_name" id="company_nameInputText" placeholder="Enter Compnay Name">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="positionInputText">Position</label>
									<input type="text" required="required" class="form-control" value="@isset ($experience){{$experience->position}}@else{{old('position')}}@endisset" name="position" id="positionInputText" placeholder="Enter Position">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="durationInputText">Duration</label>
									<input type="text" required="required" class="form-control" value="@isset ($experience){{$experience->duration}}@else{{old('duration')}}@endisset" name="duration" id="durationInputText" placeholder="Enter Duration">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="detailsInputText">Details</label>
									<textarea required="required" class="form-control"  name="details" id="detailsInputText" placeholder="Enter Details">@isset ($experience){{$experience->details}}@else{{old('details')}}@endisset</textarea> 
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
			<!-- /.box-primary -->
			<!-- /.box -->

			<div class="box">
				<div class="box-header">

					<h3 class="box-title">All Experiences</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Position</th>
								<th>Compnay</th>
								<th>Duration</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($experiences as $experience)
							<tr>
								<td>{{$loop->index+1}}</td>
								<td>{{$experience->position}}</td>
								<td>{{$experience->company_name}}</td>
								<td>{{$experience->duration}}</td>	
								<td><a href="{{ route('experience.edit',$experience->id) }}" class="text-info"> <span class=" glyphicon glyphicon-edit"></span></a></td>
								<td>
									<form id="delete-form-{{$experience->id}}" action="{{ route('experience.destroy',$experience->id) }}"  method="post">
										{{csrf_field()}}
										{{ method_field('DELETE')}}
									</form>
									<a href="#" onclick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{$experience->id}}').submit();}else{event.preventDefault();}" 
										class="text-danger">
										<span class="  glyphicon glyphicon-trash"></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>S.No</th>
								<th>Position</th>
								<th>Compnay</th>
								<th>Duration</th>

								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
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