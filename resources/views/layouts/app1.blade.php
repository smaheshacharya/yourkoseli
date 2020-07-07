<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
{{-- HEADER link PART     --}}
@include('inc.header_link')
{{-- HEADER NAV PART     --}}
    @include('inc.header')

{{-- BODY PART --}}
@yield('body')

{{-- FOOTER PART --}}
    @include('inc.footer')

    </body>
    </html>
