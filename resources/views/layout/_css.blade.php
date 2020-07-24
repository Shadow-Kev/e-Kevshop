


    <link rel="stylesheet" href="{{asset('cdn/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('cdn/vendors/font-awesome/css/font-awesome.min.css')}}"> -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cdn/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('cdn/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdn/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('cdn/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdn/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{url('cdn/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/sweetalert2.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


     <link rel="stylesheet" href="{{url('Ionicons/css/ionicons.min.css')}}">
          <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/kadm.css') }}">
      <!-- Morris chart -->
      <!-- <link rel="stylesheet" href="bower_components/morris.js/morris.css"> -->
      <!-- jvectormap -->
      <!-- <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> -->
      <!-- Date Picker -->
    <!--   <link rel="stylesheet" href="./vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
      <!-- Daterange picker -->
      <!-- <link rel="stylesheet" href="./vendor/bootstrap-daterangepicker/daterangepicker.css"> -->
      <!-- bootstrap wysihtml5 - text editor -->
      <!-- <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
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