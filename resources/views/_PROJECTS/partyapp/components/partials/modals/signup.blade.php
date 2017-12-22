@component('_PROJECTS/partyapp/components/partials/modals/layout')
@slot('id')
signup-box
@endslot
@slot('title')
Sign Up
@endslot
<div class="modal-body pb-0">
	<form>
		<div class="form-group">
			<input type="text" class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" name="first_name" placeholder="First name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" name="last_name" placeholder="Last name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" name="email" placeholder="E-mail">
		</div>
		<div class="form-group">
			<input type="password" class="form-control rounded-0 border-top-0 border-left-0 border-right-0 bg-light" name="password" placeholder="Password">
		</div>
	</div>
	<div class="modal-footer flex-column">
		<p><small>
			By clicking register you agree to our <a href="#">Terms and conditions</a>
		</small></p>
		<button type="button" class="btn btn-block btn-pink rounded-0">Sign me up<i class="fa fa-angle-right ml-2" aria-hidden="true"></i></button>
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
