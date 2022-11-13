@extends('layouts.singleAllPageLayout')
@section('title', __('Blog'))
@section('body')
    @livewire('post.all-post')
@endsection
