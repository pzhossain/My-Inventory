
@extends('layouts.sidenav_layout')

@section('title', 'Product')

@section('content')

@include('components.product.product-list')
@include('components.product.product-create')
@include('components.product.product-update')
@include('components.customer.customer-delete')

@endsection