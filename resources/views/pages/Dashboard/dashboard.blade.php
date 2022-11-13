@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('lang.Dashboard') }}</title>
@endsection
@section('body')
    @livewire('dashboard.dashboard')
@endsection
