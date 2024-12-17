@extends('layouts.custom_layout')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
@endsection

@section('custom-content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box task-detail">
                        <div class="media mt-0 m-b-30"><img class="d-flex mr-3 rounded-circle" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar2.png" style="width: 48px; height: 48px;">
                            <div class="media-body">
                                <h5 class="media-heading mb-0 mt-0">James L. Kelley</h5><span class="badge badge-danger">Urgent</span></div>
                        </div>
                        <h4 class="m-b-20">Code HTML email template for welcome email</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet.</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet.</p>
                        <ul class="list-inline task-dates m-b-0 mt-5">
                            <li>
                                <h5 class="m-b-5">Start Date</h5>
                                <p>01 December 2017 <small class="text-muted">1:00 PM</small></p>
                            </li>
                            <li>
                                <h5 class="m-b-5">Due Date</h5>
                                <p>17 February 2018 <small class="text-muted">12:00 PM</small></p>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="task-tags mt-4">
                            <h5 class="">Tags</h5>
                            <div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Washington<span data-role="remove"></span></span> <span class="tag label label-info">Sydney<span data-role="remove"></span></span>

                            </div>

                        </div>
                        <div class="assign-team mt-4">
                            <h5 class="m-b-5">Assign to</h5>
                            <div>
                                <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar2.png"> </a>
                                <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar3.png"> </a>
                                <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar5.png"> </a>
                                <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar8.png"> </a><a href="#"><span class="add-new-plus"><i class="fa fa-plus"></i></span></a></div>
                        </div>
                        <div class="attached-files mt-4">
                            <h5 class="">Attached Files</h5>
                            <div class="files-list">
                                <div class="file-box">
                                    <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                    <p class="font-13 mb-1 text-muted"><small>File one</small></p>
                                </div>
                                <div class="file-box">
                                    <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                    <p class="font-13 mb-1 text-muted"><small>Attached-2</small></p>
                                </div>
                                <div class="file-box">
                                    <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                    <p class="font-13 mb-1 text-muted"><small>Dribbble shot</small></p>
                                </div>
                                <div class="file-box ml-3"><a href="#"><span class="add-new-plus"><i class="fa fa-plus"></i></span></a></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-right mt-4">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                        <button type="button" class="btn btn-light waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
    </div>
@endsection
