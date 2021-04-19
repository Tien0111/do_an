@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Danh sách ứng tuyển</h3>
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
                            <th scope="col" class="border-0" style="text-align: left">Tiêu đề</th>
                            <th scope="col" class="border-0">Name</th>
                            <th scope="col" class="border-0">Phone</th>
                            <th scope="col" class="border-0">Ngày ứng tuyển</th>
                            <th scope="col" class="border-0">CV</th>
                            <th scope="col" class="border-0">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applyJobs ?? [] as $item)
                            <tr>
                                <td>
                                    <span>{{ $item->id }}</span>
                                </td>
                                <td>
                                    <div class="table-list-title" style="text-align: left">
                                        <h3 style="margin: 0;padding: 0;line-height: 1.2rem"><a href="{{ route('get.job',['slug' => $item->job->j_slug,'hashID' => $item->job->j_hash_slug]) }}" target="_blank" title="{{ $item->job->j_name ?? "N\A" }}" style="font-size: 15px;margin: 0">{{ $item->job->j_name ?? "N\A" }}</a></h3>
                                        <span><i class="la la-map-marker"></i>{{ $item->job->j_address }}</span>
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
                                    <a href="{{ route('get_admin.apply_job.delete', $item->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="material-icons">restore_from_trash</i></a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
