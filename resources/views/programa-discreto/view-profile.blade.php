@extends('programa-discreto.view-base')

@section('pageContent')

        <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $data['nome'] }}
                <small>{{ $data['cidade'] }}</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="{{ $data['foto_capa'] }}" alt="">
        </div>

        <div class="col-md-4">
            <h3>Ligue agora {{ $data['telefone'] }}</h3>
            <h5>Mencione que viu o anúncio no ProgramaDiscreto.com</h5>
            <h4>{{ $data['idade'] }}</h4>
            <p>{{ $data['descricao'] }}</p>
            <h3>Gosto de fazer</h3>
            <ul>
                @foreach($data['gostoDeFazer'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Mais Fotos</h3>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="{{ $data['foto1'] }}" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="{{ $data['foto2'] }}" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="{{ $data['foto3'] }}" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="{{ $data['foto4'] }}" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

@endsection