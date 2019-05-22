<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ \App::getLocale() }}" class="no-js">
<!--<![endif]-->
@section('htmlheader')
    @include('pub_theme::layouts.partials.htmlheader')
@show
<body class="{{ isset($body_class)?$body_class:'' }}" >
	@yield('body')

	@section('scripts')
    	@include('pub_theme::layouts.partials.scripts')
	@show
	
</body>
</html>