<aside>
    <div class="blog-sidebar-bg">
        <div class="side-bar-hny-recent mb-5">
            <h4 class="side-title">Tìm kiếm:</h4>
                <form action="{{ route('customer.post.list') }}" method="GET">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="category_id" value="{{  Request::segment(2) }}">
                        <input type="text" class="form-control" name="title" value="{{ request()->title }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning text-white form-control">Tìm kiếm</button>
                    </div>
                </form>
            <div class="mag-small-post">
            </div>
        </div>
        <div class="side-bar-hny-recent mb-5">
            <h4 class="side-title">Chuyên mục <span>bài viết</span></h4>
            <div class="mag-small-post">
                <ul class="list-group single">
                    @foreach ($dataCategories as $row)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('customer.post.list') }}?category_id={{  $row->id }}">{{ $row->name }}</a>
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="side-bar-hny-recent mb-5">
            <h4 class="side-title">Popular <span>Posts </span></h4>
            @foreach ($dataPostHots as $row)
                <div class="mag-small-post">
                    <div class="post-item-grid row mb-4">
                        <div class="mag-post-thumb col-4">
                            <a href="{{ route('customer.post.detail', $row->slug) }}"><img src="{{ asset('client/images/blog2.jpg') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="mag-post-details col-8">
                            <div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
                                        href="#" class="author-name">Admin</a> </span>
                                <span class="author-date">{{ $row->created_at }}</span>
                            </div>
                            <h4 class="post-title">
                                <a href="{{ route('customer.post.detail', $row->slug) }}">{{ $row->title }}</a> </h4>
                        </div>
                    </div>
                </div>
            @endforeach

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
