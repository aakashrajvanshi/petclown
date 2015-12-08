@extends('app')
@section('title')
    <title>Submit Petition Idea</title>
    <meta name="description" content="Submit a funny petition idea.">
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins: "link,paste",
            target_list: false,
            relative_urls: false,
            content_css : "/css/tinymce.css",
            height: "200",
            width: "98%",
            link_assume_external_targets: true,
            paste_as_text: true,
            menubar: false,
            toolbar: "bold italic | bullist numlist | link unlink",
            statusbar : false,
            valid_elements : "a[href|target=_blank],strong/b,p,em/i,ol,ul,li,div[align],br,sup,sub,h3,h4,h5,h6,blockquote,code"
        });</script>

@stop

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="page-heading">Submit an Idea for a Funny Petition</h1>
            <br>
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                {!! Form::Open(['action' => 'IdeasController@store', 'files'=>'true']) !!}

                        <!-- Petition Title -->
                <div class="form-group">
                    {!! Form::label('heading','Heading for your Petition') !!}
                    {!! Form::text('heading',null,['class' => 'form-control']) !!}
                </div>

                <!-- 'Petition To' Form Input -->
                <div class="form-group">
                    {!! Form::label('petition_to','Petition directed to (person or organization name)') !!}
                    {!! Form::text('petition_to',null,['data-role' => 'tagsinput', 'class' => 'form-control']) !!}
                </div>

                <!-- File Input -->
                <!-- Don't allow image upload for now
                <div class="form-group">
                    {!! Form::label('image','Upload an image (Optional)') !!}
                    {!! Form::file('image') !!}
                </div>
                -->
                <!-- Content Form Input -->
                <div class="form-group">
                    {!! Form::label('content','Brief description of the petition (Optional)') !!}
                    {!! Form::textarea('content',null,['class' => 'form-control']) !!}
                </div>

                <!--Petition Submit Button-->
                <div class="form-group">
                    {!! Form::submit('Submit Idea',['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::Close() !!}

        </div>

    </div>

@stop
@section('footer')

@stop