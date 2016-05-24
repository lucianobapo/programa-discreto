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
    protected $modelos;

    /**
     * ModeloRepository constructor.
     */
    public function __construct()
    {
        $this->modelos = [
            'deby'=>[
                'nome' => 'Deborah Lopez',
                'cidade' => 'Rio das Ostras',
                'telefone' => '(22) 992 613 696',
                'idade' => '25 anos',
                'descricao' => 'Sarada, branca do cabelo Preto 1,58m 57kg. Gata de programa, tenho local próximo praia da tartaruga e aceito cartão... rostinho de boneca e muito  simpática atendo todos os dias... aguardo seu contatos, beijinhos da Debby',
                'gostoDeFazer' => [
                    'Sexo Vaginal',
                    'Sexo Anal',
                    'Fantasias',
                    'Homens',
                    'Casais',
                    'Acompanhante',
                    'Sexo oral',
                    'Masturbação',
                    'Dominação',
                    'Ativa',
                    'Passiva',
                ],
                'foto_capa' => 0,
                'foto_home' => '/image/700x300/deby6.jpg',
                'foto1' => '/image/750x500/deby5.jpg',
                'foto2' => '/image/750x500/deby3.jpg',
                'foto3' => '/image/750x500/deby2.jpg',
                'foto4' => '/image/750x500/deby1.jpg',
                'foto1Thumb' => '/image/500x300/deby5.jpg',
                'foto2Thumb' => '/image/500x300/deby3.jpg',
                'foto3Thumb' => '/image/500x300/deby2.jpg',
                'foto4Thumb' => '/image/500x300/deby1.jpg',
            ],
            'luiza'=>[
                'nome' => 'Luiza Capixaba',
                'cidade' => 'Macaé',
                'telefone' => '(22) 997 135 408',
                'idade' => '24 anos',
                'descricao' => 'Morena clara 1.56alt e 57 kg, sarada, pernas grossas, Gata e super gostosa. Sou educada discreta sedutora e bem safadinha. Atendimento estilo namoradinha sem frescura',
                'gostoDeFazer' => [
                    'Sexo Vaginal',
                    'Fantasias',
                    'Homens',
                    'Casais',
                    'Acompanhante',
                    'Sexo oral',
                    'Masturbação',
                    'Dominação',
                    'Ativa',
                    'Passiva',
                ],
                'foto_capa' => 0,
                'foto_home' => '/image/700x300/lara1.jpg',
                'foto1' => '/image/750x500/lara5.jpg',
                'foto2' => '/image/750x500/lara2.jpg',
                'foto3' => '/image/750x500/lara3.jpg',
                'foto4' => '/image/750x500/lara4.jpg',
                'foto1Thumb' => '/image/500x300/lara5.jpg',
                'foto2Thumb' => '/image/500x300/lara2.jpg',
                'foto3Thumb' => '/image/500x300/lara3.jpg',
                'foto4Thumb' => '/image/500x300/lara4.jpg',
            ],
            'luana'=>[
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
                'foto_capa' => 2,
                'foto_home' => '/image/700x300/luana1.jpg',
                'foto1' => '/image/750x500/luana1.jpg',
                'foto2' => '/image/750x500/luana2.jpg',
                'foto3' => '/image/750x500/luana3.jpg',
                'foto4' => '/image/750x500/luana4.jpg',
                'foto1Thumb' => '/image/500x300/luana1.jpg',
                'foto2Thumb' => '/image/500x300/luana2.jpg',
                'foto3Thumb' => '/image/500x300/luana3.jpg',
                'foto4Thumb' => '/image/500x300/luana4.jpg',
            ],
            'aghata'=>[
                'nome' => 'Ághata',
                'cidade' => 'Rio das Ostras',
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
                'foto_capa' => 0,
                'foto_home' => '/image/700x300/aghata3.jpg',
                'foto1' => '/image/750x500/aghata1.jpg',
                'foto2' => '/image/750x500/aghata2.jpg',
                'foto3' => '/image/750x500/aghata3.jpg',
                'foto4' => '/image/750x500/aghata4.jpg',
                'foto1Thumb' => '/image/500x300/aghata1.jpg',
                'foto2Thumb' => '/image/500x300/aghata2.jpg',
                'foto3Thumb' => '/image/500x300/aghata3.jpg',
                'foto4Thumb' => '/image/500x300/aghata4.jpg',
//                'foto4Thumb' => 'http://placehold.it/500x300',
            ],
        ];
    }

    public function findModelo($modelo)
    {
        return $this->modelos[$modelo];
    }

    public function allModelos()
    {
        return $this->modelos;
    }
}