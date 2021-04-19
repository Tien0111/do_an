@extends('user::layouts.app_user')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('user::components._inc_sidebar_user')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec addscroll">
                                <h3>Cập nhật thông tin</h3>
                                <div class="profile-form-edit">
                                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Email <span>(*)</span></span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Tên cty "
                                                       name="email" disabled value="{{ old('email',$user->email ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Họ tên <span>(*)</span></span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Tên cty "
                                                       name="name" value="{{ old('name',$user->name ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Số điện thoại <span>(*)</span></span>
                                            <div class="pf-field">
                                                <input type="number" placeholder="Số điện thoại"
                                                       name="phone" value="{{ old('phone',$user->phone ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Địa chỉ <span>(*)</span></span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Địa chỉ"
                                                       name="address" value="{{ old('address',$user->address ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <button type="submit">Cập nhật thông tin</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
