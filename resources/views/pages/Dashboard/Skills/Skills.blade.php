@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Skills') }}</title>
@endsection
@section('body')
    @livewire('dashboard.skills.skills')
@endsection
