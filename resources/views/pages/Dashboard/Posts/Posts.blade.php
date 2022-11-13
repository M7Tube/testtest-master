@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Posts') }}</title>
@endsection
@section('body')
    @livewire('dashboard.posts.posts')
@endsection
