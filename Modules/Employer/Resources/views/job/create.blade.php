@extends('employer::layouts.app_employer')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('employer::components._inc_sidebar_employer')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title">
                                <h3>Thêm mới job</h3>
                            </div>
                            <div class="profile-form-edit">
                                @include('employer::job.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
