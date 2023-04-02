<?php

    namespace App\Controller\Pages;

    use \App\Utils\View;

    class Home extends Page{

        /**
         * método responsável por retornar o conteúdo (view) da home do site
         */

         /*
           Um controller deve pegar os dados retornados pelo Model e inserí-los em uma view, para que a view possa ser retornada,
           Controllers NÃO RETORNAM conteúdo diretamente.  
          */
        public static function getHome(){
            //!o nome colocado à frente de Pages/ deve ser o nome do ARQUIVO EM resources/view/pages
            //view home
            $content = View::render('Pages/home', [
                'name' => 'Luccas Arruda',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nostrum quia ut! Repellat facere qui quos veniam enim esse quae, optio, blanditiis maxime sapiente quasi fugit autem praesentium velit atque?'
            ]);

            //retorna a view da página
            return parent::getPage('Home - MVC', $content);
        }

    }

