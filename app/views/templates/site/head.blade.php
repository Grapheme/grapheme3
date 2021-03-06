<?
/**
 * TEMPLATE_IS_NOT_SETTABLE
 */
?>
@section('title'){{{ isset($page_title) ? $page_title : Config::get('app.default_page_title') }}}@stop
@section('description'){{{ isset($page_description) ? $page_description : Config::get('app.default_page_description') }}}@stop
@section('keywords'){{{ isset($page_keywords) ? $page_keywords : Config::get('app.default_page_keywords') }}}@stop
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
{{ HTML::stylemod(Config::get('site.theme_path').'/styles/vendor.css') }}
{{ HTML::stylemod(Config::get('site.theme_path').'/styles/main.css') }}
{{ HTML::scriptmod(Config::get('site.theme_path')."/scripts/vendor/modernizr.js") }}