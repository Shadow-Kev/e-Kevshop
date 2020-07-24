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
      @include('partials._css')
       <style>
           #sweetactive {
               background-color: #ffffff;
               color: #c33720 ;
           }
           table tr th{
               background:#c33720;
               color:white;
               text-align:left;
               vertical-align:center;
           }



        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }
        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }
        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }
        .file-upload-content {
            display: none;
            text-align: center;
        }
        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }
        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
        }
        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
        }
        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }
        .drag-text {
            text-align: center;
        }
        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
        }
        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }
        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }
        .store-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #35cd8a;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #35cd8a;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }
        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }
        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }
        .store-image:hover {
            background: #35cd8a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }
        .store-image:active {
            border: 0;
            transition: all .2s ease;
        }
    </style>
</head>

<body> 
@include('sweetalert::alert')

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
        <div class="content-inner">

               @include('partials._alert')
               <div class="card">
                  <div class="col-sm-12">
                       @yield('content')
                  </div>
               </div>

            <!--***** FOOTER *****-->    

        </div>
    </div> 

    <!--Global Javascript -->
     @include('partials._js')
     <script>

         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                     $('.image-upload-wrap').hide();
                         $('.file-upload-image').attr('src', e.target.result);
                     $('.file-upload-content').show();
                     $('.image-title').html(input.files[0].name);
                 };
                 reader.readAsDataURL(input.files[0]);
             } else {
                 removeUpload();
             }
         }
        /*function readURL(input) {
            var imgBox = '<img class="file-upload-image" src="#" alt="your image"/>'

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var result = Object.keys(input.files).map(function(key) {
                    return  input.files[key];
                });
                console.log(result);
                result.forEach(function(x,i) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.image-upload-wrap').hide();
                        //$('.file-upload-image').attr('src', e.target.result);
                        $('.file-upload-content').show();
                        $('.file-upload-content').append('<img class="file-upload-image" src="' + input.files[i].name + '" alt="your image"/>');
                        //$('.image-title').html(input.files[0].name);
                    };
                    reader.readAsDataURL;
                });
            } else {
                removeUpload();
            }
        }*/
        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
        $(document).ready(function(){
            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');

                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");

        });
    </script>
   {{-- <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--}}
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    @yield('js')
    <script>
       $(document).ready(function(){
    $('.example').DataTable(        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}

    </script>
</body>

</html>