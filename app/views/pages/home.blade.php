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
		
		<div class="col-md-6">
			{{ $page->html }}
		</div>

		<div class="col-md-6">
			{{ $page->modules[0]->html }}	
		</div>
	</div>
<?php
	$Carousel = App::make('Carousel');
	$carousel = $Carousel::find(1);
?>
			<h1>Carousel Section:</h1>
			<hr>
			@include('carousels::render')
@stop