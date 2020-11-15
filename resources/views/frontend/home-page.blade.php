@extends('frontend.layouts.front-layout')

@section('page-content')
    @include('frontend.page-sections.hero')

    @include('frontend.page-sections.services')

    @include('frontend.page-sections.portfolio')

    @include('frontend.page-sections.clients')

    @include('frontend.page-sections.ceo-says')

    @include('frontend.page-sections.team')

    @include('frontend.page-sections.cta')
@endsection
