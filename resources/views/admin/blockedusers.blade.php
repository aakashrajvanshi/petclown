@extends ('app')


@section('title')

@section('title')
    <title>Blocked Users</title>
    <meta name="description" content="Blocked Users">
@stop

@section('content')

        <!-- Side Nav Bar --->

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav">
                <li class="list-group-item">
                    <a href="admin/createpetition">Create Petition</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/petitionlist">Petitions</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/ideas">Ideas</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/comments">Comments</a>
                </li>
                <li class="list-group-item active">
                    <a href="admin/blockedusers">Blocked Users</a>
                </li>
            </ul>
        </div>

        <!-- Content -->

        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="admin/blockedusers">Blocked Users</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">User 1</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">User 2</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input type="checkbox" value="">User 3</label>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-u pull-right">Unblock</button>
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

