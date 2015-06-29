@section('css')
	{{ HTML::style('packages/angel/carousels/js/owl-carousel/owl.carousel.css') }}
	{{ HTML::style('packages/angel/carousels/js/owl-carousel/owl.theme.css') }}
	{{ HTML::style('packages/angel/carousels/js/owl-carousel/owl.transitions.css') }}
@append

@section('js')
	{{ HTML::script('packages/angel/carousels/js/owl-carousel/owl.carousel.min.js') }}
	<script>
		$(function() {
			$('#carousel-{{ $carousel->slug }}').owlCarousel({
				items           : 1,
			  	navigation : true,
				singleItem      : true,
				autoPlay        : {{ $carousel->auto_play == 0 ? 'false' : $carousel->auto_play }},
				transitionStyle : "{{ $carousel->transition_style }}"
			});
		});
	</script>
@append
<style type="text/css">
	


 .slide {
        height:150px; 
    }


</style>
<div id="carousel-{{ $carousel->slug }}" class="owl-carousel">
	@foreach ($carousel->slides as $slide)
	<div class="slide">
<!-- 		{{ $slide->html }}
 -->		<img src="{{$slide->image}}" />
	</div>
	@endforeach
</div>

