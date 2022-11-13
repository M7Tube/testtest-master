@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Post') }}</title>
@endsection
@section('body')
    @livewire('dashboard.posts.edit-post')
@endsection
