@extends('layout.market')

@section('content')

<div id="wrap">

    <!-- Content -->
    <div id="content">

        <section >

            <div class="col-md-12 text-center">
                <img src="{{asset('assets/img/loader.gif')}}" class="img-responsive" alt="" style="width: 80px;display:block; margin: 20vh auto 5px auto;">
                <div class="col-md-12">
                    Chargement en cours...
                </div>
            </div>
            <form action="https://mypvit.com/airtelmoneypvit.kk" name="pvit" method="POST" style="display: none;">
                <input type="text" name="tel_marchand" value="{{$phone_merchant_am}}"/>
                <input type="text" name="montant" value= "{{$montant}}"/>
                <input type="text" name="ref" value= "{{$paie->reference}}"/>
                <input type="text" name="agent" value= "enligne"/>
                <input type="text" name="redirect" value="https://kadmarket.shop"/>
                <input type="submit"  name="payer" >
            </form>
            <script>
                document.forms['pvit'].submit();
            </script>

        </section>

    </div>
    <!-- End Content -->

</div>



@endsection

@section('css')
    <style>
        section {
            position: relative;
            width: 100%;
            background: #f9f9f9;
        }
    </style>
@endsection













