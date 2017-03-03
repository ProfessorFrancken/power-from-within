@extends('_layouts.layout')

@section('main-content')
    @include("_layouts._about-francken")

    @include("_layouts._speakers")
    @include("_layouts._program")
    @include("_layouts._register")
    @include("_layouts._committee")
@endsection

@section('header-image')
    @include("_layouts.header._registration-cta")
@endsection
