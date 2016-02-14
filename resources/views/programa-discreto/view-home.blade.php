@extends('programa-discreto.view-base')

@section('pageContent')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Modelos</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="/image/700x300/luana1.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Luana
                <small>Itaperuna</small>
            </h3>
            <h4>20 anos</h4>
            <p>Linda, sexy, carinhosa,envolvente, extremamente educada e sedutora de altíssimo nivel, para homens de extremo bom gosto. Quero lhes proporcionar momentos únicos e agradáveis.</p>
            <a class="btn btn-primary" href="{{ route('profile',['luana']) }}">Ligue agora <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="/image/700x300/aghata2.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Ághata
                <small>Macaé</small>
            </h3>
            <h4>30 anos</h4>
            <p>Ola !!! Me chamo Ághata sou loira tenho 1.65 altura 65 kilos estou aqui para te proporcionar momentos de puro prazer e descontração . Serei uma companhia bastante agradável , sou bem carinhosa e bastante sensual.
                Sou estilo namoradinha, mas tbm faço estilo safada.. para proporcionar muito prazer.</p>
            <a class="btn btn-primary" href="{{ route('profile',['aghata']) }}">Ligue agora <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>



    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

@endsection