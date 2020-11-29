@extends('template.base')

@section('content')
	@include('template.section.home')

    <!-- About Us Section
    ================================================== -->
    @include('template.section.about')

    <!--  Blog Section
    ================================================== -->
   @include('template.section.blog')
    <!-- Contact Section
    ================================================== -->
    @include('template.section.contact')
@endsection