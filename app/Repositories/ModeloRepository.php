<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 14/02/16
 * Time: 00:33
 */

namespace App\Repositories;


class ModeloRepository
{

    /**
     * ModeloRepository constructor.
     */
    public function __construct()
    {
    }

    public function findModelo($modelo)
    {
        return [
            'nome' => 'Luana',
            'cidade' => 'Itaperuna',
            'telefone' => '(38) 99952-3437',
            'idade' => '20 anos',
            'descricao' => 'Linda, sexy, carinhosa,envolvente, extremamente educada e sedutora de altíssimo nivel, para homens de extremo bom gosto. Quero lhes proporcionar momentos únicos e agradáveis.',
            'gostoDeFazer' => [
                'Sexo Vaginal',
                'Fantasias',
                'Homens',
                'Casais',
            ],
            'foto_capa' => '/image/750x500/luana3.jpg',
            'foto1' => '/image/500x300/luana1.jpg',
            'foto2' => '/image/500x300/luana2.jpg',
            'foto3' => '/image/500x300/luana3.jpg',
            'foto4' => '/image/500x300/luana4.jpg',
        ];
    }
}