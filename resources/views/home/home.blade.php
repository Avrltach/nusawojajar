@extends('layouts.app')

@section('title', 'Home - NU-Sawojajar')

@section('content')
    @include('home/section/header')
    @include('home/section/berita')
    @include('home/section/image')
    @include('home/section/keuangan')
@endsection
