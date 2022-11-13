@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Create Skill') }}</title>
@endsection
@section('body')
    @livewire('dashboard.skills.create-skill')
@endsection
