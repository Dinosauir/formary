<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('formary::layouts.components.head')
<body>
<div id="app">
    @include('formary::layouts.components.header')

    @yield('content')
</div>
@include('formary::layouts.components.footer')

<script src="{{ asset('vendor/abacuswonder/formary/js/formary.js') }}"></script>


</body>
</html>
