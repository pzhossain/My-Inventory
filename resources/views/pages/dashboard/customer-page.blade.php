

@extends('layouts.sidenav_layout')

@section('title', 'Customer Page')

@section('content')

@include('components.customer.customer-list')
@include('components.customer.customer-create')
@include('components.customer.customer-create')
@include('components.customer.customer-delete')

@endsection