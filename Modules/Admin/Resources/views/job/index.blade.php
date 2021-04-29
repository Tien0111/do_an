@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Quản lý tin tuyển dụng</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Danh sách</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0 text-left">Tiêu đề</th>
                            <th scope="col" class="border-0">Tên ngành nghề</th>
                            <th scope="col" class="border-0">Trạng thái</th>
                            <th scope="col" class="border-0">Thời gian</th>
                            <th scope="col" class="border-0">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="text-left">
                                <a href="">{{ $item->j_name }}</a>
                            </td>
                            <td>
                                <span class="{{ $item->getStatus($item->j_status)['class-text'] }}">{{ $item->getStatus($item->j_status)['name'] }}</span>
                            </td>
                            <td>{{ $item->career->c_name ?? "[N\A]" }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('get_admin.job.update', $item->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="material-icons">edit</i></a>
                                <a href="" class="btn btn-outline-primary btn-sm">
                                    <i class="material-icons">restore_from_trash</i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $jobs->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
    </div>
@stop
