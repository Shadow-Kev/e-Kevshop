@extends('layout.app')
@section('title')
Modifier Produit
@stop

@section('content')

    <h1>Modifier Produit</h1>
    <hr/>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($produit, [
        'method' => 'POST',
        'url' => ['manager/posts', $produit->id],
        'class' => 'form-horizontal'
    ]) !!}

    <script src="{{asset('js/vendors/ckeditor/ckeditor.js')}}"></script>


    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                 {!! Form::label('post_title', 'Titre: ', ['class' => 'col-sm-12 control-label']) !!}
                                 {!! Form::text('post_title', $produit->post_title, ['class' => 'form-control']) !!}
                                {!! $errors->first('post_title', '<p class="help-block">:message</p>') !!}  
                            </div>                                  
                        </div>                              
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                            {!! Form::label('post_cat_id', 'Categorie: ', ['class' => 'col-sm-4 control-label']) !!}
                            {!! Form::select('post_cat_id', \App\CategoriePosts::where('cat_status',1)->pluck('cat_libelle','id'), $produit->post_cat_id, ['placeholder' => 'Choisissez une catégorie','class' => 'form-control']) !!}
                            {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                        </div>
                        </div>
                   </div>

                </div> 

                <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                            <?php 
                            $d = new DateTime($produit->publication_date);

                                    ?>
                              {!! Form::label('publication_date', 'Date publication: ', ['class' => 'col-sm-12 control-label']) !!}
                              {!! Form::date('publication_date', $d->format('Y-m-d'), ['class' => 'form-control']) !!}
                              {!! $errors->first('publication_date', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                   </div>

                   <div class="col-md-6">
                        <div class="form-group">
                        
                            <div class="row">
                                {!! Form::label('post_status', 'Afficher sur le site: ', ['class' => 'col-sm-3 control-label']) !!}
                                {!! Form::checkbox('post_status', 1, ($produit->post_status==1)  ) !!}
                                {!! $errors->first('post_status', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                   </div>
                   
                </div>

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                             <div class="row">
                             {!! Form::label('post_content', 'Contenu: ', ['class' => 'col-sm-12 control-label']) !!}
                             {!! Form::textarea('post_content', $produit->post_content, ['class' => 'form-control', 'id'=>'post_content']) !!}
                             {!! $errors->first('post_content', '<p class="help-block">:message</p>') !!}
                             </div>                                   
                        </div>    
                    </div>
                </div>

                <div class="col-md-12">
                     <div class="file-upload" id='image'>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);"
                                accept="image/*" name="image"  id="input-image" tar="image" />
                            <div class="drag-text">
                                <h3 id="imglabel">870 X 541</h3>
                            </div>
                        </div>
                        <div class="file-upload-content" style="{{$produit->post_image != null ? 'display:block' : ''}}">
                            <img class="file-upload-image" style="max-width:100%;max-height:100%" src="{{asset('storage/uploads/articles/'.$produit->post_image)}}" alt="your image"/>
                            <div class="image-title-wrap">
                                <div class="row">
                                    <button type="button" onclick="removeUpload('image')" class="remove-image btn-sm">Changer
                                        <span class="image-title"> Image chargée </span> </button>
                                </div>
                            </div>
                        </div>
                       </div>
               </div>
            </div>

        <button type="submit" class="btn btn-general btn-success col-md-12">Engistrer</button>
    {!! Form::close() !!}

    <script> 

CKEDITOR.replace( 'post_content',{
    language: 'fr',
} );
</script>
           
@endsection