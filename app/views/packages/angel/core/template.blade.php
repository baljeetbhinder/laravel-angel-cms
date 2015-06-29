<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	@yield('meta')

	<title>{{ $settings['title']['value'] }} | @yield('title')</title>

	{{ HTML::style('packages/angel/core/js/jquery/fancybox/jquery.fancybox.css') }}
	{{ HTML::style('packages/angel/core/bootstrap/bootstrap.min.css') }}
	<style>
		body {
			background:#CCC;
		}
		#masterContainer {
			min-height: 700px;
			background:#FFF;
			box-shadow:1px 1px 6px rgba(0, 0, 0, 0.8);
			padding-bottom:30px;
			position: relative;
		}
		@media(min-width:768px) {
        	#masterContainer {
        		margin-top:15px;
        		margin-bottom:15px;
        	}
        }
        #footer{
        	border-top: solid thin #ddd;
        	margin-top: 50px;
        	position: absolute;
        	bottom: 0;
        	width: 98%;
        }
        #footer li{
        	display: inline;
        	list-style: none;
        	float: right;
        	margin: 10px;
        }
	</style>
	@yield('css')
</head>
<body>
<div id="masterContainer" class="container">
	@include('core::header')
	@include('core::alerts')
	@yield('content')
	<section id='footer'>
		{{ $Menu::find(3)->display() }}
	</section>
</div><!-- #masterContainer -->
{{ HTML::script('packages/angel/core/js/jquery/jquery.min.js') }}
{{ HTML::script('packages/angel/core/js/jquery/fancybox/jquery.fancybox.pack.js') }}
{{ HTML::script('packages/angel/core/bootstrap/bootstrap.min.js') }}
<script>
	var config = {
		base_url:  '{{ url('/') }}/',
		admin_url: '{{ admin_url('/') }}/'
	};
	$(function() {
		$('.fancybox').fancybox();

		// Make sure if we're in a nested menu that the parent menu has the active class as well.
		$('#mainMenu').find('li.active').parent().closest('li').addClass('active');
	});
</script>
@yield('js')
</body>
</html>