
<div style="position: fixed; right: 64px; min-width: 325px; top: 51px; z-index: 100; /* display: none; */">

	<div class="flash-message fadeInRight">
		@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))

			<p class=" alert alert-{{ $msg }} fade in notification_item">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
		@endforeach

		@if (count($errors))
			@foreach($errors->all() as $error)
				<p class=" alert alert-danger fade in notification_item">{{ $error }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endforeach

		@endif
		
	</div> <!-- end .flash-message -->
</div>


