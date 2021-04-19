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
                                <h3>Danh sách ứng tuyển</h3>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Tiêu đề</td>
                                        <td>Ngày ứng tuyển</td>
                                        <td>Thao tác</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($applyJobs ?? [] as $item)
                                        <tr>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="" title="">{{ $item->job->j_name ?? "N\A" }}</a></h3>
                                                    <span><i class="la la-map-marker"></i>{{ $item->job->j_address }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>{{ $item->created_at }}</span><br>
                                            </td>
                                            <td>
                                                <ul class="action_job">
                                                    <li>
                                                        <span>Delete</span>
                                                        <a href="{{ route('get_employer.apply_job.delete', $item->id) }}" title=""><i class="la la-trash-o"></i></a>
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
