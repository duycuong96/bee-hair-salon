
@extends('customer::layouts.master')
@section('title','BeeHair')
@section('content')

<!-- banner -->
<section class="inner-page-banner" id="home">
</section>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb mb-0">
		<li class="breadcrumb-item">
			<a href="index.html">Trang chủ</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
	</ol>
</div>
<!-- //page details -->
<div class="student-profile py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <h4 class="text-center pt-3">User Name</h4>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="/tai-khoan/cap-nhat">Cập nhật tài khoản</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/doi-mat-khau">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/so-du">Số dư</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/thong-bao">Thông báo</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/lich-su&danh-gia">Lịch sử đặt lịch & Đánh giá</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <form>
                    <div class="content-wrap">


                        <div id="page-container">
                            <h4 class="text-center">Thông báo</h4>
                            <div id="dialog-container">
                                <div class="dialog-box">
                                    <div class="background-blur"></div>
                                    <div class="header">
                                    <div class="background-blur"></div>
                                    <div class="contents">
                                    <div class="left">
                                        iMessage
                                    </div>
                                    <div class="right">
                                        Sun 1:20 pm
                                    </div>
                                    </div>
                                    </div>
                                    <div class="contents main-content">
                                    <strong>
                                        Nathan D
                                    </strong>
                                    <br/>
                                    Yeah, that's sound with me. I'll see you in 10
                                    </div>
                                </div>

                                <div class="dialog-box">
                                    <div class="background-blur"></div>
                                    <div class="header">
                                    <div class="background-blur"></div>
                                    <div class="contents">
                                    <div class="left">
                                        iMessage
                                    </div>
                                    <div class="right">
                                        Sun 1:23 pm
                                    </div>
                                    </div>
                                    </div>
                                    <div class="contents main-content">
                                    <strong>
                                        Em
                                    </strong>
                                    <br/>
                                    Okay xx
                                    </div>
                                </div>

                                <div class="dialog-box">
                                    <div class="background-blur"></div>
                                    <div class="header">
                                    <div class="background-blur"></div>
                                    <div class="contents">
                                    <div class="left">
                                        Facebook
                                    </div>
                                    <div class="right">
                                        Sun 1:39 pm
                                    </div>
                                    </div>
                                    </div>
                                    <div class="contents main-content">
                                    <strong>
                                        Notification
                                    </strong>
                                    <br/>
                                    Your friend Ethan mentioned you in a comment.
                                    </div>
                                </div>

                                <div class="dialog-box">
                                    <div class="background-blur"></div>
                                    <div class="header">
                                    <div class="background-blur"></div>
                                    <div class="contents">
                                    <div class="left">
                                        Sky News
                                    </div>
                                    <div class="right">
                                        Sun 1:42 pm
                                    </div>
                                    </div>
                                    </div>
                                    <div class="contents main-content">
                                    <strong>
                                        Breaking News
                                    </strong>
                                    <br/>
                                    An explosion in London has left over 20 people fighting for their lives.
                                    </div>
                                </div>

                            </div>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Trước</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                                </ul>
                            </div>




                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>







@endsection
