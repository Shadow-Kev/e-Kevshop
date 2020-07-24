@extends('layout.dash')
@section('content')
@include('flashy::message')
<?php 
setlocale (LC_TIME, 'fr_FR.utf8','fra');
  ?>
<style type="text/css">
    .content-wrapper{
        background-color: white !important;
    }
    .pad-0-3px{
        padding: 0 3px;
    }
    

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                  <div class="content-wrapper" style="margin-left: 0;">
                    <section class="content-header">
                      <h1>
                        Dashboard
                      </h1>
                      <ol class="breadcrumb">

                      </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content" style="min-height: 150px !important;">
                      <!-- Info boxes -->
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">VENTES DU JOUR</span>
                                    <span class="info-box-number">{{count($ventes_du_jours)}}</span>

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
                        <div class="col-md-4 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-green ">
                                <span class="info-box-icon"><i class="fa fa-buysellads"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text">COMMANDES</span>
                                  <span class="info-box-number">{{count($commandes)}}</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                  </div>
                                  <span class="progress-description">
                                        Toutes les commandes
                                      </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        

                        <div class="col-md-4 col-sm-6 col-xs-12 pad-0-3px">
                            <div class="info-box bg-aqua ">
                                <span class="info-box-icon"><i class="fa  fa-mobile-phone"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text">PRODUITS</span>
                                  <span class="info-box-number">{{$produits}}</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                  </div>
                                  <span class="progress-description">
                                        Tous les produits
                                  </span>
                                </div>  
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                     </div>

                    </section>


                      <section>
                          <div class="">
                              <div class="">
                                  <div class="col-md-12">
                                      <div class="box box-info">
                                          <div class="box-header with-border">
                                              <h3 class="box-title">Commandes récentes</h3>

                                              <div class="box-tools pull-right">
                                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                          <!-- /.box-header -->
                                          <div class="box-body">
                                              <div class="table-responsive">
                                                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                      <thead>
                                                      <tr>
                                                          <th>Date</th>
                                                          <th>Destinataire</th>
                                                          <th>Livraison</th>
                                                          <th>Statut</th>
                                                          <th>Actions</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                      @foreach($commandes as $item)
                                                          <tr>
                                                              <td><a href="{{ url('commande', $item->id) }}">{{ $item->created_at }}</a></td>
                                                              <td>{{ $item->nom_receveur }}</td>
                                                              <td>{{ $item->getModeLivraison->nom }}</td>
                                                              <td class="text-center">
                                                                  @if($item->statut == 1)
                                                                      <span class="badge badge-warning">En attente de paiement</span>
                                                                  @elseif($item->statut == 2)
                                                                      <span class="badge badge-success">Validé et payé</span>
                                                                  @elseif($item->statut == 0)
                                                                      <span class="badge badge-danger">Paiement echoué</span>
                                                                  @endif
                                                              </td>
                                                              <td>
                                                                  <a href="{{ url('/manager/commande/details/'. $item->slug) }}" class="btn btn-primary btn-sm"><i class="fa fa-list-alt margin-right-3"></i>Détails</a>
                                                              </td>
                                                          </tr>
                                                      @endforeach
                                                      </tbody>
                                                  </table>
                                              </div>
                                              <!-- /.table-responsive -->
                                          </div>
                                          <!-- /.box-body -->
                                          <div class="box-footer clearfix">
                                              <a href="{{URL::to('/manager/commande')}}" class="btn btn-sm btn-default btn-flat pull-right">Toutes les commandes</a>
                                          </div>
                                          <!-- /.box-footer -->
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </section>
                <!-- /.content -->
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

