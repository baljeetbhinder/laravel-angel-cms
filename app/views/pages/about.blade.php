@extends('core::template')

@section('title', $page->title)

@section('meta')
	{{ $page->meta_html() }}
@stop

@section('css')
	@if ($page->css)
		<style>
			{{ $page->css }}
		</style>
	@endif
@stop

@section('js')
	@if ($page->js)
		<script>
			{{ $page->js }}
		</script>
	@endif
@stop

@section('content')
	<div class="row">
		
		<div class="col-md-12">
			<h2>Custom About Page</h2>
			<hr>
			{{ $page->html }}
		</div>

	</div>
@stop