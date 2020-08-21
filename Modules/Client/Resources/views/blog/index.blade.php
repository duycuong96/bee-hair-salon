@extends('client::layouts.master')
@section('title', 'BeeHair')
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
                    <!--/set-1-->
                    <div class="blog-pt-grid-content">
                        <div class="maghny-gd-1 blog-pt-grid mb-5">
                            <a href="blog-single.html"><img class="img-fluid mt-2"
                                    src="{{ asset('client/images/blog1.jpg') }}" alt=""></a>
                            <div class="box-content">
                                <h5 class="blog-title">
                                    <a href="blog-single.html">Standard post with a single
                                        image,There are many variations that focuses on presenting.
                                    </a>
                                </h5>
                                <div class="entry-meta d-flex">
                                    <span class="entry-author">By <a href="#">Admin</a> </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">Jan 22, 2020</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#"> 0 comment</a>
                                </div>

                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis
                                    lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
                                    mattis.</p>
                                <a href="blog-single.html" class="read-more btn ">Read More</a>
                            </div>
                        </div>

                        <div class="maghny-gd-1 blog-pt-grid mb-5">
                            <a href="blog-single.html"><img class="img-fluid mt-2"
                                    src="{{ asset('client/images/blog1.jpg') }}" alt=""></a>
                            <div class="box-content">
                                <h5 class="blog-title">
                                    <a href="blog-single.html">Standard post with a single
                                        image,There are many variations that focuses on presenting.
                                    </a>
                                </h5>
                                <div class="entry-meta d-flex">
                                    <span class="entry-author">By <a href="#">Admin</a> </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">Jan 22, 2020</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#"> 0 comment</a>
                                </div>

                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis
                                    lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
                                    mattis.</p>
                                <a href="blog-single.html" class="read-more btn ">Read More</a>
                            </div>
                        </div>

                        <div class="maghny-gd-1 blog-pt-grid mb-5">
                            <a href="blog-single.html"><img class="img-fluid mt-2"
                                    src="{{ asset('client/images/blog1.jpg') }}" alt=""></a>
                            <div class="box-content">
                                <h5 class="blog-title">
                                    <a href="blog-single.html">Standard post with a single
                                        image,There are many variations that focuses on presenting.
                                    </a>
                                </h5>
                                <div class="entry-meta d-flex">
                                    <span class="entry-author">By <a href="#">Admin</a> </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">Jan 22, 2020</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#"> 0 comment</a>
                                </div>

                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis
                                    lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
                                    mattis.</p>
                                <a href="blog-single.html" class="read-more btn ">Read More</a>
                            </div>
                        </div>




                    </div>
                    <!--//set-1-->

                </div>
                <!--//mag-hny-content-4-->
            </div>
            <div class="mag-post-right-hny col-lg-4">
                <aside>
                    <div class="blog-sidebar-bg">

                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="side-title">Our <span>Categories</span></h4>
                            <div class="mag-small-post">
                                <ul class="list-group single">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Cras justo odio</a>
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Dapibus ac facilisis in</a>
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Morbi leo risus</a>
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Cras justo odio</a>
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="side-title">Popular <span>Posts </span></h4>
                            <div class="mag-small-post">
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-4">
                                        <a href="blog-single.html"><img src="{{ asset('client/images/blog2.jpg') }}"
                                                class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-8">
                                        <div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
                                                    href="#" class="author-name">Admin</a> </span>
                                            <span class="author-date">Feb 5, 2020</span>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="blog-single.html">There are many variations presenting.</a> </h4>
                                    </div>
                                </div>

                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-4">
                                        <a href="blog-single.html"><img src="{{ asset('client/images/blog2.jpg') }}"
                                                class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-8">
                                        <div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
                                                    href="#" class="author-name">Admin</a> </span>
                                            <span class="author-date">Feb 5, 2020</span>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="blog-single.html">There are many variations presenting.</a> </h4>
                                    </div>
                                </div>

                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-4">
                                        <a href="blog-single.html"><img src="{{ asset('client/images/blog2.jpg') }}"
                                                class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-8">
                                        <div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
                                                    href="#" class="author-name">Admin</a> </span>
                                            <span class="author-date">Feb 5, 2020</span>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="blog-single.html">There are many variations presenting.</a> </h4>
                                    </div>
                                </div>

                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-4">
                                        <a href="blog-single.html"><img src="{{ asset('client/images/blog2.jpg') }}"
                                                class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-8">
                                        <div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
                                                    href="#" class="author-name">Admin</a> </span>
                                            <span class="author-date">Feb 5, 2020</span>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="blog-single.html">There are many variations presenting.</a> </h4>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="side-title">Browse <span>Tags </span></h4>
                            <div class="tags-w3l">
                                <a href="#" class="btn">Fashion</a>
                                <a href="#" class="btn">Beauty</a>
                                <a href="#" class="btn">Shoes</a>
                                <a href="#" class="btn">Heels</a>
                                <a href="#" class="btn">Shirts</a>
                                <a href="#" class="btn">Tops</a>
                                <a href="#" class="btn">Style</a>
                                <a href="#" class="btn">Cloths</a>
                                <a href="#" class="btn">Men</a>
                                <a href="#" class="btn">Women</a>
                            </div>
                        </div>

                        <div class="side-bar-hny-recent mb-5">
                            <div class="mag-small-post">
                                <div class="blog-sidehny-left-2">
                                    <h4>
                                        Men's
                                        Fashion
                                        <br>50% Off</h4>
                                    <p>Online &amp; in-store</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <!--/pagination-->
        <div class="pagination mt-lg-0 mt-4">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--//pagination-->

    </div>

@endsection
