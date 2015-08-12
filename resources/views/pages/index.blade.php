<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>KK Sisak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<!-- navigacija -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <a href="{{URL::to('index')}}" class="navbar-brand">KK Sisak</a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>
        <nav class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('index')}}">Početna</a></li>
                <li><a href="{{URL::to('article')}}">Novosti</a></li>
                <li class="dropdown">
                    <a href="#" class ="dropdown-toggle" data-toggle = "dropdown">O nama <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href="{{URL::to('povijest')}}">Povijest</a></li>
                        <li><a href="{{URL::to('struka')}}">Struka</a></li>
                        <li><a href="{{URL::to('uprava')}}">Uprava</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class ="dropdown-toggle" data-toggle = "dropdown">B liga centar <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href="{{URL::to('tablica')}}">Tablica</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class ="dropdown-toggle" data-toggle = "dropdown">Mladi <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href="{{URL::to('djevojcice12')}}">Djevojčice U-12</a></li>
                        <li><a href="{{URL::to('djecaci12')}}">Dječaci U-12</a></li>
                        <li><a href="{{URL::to('kadetkinje')}}">Kadetkinje</a></li>
                        <li><a href="{{URL::to('mladi_kadeti')}}">Mlađi kadeti</a></li>
                        <li><a href="{{URL::to('kadeti')}}">Kadeti</a></li>
                        <li><a href="{{URL::to('juniori')}}">Juniori</a></li>
                    </ul>
                </li>
                <li class = "dropdown">
                    <a href="#" class ="dropdown-toggle" data-toggle="dropdown">Treninzi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{URL::to('raspored')}}">Raspored</a></li>
                        <li><a href="{{URL::to('dvorane')}}">Dvorane</a></li>
                    </ul>
                </li>
                <li><a href="#contact" data-toggle="modal">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class ="container">
    <!--<div class="jumbotron">-->
    <!--<div id="owl-demo" class="owl-carousel owl-theme">-->
    <!--<div class="item"><a href="http://www.basburek.com" target="_blank"><img src="img/bas-burek.jpg" alt="Baš burek"></a></div>-->
    <!--<div class="item"><a href="http://www.sisak.hr" target="_blank"><img src="img/grad-sisak.jpg" alt="Grad Sisak"></a></div>-->
    <!--<div class="item"><a href="http://www.crosig.hr" target="_blank"><img src="img/crosig.jpg" alt="Croatia Osiguranje"></a></div>-->
    <!--<div class="item"><a href="http://www.auto-promet-sisak.hr" target="_blank"><img src="img/autopromet.jpg" alt="Croatia Osiguranje"></a></div>-->
    <!--&lt;!&ndash;<article>Carousel, ići će slike sponzora koje će bit klikabilne i vodit će na njihove stranice</article>&ndash;&gt;-->
    <!--</div>-->
    <!--</div>-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="http://www.basburek.com" target="_blank"><img src="img/bas-burek.jpg" alt="Baš burek"></a>
            </div>
            <div class="item">
                <a href="http://www.sisak.hr" target="_blank"><img src="img/rsz_grad-sisak.jpg" alt="Grad Sisak"></a>
            </div>
            <div class="item">
                <a href="http://www.crosig.hr" target="_blank"><img src="img/rsz_logo-crosig.jpg" alt="Croatia Osiguranje"></a>
            </div><div class="item">
                <a href="http://www.auto-promet-sisak.hr" target="_blank"><img src="img/rsz_autopromet.jpg" alt="Croatia Osiguranje"></a>
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->
</div>

