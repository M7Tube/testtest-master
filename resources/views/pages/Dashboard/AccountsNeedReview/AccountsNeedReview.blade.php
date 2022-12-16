@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Accounts Need Review') }}</title>
@endsection
@section('body')
    @livewire('dashboard.accounts-need-review.accounts-need-review')
@endsection
