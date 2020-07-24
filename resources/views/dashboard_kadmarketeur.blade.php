@extends('layout.dash_kadmarket')

@section('title')
    Kadmarketeur
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                  <div class="content-wrapper" style="margin-left: 0;">
                    <section class="content-header">
                      <h1>
                        Espace Kadmarketeur
                      </h1>
                      <ol class="breadcrumb">

                      </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content" style="min-height: 150px !important;">
                      <!-- Info boxes -->
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">NOMBRE D'ACTIVATION <br> DU JOUR</span>
                                    <span class="info-box-number">{{count($activation_du_jours)}}</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span class="progress-description">
                                        {{ strftime('%d %m %Y, %H:%M') }}
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        
                          <!-- /.info-box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-green ">
                                <span class="info-box-icon"><i class="fa fa-buysellads"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text">MONTANT DU JOUR </span>
                                  <span class="info-box-number">{{$montant_du_jour}}</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                  </div>
                                  <span class="progress-description">
                                        Totale des gains du jour
                                      </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">NOMBRE TOTAL <br> ACTIVATION</span>
                                    <span class="info-box-number">{{count($activation_totals)}}</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                    <span class="progress-description">
                                        {{ strftime('%d %m %Y, %H:%M') }}
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        

                        <div class="col-md-3 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-aqua ">
                                <span class="info-box-icon"><i class="fa fa-money" aria-hidden="true"></i></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text">MONTANT TOTAL</span>
                                  <span class="info-box-number">{{$montant_totals}}</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                  </div>
                                  <span class="progress-description">
                                        Gain total
                                  </span>
                                </div>  
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                     </div>

                    </section>
    <h1>Historique des activations </h1>
    <hr>
    <div class="table table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
            <tr>
                <!--<th>Code</th>-->
                <th>Bénéficiaire</th>
                <th>Numéro du bénéficiaire</th>
                <th>Début validité</th>
                <th>Fin validité</th>
                <th>Paye?</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($codes as $item)
                    <tr>
                        <!--<td> {{$item->code_kadmarketeur}} </td>-->
                        <td> {{$item->beneficiaire}} </td>
                        <td> {{$item->phone_beneficiaire}} </td>
                        <td> {{$item->debut_validite}} </td>
                        <td> {{$item->fin_validite}} </td>
                        <td class="text-center">{!!   $item->statut  ? "<span class='badge badge-success'>Oui</span>" : "<span class='badge badge-danger'>Non</span>" !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection