@if (Auth::guard('web')->check())
<p class="text-success">you are logged in as a 
	<strong>USER</strong>
</p>
@else
<p class="text-danger">
 @include('auth\login')


</p>

@endif

@if (Auth::guard('admine')->check())
<p class="text-success">you are logged in as a 
	<strong>ADMIN</strong>
</p>
@else
<p class="text-danger">
 @include('auth\login')


</p>

@endif
