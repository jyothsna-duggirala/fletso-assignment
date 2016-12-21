<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/stylesheets/jquery-ui.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/stylesheets/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ URL::asset('/vendor/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('/vendor/js/jquery-ui.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('/vendor/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('/vendor/js/underscore.js')}}"></script>
        <!--<object name="reviewTemplate" type="text/html" data="/scripts/review.html"></object>-->
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                // display: table;
                font-weight: 100;
                // font-family: 'Lato';
            }

            .container {
                height: 100%;
                text-align: center;
                // display: table-cell;
                vertical-align: middle;
            }

            .content {
                height: 100%;
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .restaurant-review {
                display:flex;
                height: 90%;
            }

            .restaurant-list {
                overflow: auto;
            }

            .restaurant-overview {
                flex: 1;
                overflow: auto;
            }

            .review-logo {
                width: 60px;
                height: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div></div>
            </div>
            <div class="shadow_template_renderrer"></div>
        </div>
        <script type="text/javascript">
            var review;
            $(".shadow_template_renderrer").load("/templates/review.html");
            $.get("/review", function(data) {
                review = JSON.parse(data)
                console.log("data:", review );
                var reviewTemplate = _.template($("#restaurants-container-template").html());
                $(".content").html(reviewTemplate({
                    review: review
                }))

                $(".review-tabs").tabs();
            })
        </script>
    </body>
</html>

