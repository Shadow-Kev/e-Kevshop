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
    <link rel="shortcut icon" href="{{asset('cdn/img')}}/favicon.ico">
      @include('layout._css')

         
    
</head>

<body> 
@include('sweetalert::alert')


    @include('layout._sidebar_kadmarketeur')
    <div id="right-panel" class="right-panel">

      
          @include('layout._navbar')
        
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                           
                            <div class="card-body no-padding">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                           
                            <div class="card-body no-padding">
                                @yield('subcontent')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  @include('layout._js')

@yield('js')
</body>

</html>