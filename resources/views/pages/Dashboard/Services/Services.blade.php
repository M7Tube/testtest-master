@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Services') }}</title>
@endsection
@section('body')
    @livewire('dashboard.services.services')
@endsection
