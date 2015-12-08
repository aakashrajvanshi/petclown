@extends('app')

@section('title')
    <title>Contact Us</title>
    <meta name="description" content="Contact Us">

@stop

@section('content')

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav">
                <li class="list-group-item active">
                    <a href="contact">Contact Us</a>
                </li>
                <li class="list-group-item">
                    <a href="faq">FAQs</a>
                </li>
                <li class="list-group-item">
                    <a href="privacy">Privacy Policy</a>
                </li>
                <li class="list-group-item">
                    <a href="terms-of-use">Terms of Use</a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">

                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="msg">Message:</label>
                                <textarea class="form-control" name="message" id="msg" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-u pull-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@stop