@section('footer')
    <footer xmlns="http://www.w3.org/1999/html" class="page-footer blue-grey darken-3">
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/sabores.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/pedido.js')}}"></script>
        


        <div class="container">
            <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>

            <link rel="stylesheet" href="css/style.css">
            <div class="row col-md-12">
                <div class="center col-md-6">
                    <div class="footer-left">
                    <h5 class="white-text">Endereço</h5> <br>
                    <p class="grey-text text-lighten-4">Avenida Athos de Silveira Ramos, <br>
                     CCMN, NCE, sala 1030. <br>
                     Fundão, Rio de Janeiro </p> <br>
                    <p class="grey-text text-lighten-4">Telefone: (21) 3938-3336
                    </div>
                </div>

                <div class="center col-md-6">
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="https://www.facebook.com/pizzavipdelivery" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <center>© 2016 Copyright por UniPizzas</center>
        </div>
    </footer>
@endsection