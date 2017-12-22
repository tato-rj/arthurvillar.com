@component('_PROJECTS/partyapp/components/partials/modals/layout')
@slot('id')
report-box
@endslot
@slot('title')
Anonymous report
@endslot
<div class="modal-body">
	<p><small>We take the safety of our users very seriously. We will take every action to follow up with you anonymous report. You can also <a href="#" class="link-blue">click here</a> to learn more about our regulations.</small></p>
	<div>
		<button class="btn btn-outline-danger btn-block">Innapropriate content</button>
		<button class="btn btn-outline-danger btn-block">Dishonest or hateful content</button>
		<button class="btn btn-outline-danger btn-block">Fake content</button>
		<p class="m-0 mt-3 text-center"></p>
	</div>
</div>
@endcomponent