{{--<div class="slideshow"--}}
     {{--data-cycle-fx=carousel--}}
     {{--data-cycle-timeout=1000--}}
     {{--data-cycle-carousel-visible=5--}}
     {{--data-cycle-carousel-fluid=true--}}
        {{-->--}}
    {{--<img src="http://malsup.github.io/images/beach1.jpg">--}}
    {{--<img src="http://malsup.github.io/images/beach2.jpg">--}}
    {{--...--}}
    {{--<img src="http://malsup.github.io/images/beach9.jpg">--}}
{{--</div>--}}

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3><a href="#">Pobjeda i poraz dječaka u Dubravi</a></h3>
            <p>Dječaci rođeni 2003. i mlađi odigrali su dva kola Lige za prvaka Prvenstva sportskih škola te upisali poraz i pobjedu.
                U prvom susretu sastali smo se sa favoriziranom Cedevitom i upisali poraz rezultatom 21:84. OdliČnu partiju pružio je kapetan Lovro Perković sa 10 ubačaja.
                Prvenstvo sportskih škola za dječake 2003. i ml. – Liga za prvaka – 4.kolo:
            </p>
            <a href="#" class="btn btn-default">Read More</a>
        </div>
        <div class="col-md-3">
            <h3><a href="#">Pobjeda i poraz dječaka u Dubravi</a></h3>
            <article>Dječaci rođeni 2003. i mlađi odigrali su dva kola Lige za prvaka Prvenstva sportskih škola te upisali poraz i pobjedu.
                :14, 12:5)
                SISAK: Suljanović, Jordan 2, Umičević 10, Mandić 7, Brnić, Akrap 2, Perković 14, Baiutti 2, Prosenjak 2, Vavro, Plavec, Gaković; trener: Vasiljević</article>
            <a href="#" class="btn btn-default">Read More</a>
        </div>
        <div class="col-md-3">
            <h3><a href="#">Pobjeda i poraz dječaka u Dubravi</a></h3>
            <article>Dječaci rođeni 2003. i mlađi odigrali su dva kola Lige za prvaka Prvenstva sportskih škola te upisali poraz i pobjedu.
                U prvom susretu sastali smo se sa favoriziranom Cedevitom i upisali poraz rezultatom 21:84. OdliČnu partiju pružio je kapetan Lovro Perković sa 10 ubačaja.
                P 14 i Andro Umičević sa 10 ubačaja. Vijedan doprinos pobjedi dao je i Luka Mandić sa 7 poena.
                Prvenstvo sportskih škola za dječake 2003. i ml. – Ligha za prvaka – 5.kolo:
                SISAK – RUDEŠ  39:30  (11:6, 6:5, 10:14, 12:5)
                SISAK: Suljanović, Jordan 2, Umičević 10, Mandić 7, Brnić, Akrap 2, Perković 14, Baiutti 2, Prosenjak 2, Vavro, Plavec, Gaković; trener: Vasiljević</article>
            <a href="#" class="btn btn-default">Read More</a>
        </div>
        <div class="col-md-3">
            <h3><a href="#">Pobjeda i poraz dječaka u Dubravi</a></h3>
            <article>Dječaci rođeni 2003. i mlađi odigrali su dva kola Lige za prvaka Prvenstva sportskih škola te upisali poraz i pobjedu.
                o pobjedu nad sastavom Rudeša rezultatom 39:30. U zanimljivom dvoboju napadaČki su se istakli Lovro Perković sa 14 i Andro Umičević sa 10 ubačaja. Vijedan doprinos pobjedi dao je i Luka Mandić sa 7 poena.
                Prvenstvo sportskih škola za dječake 2003. i ml. – Ligha za prvaka – 5.kolo:
                SISAK – RUDEŠ  39:30  (11:6, 6:5, 10:14, 12:5)
                SISAK: Suljanović, Jordan 2, Umičević 10, Mandić 7, Brnić, Akrap 2, Perković 14, Baiutti 2, Prosenjak 2, Vavro, Plavec, Gaković; trener: Vasiljević</article>
            <a href="#" class="btn btn-default">Read More</a>
        </div>
    </div>
</div>

<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>Kontaktirajte nas</h2>
            </div>
            <div class="modal-body">
                <div class="kontakt_podaci">
                    <address>
                        <h3>Košarkaški klub "Sisak"</h3>
                        <ul class="list-icons">
                            <li title="Adresa">
                                <i class="fa fa-map-marker pr-10 fa-big text-colored"></i>
                                Stjepana i Antuna Radića 41, Sisak
                            </li>
                            <li title="Telefon1">
                                <i class="fa fa-phone pr-10 fa-big text-colored"></i>
                                Telefon: 044/524-338
                            </li>
                            <li title="Telefon2">
                                <i class="fa fa-phone pr-10 fa-big text-colored"></i>
                                Telefon: 044/500-096
                            </li>
                            <li title="Fax">
                                <i class="fa fa-fax pr-10 fa-med text-colored"></i>
                                Faks: 044/500-095
                            </li>
                            <li title="Email">
                                <i class="fa fa-envelope pr-10 fa-med text-colored"></i>
                                <a href="mailto:kosarkaski.klub.sisak@gmail.com">kosarkaski.klub.sisak@gmail.com</a>
                            </li>
                        </ul>
                    </address>
                </div>
                <div class="row">
                    <form role="form" action="" method="post">
                        <div class="col-md-12">
                            <!--<div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>-->
                            <div class="form-group">
                                <label for="InputName">Ime i prezime:</label>
                                <input type="text" class="form-control" name="InputName" id="InputName"
                                       placeholder="Unesite ime i prezime:" required>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Vaš email:</label>
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                       placeholder="Unesite email:" required>
                            </div>
                            <div class="form-group">
                                <label for="InputMessage">Poruka:</label>
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                          required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
                                <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                            </div>
                            <input type="submit" name="submit" id="submit" value="Submit"
                                   class="btn btn-info pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">Footer</p>
        <a href="https://www.facebook.com/groups/119990741430282/" class="navbar-btn btn btn-primary pull-right" target="_blank">KK-Sisak na Facebooku</a>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
{{--<script src="'public/js/scripts.js" type="text/javascript"></script>--}}

</body>
</html>