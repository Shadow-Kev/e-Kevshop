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
      @include('profile._profile')

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
        <div class="content-inner">

               @include('partials._alert')

               <div class="content-inner chart-cont">
              
                <div class="row mt-2" id="card-prof">
                <div class="col-md-3">
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                        <div class="avatar">
                            <img alt="" src="img/avatar-1.jpg" class="img-fluid">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="#"> {{ Auth::user()->nom }}  {{ Auth::user()->prenom }}</a>
                            </div>
                            <div class="desc">{{ Auth::user()->email }}</div> 
                             <div class="desc">{{ Auth::user()->roles->name }}</div> 

                            <hr>
                        </div>
                        <nav class="nav text-center prof-nav">
                            <ul class="list-unstyled ">
                                <li><a href="#">Image de Profile</a></li> 
                                <li><a href="#">Mot de Pass</a></li> 
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deconnection
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li> 
                            </ul>
                        </nav>
    
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card hovercard">
                        <div class="tab" role="tabpanel"> 
                            <ul class="nav nav-tabs" role="tablist">
    
                              <li class="nav-item">
                                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="fa fa-user"></i></span> Profile</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="#references" role="tab" data-toggle="tab" aria-expanded="false"><span><i class="fa fa-cog"></i></span> Setting</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade" id="profile" aria-expanded="true">
                            
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="buzz" aria-expanded="false">
                                    <div class="panel panel-default widget">
                                        <div class="row mt-3">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Nom : </i></strong>   {{ Auth::user()->nom }}
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map-marker"> Prenom: </i></strong>   {{ Auth::user()->prenom }} 
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Pseudo: </i></strong>    {{ Auth::user()->username }}
                                            </div> 
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-envelope"> E-mail: </i></strong>    {{ Auth::user()->email }}
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-phone"> Phone: </i></strong>   +91 1233 45 5678
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map"> Role: </i></strong>    {{Auth::user()->roles->name }}
                                            </div> 
                                        </div>
                                        
                                    </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade active show" id="references" aria-expanded="true">
                                    <div class="row mx-2">
                                       
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Nom</label>
                                                <div class="col-9">
                                                <input class="form-control" type="text" value="{{ Auth::user()->nom }}" id="example-text-input">
                                                </div>
                                            </div> 
                                             <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Prenom</label>
                                                <div class="col-9">
                                                <input class="form-control" type="text" value="{{ Auth::user()->prenom }}" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-email-input" style="width: 85px;" class=" col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" value="{{ Auth::user()->email }}" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" style="width: 85px;" class=" col-form-label">Pseudo</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="url" value="{{ Auth::user()->username }}" id="example-url-input">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Telephone</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Programming" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" style="width: 85px;" class=" col-form-label">Site Web</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="date" value="2018-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Facebook</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="tel" value="+91-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Instagram</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="tel" value="+91-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   



            <!--***** FOOTER *****-->    

        </div>
    </div> 

               </div>
               

    <!--Global Javascript -->
     @include('partials._js')

 </body>
</html>