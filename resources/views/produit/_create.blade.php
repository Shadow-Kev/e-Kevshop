@extends('layout.app')
@section('title')
Enregistrement Produit
@stop

@section('content')
    <script src="{{asset('js/vendors/ckeditor/ckeditor.js')}}"></script>

    <style type="text/css">
        .help-block{
            color: red;
        }
    </style>
    <h1>Enregistrement Produit</h1>
    <hr/>

   
    <div class="form" id="form1">
            <br>
           {!! Form::open(['url' => 'manager/produit', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                 {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-12 control-label']) !!}
                                 {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}  
                            </div>                                  
                        </div>                              
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                             <div class="row">
                             {!! Form::label('prix', 'Prix standard: ', ['class' => 'col-sm-12 control-label']) !!}
                             {!! Form::number('prix', null, ['class' => 'form-control']) !!}
                             {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                             </div>                                   
                            </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                {!! Form::label('prix_achat', 'Prix d\'achat : ', ['class' => 'col-sm-12 control-label']) !!}
                                {!! Form::number('prix_achat', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('prix_achat', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                {!! Form::label('prix_reduit', 'Prix réduit: ', ['class' => 'col-sm-12 control-label']) !!}
                                {!! Form::number('prix_reduit', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>

        <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                              {!! Form::label('quantite', 'Quantite: ', ['class' => 'col-sm-12 control-label']) !!}
                              {!! Form::number('quantite', null, ['class' => 'form-control']) !!}
                              {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                             {!! Form::label('garantie', 'Garantie (Nombre de mois):  ', ['class' => 'col-sm-12 control-label']) !!}
                             {!! Form::text('garantie', null, ['class' => 'form-control']) !!}
                             {!! $errors->first('garantie', '<p class="help-block">:message</p>') !!}
                         </div>
                        </div>
                   </div>
                </div>
                <br>
                <br>
                <div class="col-md-12">
                        <h3 style="border-bottom: 1px solid #ddd;">Propriétés</h3>
                </div>
                <br>
                <br>

                <div class="row">
                   <div class="col-md-4">
                        <div class="form-group">
                            <div class="row">
                            {!! Form::label('categorie', 'Categorie: ', ['class' => 'col-sm-4 control-label']) !!}
                            {!! Form::select('categorie', \App\Categorie::pluck('nom','id'), null, ['placeholder' => 'Choisissez une catégorie','class' => 'form-control']) !!}
                            {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                        </div>
                        </div>
                   </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="row">
                             {!! Form::label('marque', "Marque: ", ['class' => 'col-sm-4 control-label']) !!}
                             {!! Form::select('marque', \App\Marque::pluck('title','id'), null, ['placeholder' => 'Choisissez une marque','class' => 'form-control']) !!}
                             {!! $errors->first('marque', '<p class="help-block">:message</p>') !!}
                         </div>
                        </div>
                   </div>
                   @if(Auth::user()->shop_id == 1)

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="row">
                             {!! Form::label('shop', 'Boutique: ', ['class' => 'col-sm-4 control-label']) !!}
                             {!! Form::select('shop', \App\Shop::pluck('nom','id'), null, ['placeholder' => 'Choisissez une boutique','class' => 'form-control']) !!}
                             {!! $errors->first('shop', '<p class="help-block">:message</p>') !!}
                         </div>
                        </div>
                   </div>
                   @endif
                    
                </div>
                <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                             <div class="row">
                             {!! Form::label('lien_details_constructeur', 'Lien detail vers le constructeur: ', ['class' => 'col-sm-12 control-label']) !!}
                             {!! Form::text('lien_details_constructeur', old('lien_details_constructeur'), ['class' => 'form-control']) !!}
                             {!! $errors->first('lien_details_constructeur', '<p class="help-block">:message</p>') !!}
                             </div>                                   
                            </div>    
                    </div>
                </div>
                <br>
              
                <div class="col-md-12">
                        <h3 style="border-bottom: 1px solid #ddd;">Description</h3>
                 </div>
                <br>
                <br>
                <div class="row">
                   <div class="col-md-12">
                        <div class="form-group">
                              {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                              {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                              {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                        </div>
                   </div>
                </div>
                <br>

                  <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('active', 'Afficher sur le site: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('active', 1, ['class' => 'form-control', 'name'=>"active", true]) !!}
                        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
           
                <br>

                <div class="col-md-12">
                        <h3 style="border-bottom: 1px solid #ddd;">Images</h3>
                 </div>
                <br>
                <br>
             <div class="col-md-3">
                     <div class="file-upload" id='img1'>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);"
                                accept="image/*" name="image[]"     id="input-img1" tar="img1" />
                            <div class="drag-text">
                                <h3>Image 1 </h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image"/>
                            <div class="image-title-wrap">
                                <div class="row">
                                    <button type="button" onclick="removeUpload('img1')" class="remove-image btn-sm">Changer
                                        <span class="image-title"> Image chargée </span> </button>

                                </div>
                            </div>
                        </div>
                       </div>
               </div>
        <div class="col-md-3">
            <div class="file-upload" id='img2'>
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);"
                           accept="image/*" name="image[]" id="input-img2" tar="img2"  />
                    <div class="drag-text">
                        <h3>Image 2</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image"/>
                    <div class="image-title-wrap">
                        <div class="row">
                            <button type="button" onclick="removeUpload('img2')" class="remove-image btn-sm">Changer
                                <span class="image-title"> Image chargée </span> </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="file-upload" id='img3'>
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);"
                           accept="image/*" name="image[]"  id="input-img3" tar="img3" />
                    <div class="drag-text">
                        <h3>Image 3 </h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image"/>
                    <div class="image-title-wrap">
                        <div class="row">
                            <button type="button" onclick="removeUpload('img3')" class="remove-image btn-sm">Changer
                                <span class="image-title"> Image chargée </span> </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="file-upload" id='img4'>
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);"
                           accept="image/*" name="image[]" id="input-img4" tar="img4" />
                    <div class="drag-text">
                        <h3>Image 4 </h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image"/>
                    <div class="image-title-wrap">
                        <div class="row">
                            <button type="button" onclick="removeUpload('img4')" class="remove-image btn-sm">Changer
                                <span class="image-title"> Image chargée </span> </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show(); -->


                 </div>

                <button type="submit" class="btn btn-general btn-success col-md-12">Engistrer</button>
            </form>
        </div>


              
  

@endsection
@section('js')
     <script>
       $(document).ready(function(){

    var counter = 1;



    $("#addButton").click(function () {
				
	if(counter>30){
            alert("Only 10 textboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'Nom' + counter);
                		
	newTextBoxDiv.after().html('<label>Nom #'+ counter + ' : </label><input name="nomCaratere[]" type="text" ' + counter + 
	      '" id="textbox' + counter + '" value="" ><label>Valeur #'+counter + ': </label><input  name="valCaratere[]" type="text" ' + counter + 
	      '" id="textbox' + counter + '" value=""  >');

	newTextBoxDiv.appendTo("#TextBoxesGroup");
				
	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
			
        $("#TextBoxDiv" + counter).remove();
			
     });
		
     $("#getButtonValue").click(function () {
		
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });
  });
     </script>
     <script> 

    CKEDITOR.replace( 'description',{
        language: 'fr',
    } );
</script>
              
@endsection