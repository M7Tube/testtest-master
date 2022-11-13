@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Create Post') }}</title>
@endsection
@section('body')
    @livewire('dashboard.posts.create-post')
@endsection
