<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('tittle') </title>
    <link rel="shortcut icon" href="img/favicon.ico">
    @include('partials._css')
    @include('image._gallery')

    <style>
        .clear-line {
            width: 100%;
            height: 20px;
        }

        .img-c {
            position: relative;
            height: 0;
            width: 100%;
            overflow: hidden;
            padding-top: 75.09%
        }


        img {
            display: block;
            position: absolute;
            display: block;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: auto;
            margin: auto;
        }

        .card-type-1 {
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #e1e8ed;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            min-width: 300px;
            padding: 15px;
            width: 100%;
        }

        .card-type-2 {

            border-radius: 3px;
            background-color: #fff;
            background-color: #fff;

            border: 1px solid #d8d8d8;
            border-bottom-width: 2px;
            width: 100%;
            min-width: 300px;
            padding: 8px;
            margin-bottom: 3%;
        }
    </style>

</head>

<body>

<!--====================================================
                         MAIN NAVBAR
======================================================-->
@include('partials._navbar')
<!--====================================================
                        PAGE CONTENT
======================================================-->
<div class="page-content d-flex align-items-stretch">

    <!--***** SIDE NAVBAR *****-->
    @include('partials._sidebar')
    <div class="content-inner chart-cont">

        <!--***** CONTENT *****-->
        <div class="row">
            @foreach ($images as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card-type-2">
                        <div class="img-c">
                            @if($item->description !== null)
                                <img src="{{asset('storage')}}/{{$item->nom}}" width="607" height="442"/>
                            @else
                                <img src="{!!  file_exists('assets/img/articles/'.$item->nom)  ? asset('assets/img/articles/'.$item->nom) : asset('assets/img/IMG-20180823-WA0023.jpg')!!}"
                                     width="607" height="442"/>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        {{ $images->links('pagination.default') }}

    </div>
</div>


<!--Global Javascript -->
@include('partials._js')

</body>
</html>