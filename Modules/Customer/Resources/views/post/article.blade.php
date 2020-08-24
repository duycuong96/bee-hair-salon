<!-- // article post -->
<div class="blog-pt-grid-content">
    @foreach ($dataPosts as $row)
        <div class="maghny-gd-1 blog-pt-grid mb-5">
            <a href="blog-single.html"><img class="img-fluid mt-2"
                    src="{{ asset('client/images/blog1.jpg') }}" alt=""></a>
            <div class="box-content">
                <h5 class="blog-title">
                    <a href="{{ route('customer.post.detail', $row->slug) }}">
                        {{ $row->title }}
                    </a>
                </h5>
                <div class="entry-meta d-flex">
                    <span class="entry-author">By <a href="#">Admin</a> </span>
                    <span class="meta-separator">|</span>
                    <a href="#">{{ $row->created_at }}</a>
                    <span class="meta-separator">|</span>
                    <a href="#"> 0 comment</a>
                </div>

                <p>{!! nl2br($row->content) !!}</p>
                <a href="{{ route('customer.post.detail', $row->slug) }}" class="read-more btn ">Đọc bài viết</a>
            </div>
        </div>
    @endforeach
</div>
<!-- // article post-->
