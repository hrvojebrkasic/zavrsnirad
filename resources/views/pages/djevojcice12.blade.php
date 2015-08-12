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

<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
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
<script src="{{URL::asset('public/js/scripts.js')}}" type="text/javascript"></script>

</body>
</html>