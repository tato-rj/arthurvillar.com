@component('_PROJECTS/partyapp/components/partials/modals/layout')
@slot('id')
login-box
@endslot
@slot('title')
Log In
@endslot
<div class="modal-body">
	<form>
		<div class="form-group">
			<input class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" 
			type="text" 
			name="email" 
			placeholder="E-mail">
		</div>
		<div class="form-group">
			<input class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" 
			type="password" 
			name="password" 
			placeholder="Password">
		</div>
		<div class="d-flex flex-wrap justify-content-between align-items-center">
			<label class="custom-control custom-checkbox d-flex align-items-center m-0">
				<input type="checkbox" class="custom-control-input">
				<span class="custom-control-indicator"></span>
				<small class="custom-control-description">Remember me</small>
			</label>
			<small>
				<a href="">Forgot password?</a>
			</small>
		</div>
	</div>
	<div class="modal-footer flex-column">
		<button type="button" class="btn btn-block btn-pink rounded-0">Continue<i class="fa fa-angle-right ml-2" aria-hidden="true"></i></button>
	</form>
</div>
<div class="modal-body">
	<div class="divider">
		<span>OR</span>
	</div>
	<div class="d-flex align-items-center flex-wrap">
		<button class="btn btn-block m-1 rounded-0 btn-facebook">Log in with Facebook</button>
		<button class="btn btn-block m-1 rounded-0 btn-twitter">Log in with Twitter</button>
	</div>
</div>
@endcomponent
