<div class="col-lg-4">
    <div class="card" >
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <img id="image" src="{!! url('storage/'.Auth::user()->avatar) !!}" height="300px" width="300px" class="card-img-top mb-3" alt="...">

                <form action="{{ route('customer.tai-khoan.update', Auth::user()->id) }}"
                    method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    @method('put')
                    <input id="img" class="form-group" type="file" name="avatar" id="" onchange="changeImg(this)">
                    <button class="btn btn-primary" type="submit">Thay đổi ảnh đại diện</button>
                </form>
            </div>
        </div>
        <h4 class="text-center pt-3">{{ Auth::user()->name }}</h4>
        <div class="card-body">
            <ul>
                <li>
                    <a href="{{route('customer.tai-khoan.index')}}">Cập nhật tài khoản</a>
                </li>
                <li>
                    <a href="{{route('customer.tai-khoan.forgotPassword')}}">Đổi mật khẩu</a>
                </li>
                {{-- <li>
                    <a href="/tai-khoan/thong-bao">Thông báo</a>
                </li> --}}
                <li>
                    <a href="/tai-khoan/lich-su&danh-gia">Lịch sử đặt lịch & Đánh giá</a>
                </li>
            </ul>
            <a class="btn btn-block btn-default"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Đăng xuất</a>
            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

