@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Newsletter Emails') }}</title>
@endsection
@section('body')
    @livewire('dashboard.newsletter-emails.newsletter-emails')
@endsection
