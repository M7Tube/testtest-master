@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Skill') }}</title>
@endsection
@section('body')
    @livewire('dashboard.skills.edit-skill')
@endsection
