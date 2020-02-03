@extends('master.master')
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
    <div class="card card-block sameheight-item" style="height: 720px;">
        <div class="title-block">
            <h3 class="title">
                Sửa Thành Viên : Nguyễn Thế Phúc
            </h3>
            <hr></div>
            <form method="POST">
                <div class="form-group">
                    <label class="control-label">Họ Và Tên</label>
                    <input
                        name="full"
                        type="text"
                        class="form-control underlined"
                        value="Nguyễn Thế Phúc"></div>
                    <div class="form-group">
                        <label class="control-label">Số điện thoại</label>
                        <input
                            name="phone"
                            type="text"
                            class="form-control underlined"
                            value="0356333333"></div>
                        <div class="form-group">
                            <label class="control-label">Địa chỉ</label>
                            <input
                                name="address"
                                type="text"
                                class="form-control underlined"
                                value="Dũng Tiến-Thường tín-Hà Nội"></div>
                            <div class="form-group">
                                <label class="control-label">Số CMT</label>
                                <input
                                    name="id_number"
                                    type="text"
                                    class="form-control underlined"
                                    value="017478331"></div>
                                <div align='right'>
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </article>
                <!-- end content -->
@endsection
<!-- content -->
