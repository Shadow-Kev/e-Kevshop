
  function zoomImage(e){
    //e.stopPropagation();
     // $(e).on('click',el =>{
        $('#zoombox').css("display","block");
        $('#zoombox').css("z-index","999");
        var im = $('<img src="'+e.src+'" />');
        $('#zoombox').append(im);
        $('#zoombox').on("click",function(x){
            $('#zoombox').css('display','none');
            $('#zoombox').html('');
        })
    //  });
  } 