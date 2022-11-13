@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Client Messages') }}</title>
@endsection
@section('body')
    @livewire('dashboard.messages.messages')
@endsection
