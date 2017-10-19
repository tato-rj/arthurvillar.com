@extends($root.'_core')

@section('turni')
link-active
@endsection

@section('content')

<section class="container">
    <div class="page-header hidden-lg-up">
        <p>Orari e Turni</p>
    </div>
	<div class="row">
		<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
			<div class="jumbotron bg-faded">
				<h5 class="text-danger"><i class="fa fa-calendar" aria-hidden="true"></i><strong>Turni {{ \Carbon\Carbon::now()->year }} (dalle 8:45 alle 8:45)</strong></h5>
				<ul class="no-bullets mb-0 p-0 turni-list">
					@foreach ($turniSchedule as $turni)
					<li>
						@if($turni['in_turni'])
						<span class="text-success after-msg"><strong>
						@else
						<span class="text-muted">
						@endif
							Dal {{ $turni['start']->day }} {{ $turni['month_start'] }} al {{ $turni['end']->day }} {{ $turni['month_end'] }}
						</span></strong>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mb-4">
			<ul class="list-group">
				<li class="list-group-item bg-primary text-white p-1 pl-2">
					<i class="fa fa-sun-o" aria-hidden="true"></i><strong>Orario Estivo</strong>
				</li>
				<li class="list-group-item">
					<table class="table">
						<thead>
							<tr>
								<th>Giorno</th>
								<th>Matina</th>
								<th>Pomeriggio</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>DAL LUNEDì AL VENERDì</td>
								<td>{{ $summerSchedule['matina']['non-sabato'] }}</td>
								<td>{{ $summerSchedule['pomeriggio']['non-sabato'] }}</td>
							</tr>
							<tr>
								<td>SABATO</td>
								<td>{{ $summerSchedule['matina']['sabato'] }}</td>
								<td><i>{{ $summerSchedule['pomeriggio']['sabato'] }}</i></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li class="list-group-item bg-primary text-white p-1 pl-2">
					<i class="fa fa-snowflake-o" aria-hidden="true"></i><strong>Orario Invernale</strong>
				</li>
				<li class="list-group-item">
					<table class="table">
						<thead>
							<tr>
								<th>Giorno</th>
								<th>Matina</th>
								<th>Pomeriggio</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>DAL LUNEDì AL VENERDì</td>
								<td>{{ $winterSchedule['matina']['non-sabato'] }}</td>
								<td>{{ $winterSchedule['pomeriggio']['non-sabato'] }}</td>
							</tr>
							<tr>
								<td>SABATO</td>
								<td>{{ $winterSchedule['matina']['sabato'] }}</td>
								<td><i>{{ $winterSchedule['pomeriggio']['sabato'] }}</i></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>	
		</div>
	</div>

</section>

@endsection