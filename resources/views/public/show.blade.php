<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>{{ $fragment->title }}</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="{{ asset('assets/front/images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/front/images/apple-touch-icon.png') }}">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div id="wrapper">
    <div class="positions">
        <section class="section lb main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">

                                <h3>{{ $fragment->title }}</h3>

                            </div><!-- end title -->
                            <div class="blog-content">

                                <div class="pp">
                                    {!! $fragment->body !!}
                                </div><!-- end pp -->

                            </div><!-- end content -->

                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->

        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright">&copy; Copyright 2023</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->
    </div>


    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->


<script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>
</html>
