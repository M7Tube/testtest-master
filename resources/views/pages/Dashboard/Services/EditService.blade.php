@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Service') }}</title>
@endsection
@section('body')
    @livewire('dashboard.services.edit-service')
@endsection
