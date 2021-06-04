@extends('employer::layouts.app_employer')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container-fluid">
                <div class="row no-gape">
                    @include('employer::components._inc_sidebar_employer')
                    <div class="col-lg-9 column">
                        <div class="col-sm-12" style="margin-top: 100px;">
                            <form action="" class="form-inline">
                                <div class="form-group">
                                    <input type="text" style="margin-bottom: 0;height: 40px" class="form-control" placeholder="Tên ứng viên" name="n" value="{{ Request::get('n') }}">
                                </div>
                                <button type="submit" class="btn btn-success" style="margin-left: 10px">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="padding-left">
                            <div class="manage-jobs-sec addscroll">
                                <h3 style="display: block">Danh sách ứng tuyển</h3>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Tiêu đề</td>
                                        <td>Name</td>
                                        <td>Phone</td>
                                        <td>Ngày ứng tuyển</td>
                                        <td>CV</td>
                                        <td>Trạng thái</td>
                                        <td>Thao tác</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($applyJobs ?? [] as $item)
                                        <tr>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="{{ route('get.job',['slug' => $item->job->j_slug,'hashID' => $item->job->j_hash_slug]) }}" target="_blank" title="">{{ $item->job->j_name ?? "N\A" }}</a></h3>
                                                    <span><i class="la la-map-marker"></i>{{ $item->job->j_address }}</span>
                                                    <br>
                                                    <a href="{{ route('get_employer.apply_job.note', $item->id) }}" style="color: #007bff!important;font-size: 13px">Đánh giá</a>
                                                </div>
                                            </td>
                                            <td>
                                                <span>{{ $item->aj_name }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->aj_phone }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->created_at }}</span><br>
                                            </td>
                                            <td>
                                                <a href="{{ pare_url_file($item->aj_file_cv) }}" download="" style="font-size: 14px"><i class="la la-download"></i> Download</a>
                                            </td>
                                            <td>
                                                <a href="#" style="font-size: 14px">{{ $item->getApply($item->aj_apply)['name'] }}</a>
                                            </td>
                                            <td>
                                                <ul class="action_job">
                                                    <li>
                                                        <span>Delete</span>
                                                        <a href="{{ route('get_employer.apply_job.delete', $item->id) }}" title=""><i class="la la-trash-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <span>Duyệt</span>
                                                        <a href="{{ route('get_employer.apply_job.success', $item->id) }}" title=""><i class="la la-check-circle"></i></a>
                                                    </li>
                                                    <li>
                                                        <span>Huỷ bỏ</span>
                                                        <a href="{{ route('get_employer.apply_job.cancel', $item->id) }}" title=""><i class="la la-ban"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
