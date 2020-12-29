<!-- 位于 resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

<p>-----------------------------</p>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
{{--    @parent--}}

    <p>This is my body content.</p>
@endsection

<x-alert type="1111111" :message="3333333333333333"/>
