@extends('layouts.master')

@section('content')
@if(session('AdminLvl') == NULL )
<?php  header( 'Location: /login' ) ;?>
@endif
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default panel-border panel-primary">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead class="b">
						<td>{{trans('main.time')}}</td>
						<td>{{trans('main.name')}}</td>
						<td>{{trans('main.username')}}</td>						
						<td>{{trans('main.bonus')}}</td>
					</thead>
					<tbody>
						@foreach($referrals as $output)
						<tr>
							<td title="{{$output->created_at}}">{{$output->created_at}} <!-- ({{Carbon\Carbon::parse($output->created_at)->diffForHumans()}}) --></td>
							<td>{{ucwords(strtolower($output->name))}}</td>
							<td>{{$output->username}}</td>
							<td>{{round($output->amt,8)}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@stop

@section('docready')
<script type="text/javascript">
$(document).ready(function($) {
	//
});
</script>
@stop