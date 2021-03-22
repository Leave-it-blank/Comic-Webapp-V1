@extends('layouts.admin')


@section('content')
    <div aria-label="breadcrumb" style=" text-align: right;">
        <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;">
            <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="/admin/features">{{ __('Features') }}</a></li>
            <li class="breadcrumb-item"><a href="/admin/features/carousel">{{ __('Carousel') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('view') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $carousels->title }}</li>
        </ol>
    </div>








@endsection
