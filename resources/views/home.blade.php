@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    @include('partials.hero')
    {{-- About Us Section --}}
    @include('partials.about')
    {{-- Services Section --}}
    @include('partials.services')
    {{-- Customer Reviews Section --}}
    @include('partials.reviews')
    {{-- Blog Section --}}
    @include('partials.blog-list')
    {{-- Contact Section --}}
    @include('partials.contact')
@endsection
