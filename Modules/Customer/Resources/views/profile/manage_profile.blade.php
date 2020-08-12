<div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="{!! url('storage/'.Auth::user()->avatar) !!}" class="card-img-top" alt="...">
        <form action="{{ route('customer.tai-khoan.update', Auth::user()->id) }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input class="form-group" type="file" name="avatar" id="">
            <button class="btn btn-primary" type="submit">Thay đổi avatar</button>
        </form>
        <h4 class="text-center pt-3">{{ Auth::user()->name }}</h4>
        <div class="card-body">
            <ul>
                <li>
                    <a href="{{route('customer.tai-khoan.index')}}">Cập nhật tài khoản</a>
                </li>
                <li>
                    <a href="{{route('customer.tai-khoan.forgotPassword')}}">Đổi mật khẩu</a>
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
