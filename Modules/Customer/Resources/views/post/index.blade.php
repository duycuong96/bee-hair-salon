@extends('customer::layouts.master')

@section('title', 'Bài viết')

@section('content')

    <section class="inner-page-banner" id="home">
    </section>
    <!-- //banner -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>

    <div class="container py-lg-5 px-lg-5">
        <div class="blog-inner-grids row">
            <div class="mag-post-left-hny col-lg-8">
                <div class="mag-hny-content">
                    @include('customer::post.article')
                </div>
                @include('customer::post.pagination')
            </div>
            <div class="mag-post-right-hny col-lg-4">
                @include('customer::post.aside')
            </div>
        </div>
    </div>

@endsection


