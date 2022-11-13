@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Newsletter Emails') }}</title>
@endsection
@section('body')
    @livewire('dashboard.newsletter-emails.edit-newsletter-emails')
@endsection
