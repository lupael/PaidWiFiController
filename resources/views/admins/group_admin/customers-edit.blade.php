@extends ('laraview.layouts.sideNavLayout')

@section('title')
customer Edit
@endsection

@section('pageCss')
@endsection

@section('activeLink')
@php
$active_menu = '5';
$active_link = '1';
@endphp
@endsection

@section('sidebar')
@include('admins.group_admin.sidebar')
@endsection

@include('admins.components.customer-edit')
