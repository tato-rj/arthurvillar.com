<div class="col-3">
	<ul class="list-flat">
		@if(!empty($phpFramework))
		<li class="text-grey"><strong>PHP framework</strong></li>
		<li class="mb-2"><strong>{{$phpFramework}}</strong></li>
		@endif
		@if(!empty($cssFramework))
		<li class="text-grey"><strong>CSS framework</strong></li>
		<li class="mb-2"><strong>{{$cssFramework}}</strong></li>
		@endif
		@if(!empty($jsFramework))
		<li class="text-grey"><strong>JS framework</strong></li>
		<li class="mb-2"><strong>{{$jsFramework}}</strong></li>
		@endif
		@if(!empty($platform))
		<li class="text-grey"><strong>Platform</strong></li>
		<li class="mb-2"><strong>{{$platform}}</strong></li>
		@endif
		@if(!empty($language))
		<li class="text-grey"><strong>Language</strong></li>
		<li class="mb-2"><strong>{{$language}}</strong></li>
		@endif
		@if(!empty($database))
		<li class="text-grey"><strong>Database</strong></li>
		<li class="mb-2"><strong>{{$database}}</strong></li>
		@endif
		@if(!empty($payment))
		<li class="text-grey"><strong>Online payments</strong></li>
		<li class="mb-2"><strong>{{$payment}}</strong></li>
		@endif
		@if(!empty($server))
		<li class="text-grey"><strong>Web server</strong></li>
		<li class="mb-2"><strong>{{$server}}</strong></li>
		@endif
	</ul>
</div>