@extends('app')

@section('title')
    <title>Admin Page</title>
    <meta name="description" content="Admin Page">
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li><a href="admin/comments">Comments</a></li>
                <li class="active"><a href="admin/petitionlist">Petitions</a></li>
                <li><a href="admin/blockedusers">Blocked Users</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Petitioning: Rahul Gandhi<a href="#" class="padding10">Rahulji, please have another interview with Arnab Goswami Rahulji,</a><a href="#">User</a></p>
                    <ul class="list-inline">
                        <li><button class="btn btn-default btn-success btn-sm"><a href="admin/editpetitions">Edit</a></button></li>
                        <li><button class="btn btn-default btn-danger btn-sm">Delete</button></li>
                        <li><button class="btn btn-default btn-info btn-sm">Mark as Spam</button></li>
                        <li><button class="btn btn-default btn-warning btn-sm">Block User</button></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Rahul Gandhi<a href="#" class="padding10">Rahulji, please have another interview with Arnab Goswami</a><a href="#">User</a></p>
                    <ul class="list-inline">
                        <li><button class="btn btn-default btn-success btn-sm"><a href="admin/editpetitions">Edit</a></button></li>
                        <li><button class="btn btn-default btn-danger btn-sm">Delete</button></li>
                        <li><button class="btn btn-default btn-info btn-sm">Mark as Spam</button></li>
                        <li><button class="btn btn-default btn-warning btn-sm">Block User</button></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Rahul Gandhi<a href="#" class="padding10">Rahulji, please have another interview with Arnab Goswami</a><a href="#">User</a></p>
                    <ul class="list-inline">
                        <li><button class="btn btn-default btn-success btn-sm"><a href="admin/editpetitions">Edit</a></button></li>
                        <li><button class="btn btn-default btn-danger btn-sm">Delete</button></li>
                        <li><button class="btn btn-default btn-info btn-sm">Mark as Spam</button></li>
                        <li><button class="btn btn-default btn-warning btn-sm">Block User</button></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Rahul Gandhi<a href="#" class="padding10">Rahulji, please have another interview with Arnab Goswami</a><a href="#">User</a></p>
                    <ul class="list-inline">
                        <li><button class="btn btn-default btn-success btn-sm"><a href="admin/editpetitions">Edit</a></button></li>
                        <li><button class="btn btn-default btn-danger btn-sm">Delete</button></li>
                        <li><button class="btn btn-default btn-info btn-sm">Mark as Spam</button></li>
                        <li><button class="btn btn-default btn-warning btn-sm">Block User</button></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Rahul Gandhi<a href="#" class="padding10">Rahulji, please have another interview with Arnab Goswami</a><a href="#">User</a></p>
                    <ul class="list-inline">
                        <li><button class="btn btn-default btn-success btn-sm"><a href="admin/editpetitions">Edit</a></button></li>
                        <li><button class="btn btn-default btn-danger btn-sm">Delete</button></li>
                        <li><button class="btn btn-default btn-info btn-sm">Mark as Spam</button></li>
                        <li><button class="btn btn-default btn-warning btn-sm">Block User</button></li>
                    </ul>
                </div>
            </div>
            <ul class="pagination">
                <li class="disabled"><span><i class="fa fa-angle-double-left"></i></span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#" rel="next"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>


@stop