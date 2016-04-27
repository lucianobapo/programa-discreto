@extends('programa-discreto.view-base')

@section('pageContent')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Modelos</h1>
        </div>
    </div>
    <!-- /.row -->

    @foreach($data as $key=>$modelo)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="{{ $modelo['foto_home'] }}" alt="">
                    {{--<img class="img-responsive" ng-src="@{{selected_foto.imageUrl}}" alt="">--}}
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $modelo['nome'] }}
                    <small>{{ $modelo['cidade'] }}</small>
                </h3>
                <h4>{{ $modelo['idade'] }}</h4>
                <p>{{ $modelo['descricao'] }}</p>
                <a class="btn btn-primary" href="{{ route('profile',[$key]) }}">Ligue agora <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
    @endforeach

    <!-- Pagination -->
    {{--<div class="row text-center">--}}
        {{--<div class="col-lg-12">--}}
            {{--<ul class="pagination">--}}
                {{--<li>--}}
                    {{--<a href="#">&laquo;</a>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--<a href="#">1</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">2</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">3</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">4</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">5</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">&raquo;</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- /.row -->

@endsection