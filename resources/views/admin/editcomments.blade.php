@extends('app')

@section('app')

    <title>Edit Comments</title>
    <meta name="description" content="Edit comments">

    @stop

@section('content')


    <div class="row">
        <div class="col-md-8 editpetitions">
            <form role="form">
                <div class="form-group">
                    <label>Edit Comments</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-u pull-right">Save changes</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>


@stop