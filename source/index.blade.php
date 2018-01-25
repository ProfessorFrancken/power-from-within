@extends('_layouts.layout')

@section('main-content')
    @include("_content._about-francken")

    @include("_content._speakers")
    @include("_layouts._program")
    @include("_content._register")
    @include("_content._committee")
@endsection

@section('header-image')
    @include(
        "_layouts.header._registration-cta",
        ['header_image' => $page->header_image]
    )
@endsection
