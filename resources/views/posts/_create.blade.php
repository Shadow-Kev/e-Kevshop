@extends('layout.app')
@section('title')
Nouvel article
@stop

@section('content')
    <style type="text/css">
        .help-block{
            color: red;
        }
    </style>
    <script src="{{asset('js/vendors/ckeditor/ckeditor.js')}}"></script>
    <h1>Enregistrement d'un article</h1>
    <hr/>

   
    <div class="form" id="form1">
            <br>
           {!! Form::open(['url' => 'manager/posts', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                 {!! Form::label('post_title', 'Titre: ', ['class' => 'col-sm-12 control-label']) !!}
                                 {!! Form::text('post_title', old('post_title'), ['class' => 'form-control']) !!}
                                {!! $errors->first('post_title', '<p class="help-block">:message</p>') !!}  
                            </div>                                  
                        </div>                              
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                            {!! Form::label('post_cat_id', 'Categorie: ', ['class' => 'col-sm-4 control-label']) !!}
                            {!! Form::select('post_cat_id', \App\CategoriePosts::where('cat_status',1)->pluck('cat_libelle','id'), null, ['placeholder' => 'Choisissez une catégorie','class' => 'form-control']) !!}
                            {!! $errors->first('post_cat_id', '<p class="help-block">:message</p>') !!}
                        </div>
                        </div>
                   </div>

                </div> 

                <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                              {!! Form::label('publication_date', 'Date publication: ', ['class' => 'col-sm-12 control-label']) !!}
                              {!! Form::date('publication_date', null, ['class' => 'form-control']) !!}
                              {!! $errors->first('publication_date', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                   </div>

                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                {!! Form::label('post_status', 'Afficher sur le site: ', ['class' => 'col-sm-5 control-label']) !!}
                                {!! Form::checkbox('post_status', old('post_status'), ['class' => 'form-control', 'name'=>"post_status", true]) !!}
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
                             {!! Form::textarea('post_content', old('post_content'), ['class' => 'form-control', 'id'=>'post_content']) !!}
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
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image"/>
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
    </form>
</div>

<script> 

CKEDITOR.replace( 'post_content',{
    language: 'fr',
} );
</script>
              
  

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
@endsection