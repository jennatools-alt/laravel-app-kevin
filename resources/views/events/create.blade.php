@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Calender Events</h1>
@stop

@section('content')
<form method="post" action="{{ route('event.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="starttime" type="datetime-local" label="Start" />
    <x-adminlte-input name="endtime" type="datetime-local" label="Finish" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop