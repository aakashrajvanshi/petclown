@extends('app')

@section('title')
    <title>Admin Edit Petitions</title>
    <meta name="description" content="Admin Edit Petitions">
@stop



@section('content')

    <div class="row">
        <div class="col-md-8 editpetitions">
            <form role="form">
                <div class="form-group">
                    <label>Edit Petition title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Edit petition directed towards (name of person or organisation)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                        <label>Edit Petition</label>
                        <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Edit Categories</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Edit Tags</label>
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-u pull-right">Save changes</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>


    @stop