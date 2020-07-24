
<script src="{{url('js/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{url('js/vendors/wow.min.js')}}"></script>
<script src="{{url('js/vendors/bootstrap.min.js')}}"></script>
<script src="{{url('js/vendors/own-menu.js')}}"></script>
<script src="{{url('js/vendors/jquery.sticky.js')}}"></script> 
<script src="{{url('js/vendors/owl.carousel.min.js')}}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{url('vendor/rs-plugin/js/jquery.tp.t.min.js')}}"></script> 
<script type="text/javascript" src="{{url('vendor/rs-plugin/js/jquery.tp.min.js')}}"></script> 
<script src="{{url('js/main.js')}}"></script>
<script src="{{url('js/kdm_market.js')}}"></script>

<script>
    $(document).ready(function(e){

        $(".cart-btn").click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $.ajax({
                url : "{{url('/addToCart')}}/"+$(e.target).attr('dataid')+'/1',
                type : 'GET',
                success : function(data){
                    console.log(data);
                    if(data.r){
                        $('#cartQuantity').html(data.q);
                        $('#cartQuantity-badge').html(data.q);
                        $('#cartTotal').html(data.m);
                        $('#cart-number').html(data.q);
                        $('#cartmodal').modal({
                            keyboard: false
                        });
                        $('#cartmodal').modal('show')

                    }else{
                       /* $('.toast').toast({animation:true,autohide:true,delay:500});
                        $('#toastcontainer').toast('show');
*/

                    }
                }
            })
        });


    });

</script>
