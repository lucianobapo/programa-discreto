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
        switch ($modelo) {
            case 'luana':
                return [
                    'nome' => 'Luana',
                    'cidade' => 'Itaperuna',
                    'telefone' => '(22) 998 539 642',
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
                break;
            case 'aghata':
                return [
                    'nome' => 'Ághata',
                    'cidade' => 'Macaé',
                    'telefone' => '(21) 998 626 861',
                    'idade' => '30 anos',
                    'descricao' => 'Ola !!! Me chamo Ághata sou loira tenho 1.65 altura 65 kilos estou aqui para te proporcionar momentos de puro prazer e descontração . Serei uma companhia bastante agradável , sou bem carinhosa e bastante sensual. Sou estilo namoradinha, mas tbm faço estilo safada.. para proporcionar muito prazer.',
                    'gostoDeFazer' => [
                        'Acompanhante',
                        'Sexo anal',
                        'Sexo oral',
                        'Masturbação',
                        'Dominação',
                        'Ativa',
                        'Passiva',
                    ],
                    'foto_capa' => '/image/750x500/aghata2.jpg',
                    'foto1' => '/image/500x300/aghata1.jpg',
                    'foto2' => '/image/500x300/aghata2.jpg',
                    'foto3' => '/image/500x300/aghata3.jpg',
                    'foto4' => 'http://placehold.it/500x300',
                ];
                break;
            default:
                return 'sem modelo';
                break;
        }

    }
}