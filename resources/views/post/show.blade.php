@extends('layout.app')

@section('page_title', 'Detail Post Page')

@section('content')

<x-post :post="$post" />

@endsection