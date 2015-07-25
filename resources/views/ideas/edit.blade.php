@extends('app')
@section('title')
    <title>Update your Idea</title>
    <meta name="description" content="Update your Idea">
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
            <h1 class="page-heading">Update your Petition</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                {!! Form::Open(['method' => 'POST','files'=>'true']) !!}
                        <!-- Petition Title -->
                <div class="form-group">
                    {!! Form::label('heading','Write the title for your petition') !!}
                    {!! Form::text('heading',$petition->heading,['class' => 'form-control']) !!}
                </div>

                <!-- 'Petition To' Form Input -->
                <div class="form-group">
                    {!! Form::label('petition_to','This petition is directed towards (name of the person or organization)') !!}
                    {!! Form::text('petition_to',$petition->petition_to,['data-role' => 'tagsinput', 'class' => 'form-control']) !!}
                </div>

                <!-- File Input -->
                <div class="form-group">
                    {!! Form::label('image','Upload an image') !!}
                    {!! Form::file('image') !!}
                </div>

                <!-- Content Form Input -->
                <div class="form-group">
                    {!! Form::label('content','Description of the appeals') !!}
                    {!! Form::textarea('content',$petition->content,['class' => 'form-control']) !!}
                </div>

                <!--Petition Submit Button-->
                <div class="form-group">
                    {!! Form::submit('Submit Petition',['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::Close() !!}

        </div>

    </div>

@stop
@section('footer')

    <script type="text/javascript">
        $('#tag_list').select2({
            placeholder:'choose tags',
            tags: true,
        });
        $('#cat_list').select2({
            placeholder:'choose a category',
            tags: true,
        });
    </script>

@stop