@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Create Service') }}</title>
@endsection
@section('body')
    @livewire('dashboard.services.create-service')
@endsection
