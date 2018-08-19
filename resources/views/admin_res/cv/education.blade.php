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
    // Replace the <texteducation id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.texteducation').wysihtml5()
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
			Education
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
							@isset ($education)Update @else Add New @endisset Education</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="
					@isset ($education){{route('education.update',$education->id)}}@else{{route('education.store')}}@endisset" method="post">
					{{ csrf_field()}}

					@isset ($education)
					{{method_field('put')}}
					@endisset
					<div class="box-body">

						<div class="col-lg-10 col-lg-offset-2 ">
							
							
							<div class="col-lg-8">
								<div class="form-group">
									<label for="instituteInputText">Institute Name</label>
									<input type="text" required="required" class="form-control" value="@isset ($education){{$education->institute}}@else{{old('institute')}}@endisset" name="institute" id="instituteInputText" placeholder="Enter Institute Name">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="courseInputText">Course</label>
									<input type="text" required="required" class="form-control" value="@isset ($education){{$education->course}}@else{{old('course')}}@endisset" name="course" id="courseInputText" placeholder="Enter Course">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="durationInputText">Duration</label>
									<input type="text" required="required" class="form-control" value="@isset ($education){{$education->duration}}@else{{old('duration')}}@endisset" name="duration" id="durationInputText" placeholder="Enter Duration">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group">
									<label for="typeInputText">Type</label>
									<input type="text" required="required" class="form-control" value="@isset ($education){{$education->type}}@else{{old('type')}}@endisset" name="type" id="typeInputText" placeholder="Enter Type">
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group">
									<label for="resultInputText">Result</label>
									<input type="text" required="required" class="form-control" value="@isset ($education){{$education->result}}@else{{old('result')}}@endisset" name="result" id="resultInputText" placeholder="Enter Result">
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

					<h3 class="box-title">All Educations</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Type</th>
								<th>Course</th>
								<th>Institute</th>
								<th>Duration</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($educations as $education)
							<tr>
								<td>{{$loop->index+1}}</td>
								<td>{{$education->type}}</td>
								<td>{{$education->course}}</td>
								<td>{{$education->institute}}</td>
								<td>{{$education->duration}}</td>	
								<td><a href="{{ route('education.edit',$education->id) }}" class="text-info"> <span class=" glyphicon glyphicon-edit"></span></a></td>
								<td>
									<form id="delete-form-{{$education->id}}" action="{{ route('education.destroy',$education->id) }}"  method="post">
										{{csrf_field()}}
										{{ method_field('DELETE')}}
									</form>
									<a href="#" onclick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{$education->id}}').submit();}else{event.preventDefault();}" 
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
								<th>Type</th>
								<th>Course</th>
								<th>Institute</th>
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