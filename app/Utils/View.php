<?php

    namespace App\Utils;

    //criação de métodos responsáveis por renderizar as views
    class View{
        //@param string
        //@return string

        //método criado para renderizar o conteúdo de uma view
        private static function getContentView($view){
            //concatenando o nome da view com .html
            $file = __DIR__.'./../../resources/view/'.$view.'.html';

            return file_exists($file) ? file_get_contents($file) : 'Página não encontrada - 404';
        }

        //método criado para retornar conteúdo RENDERIZADO de uma View
        public static function render($view, $vars = [
            'name' => 'teste de nome',
            'description' => 'Teste de descrição'
            //variáveis que serão utilizadas dentro da View
        ]){
            //CONTEUDO DA VIEW
            $contentView = Self::getContentView($view);

            //CHAVES DO ARRAY DE VARIÁVEIS
            $keys = array_keys($vars);
            $keys = array_map(function($item){
                //aqui dentro a gente consegue mexer nos valores do array
                //por conta de termos colocado na view as variáveis dentro de {{}} para diferenciar, aqui estamos concatenando os valores com {{}} para que elas possam ser identificadas e susbtituidas na tela
                return '{{'.$item.'}}';
            },$keys);

            //debug
            /*echo '<pre>';
            print_r($keys);
            echo '</pre>'; exit;*/ 

            //RETORNA CONTEUDO RENDERIZADO DA VIEW
            //return $contentView;
            return str_replace($keys,array_values($vars),$contentView);
        }
    }