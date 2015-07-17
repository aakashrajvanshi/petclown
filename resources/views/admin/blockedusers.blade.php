@extends ('app')

@section('title')

@section('title')
    <title>Blocked Users</title>
    <meta name="description" content="Blocked Users">
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li><a href="admin/comments">Comments</a></li>
                <li><a href="admin/petitionlist">Petitions</a></li>
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
                    <button type="submit" class="btn btn-u pull-right">Block</button>
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

