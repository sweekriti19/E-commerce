<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-commerce products</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
    <div class="container">
        <header>ADD PRODUCTS</header>
        <div class="progress-bar">
            <div class="step">
                <p>
                    Name</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Contact</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Birth</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Submit</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
        </div>
        <div class="form-outer">
            {!! Form::open(['url' => 'foo/bar','method' => 'POST']) !!}
            <div class="page">
                <div class="title">General</div>
            <div class="field">
                {{ Form::label('title', null, ['class' => 'control-label']) }}
                {{Form::text("title",
                  null,
                    [
                       "class" => "form-group user-email",
                       "placeholder" => "Title",
                    ])
       }}
            </div>
            <div class="field">
                {{ Form::label('brand', null, ['class' => 'control-label']) }}
                {{Form::select('brand', ['M' => 'Maybelline', 'N' => 'Natraj'],null,['placeholder' => 'Select a brand'])}}

            </div>
            <div class="field">
                {{ Form::label('category', null, ['class' => 'control-label']) }}
                {{Form::select('category', ['S' => 'Stationary', 'C' => 'Cosmetics'],null, ['placeholder' => 'Select a category'])}}

            </div>
            <div class="field">
                {{ Form::label('status', null, ['class' => 'control-label']) }}
                {{Form::radio('status', 'show', true)}}
                <b>Show</b>
                {{ Form::radio('status', 'hide' , false) }}
                <b>Hide</b>

            </div>
            <div class="field">
                {{ Form::label('featured?', null, ['class' => 'control-label']) }}
                {{Form::radio('featured', 'yes', true)}}
                <b>Show</b>
                {{ Form::radio('featured', 'no' , false) }}
                <b>Hide</b>
            </div>
            <div class="field">
                {{ Form::label('package new', null, ['class' => 'control-label']) }}
                {{Form::text("from",
                  null,
                    [
                       "class" => "form-group user-email",
                       "placeholder" => "YYY-MM-DD",
                    ])
       }}
                {{Form::text("TO",
                 null,
                   [
                      "class" => "form-group user-email",
                      "placeholder" => "YYY-MM-DD",
                   ])
      }}
            </div>
            <div class="field">
               {{Form::submit('Add Product')}}
            </div>
            </div>
            <div class="page">
                <div class="title">General</div>
                <div class="field">
                    {{ Form::label('price', null, ['class' => 'control-label']) }}
                    {{Form::text("price",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "Enter the price",
                        ])
           }}
                </div>
                <div class="field">
                    {{ Form::label('sp', null, ['class' => 'control-label']) }}
                    {{Form::text("sp",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "Enter the selling price",
                        ])
           }}
                </div>
                <div class="field">
                    {{ Form::label('FROM: ', null, ['class' => 'control-label']) }}
                    {{Form::text("from",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "YYY-MM-DD",
                        ])
           }}
                    {{ Form::label('TO: ', null, ['class' => 'control-label']) }}

                    {{Form::text("TO",
                     null,
                       [
                          "class" => "form-group user-email",
                          "placeholder" => "YYY-MM-DD",
                       ])
          }}
                </div>
                <div class="field">
                    {{ Form::label('Enter images of the product', null, ['class' => 'control-label']) }}
                    {{Form::file('image')}}
                </div>
                <div class="field">
                    {{ Form::label('Enter video URL (Youtube) ', null, ['class' => 'control-label']) }}
                    {{Form::text("url",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "Paste the URL of the video",
                        ])
           }}
                </div>
                <div class="field">
                    {{Form::button('Previous')}}
                    {{Form::button('Next')}}

                </div>
                <div class="field">
                    {{Form::submit('Add Product')}}
                </div>
            </div>
            <div class="page">
                <div class="title">General</div>
                <div class="field">
                    {{ Form::label('seo keyword', null, ['class' => 'control-label']) }}
                    {{Form::text("seo",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "",
                        ])
           }}
                </div>
                <div class="field">
                    {{ Form::label('seo description', null, ['class' => 'control-label']) }}
                    {{Form::text("seodes",
                      null,
                        [
                           "class" => "form-group user-email",
                           "placeholder" => "",
                        ])
           }}
                </div>
                <div class="field">
                    {{Form::button('Previous')}}
                    {{Form::button('Next')}}

                </div>
                <div class="field">
                    {{Form::submit('Add Product')}}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <script src="script.js"></script>
    </body>
</html>
