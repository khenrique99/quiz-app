<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
      DB::table('questions')->insert([
        'level' => 'easy',
        'title' => 'COCA-COCA vs PEPSI',
        'imageOne' => 'logoCOCA-COLA.png',
        'imageTwo' => 'logoPEPSI.png',
        'describe' => 'Coca-Cola e Pepsi são duas das marcas de refrigerante mais conhecidas e consumidas em todo o mundo. Ambas têm uma longa história de rivalidade no mercado de bebidas carbonatadas, competindo por preferência dos consumidores.',
        'question' => 'Dentre essas duas marcas de refrigerantes, qual você escolhe?',
        'optionOne' => 'COCA-COLA',
        'optionTwo' => 'PEPSI'
      ]);
      DB::table('questions')->insert([
        'level' => 'easy',
        'title' => 'JBL vs EROS',
        'imageOne' => 'logoJBL.png',
        'imageTwo' => 'logoEROS.JPG',
        'describe' => 'Ambas as marcas têm seus respectivos pontos fortes e atendem a diferentes segmentos do mercado de áudio. A Eros concentra-se principalmente em produtos de som automotivo, enquanto a JBL oferece uma gama mais ampla de produtos de áudio, desde dispositivos portáteis até equipamentos de áudio profissional. A escolha entre Eros e JBL dependerá das preferências individuais, necessidades específicas e do tipo de aplicação de áudio desejado pelo consumidor.',
        'question' => 'E você, vai de qual?',
        'optionOne' => 'JBL',
        'optionTwo' => 'EROS'
      ]);
      DB::table('questions')->insert([
        'level' => 'easy',
        'title' => 'ANDROID vs IOS',
        'imageOne' => 'logoANDROID.png',
        'imageTwo' => 'logoIOS.webp',
        'describe' => 'A rivalidade entre iOS e Android é um tópico recorrente no mundo da tecnologia e dos smartphones. Ambos são sistemas operacionais móveis líderes e dominantes, e a competição entre eles é intensa. No final, a rivalidade entre iOS e Android beneficia os consumidores, pois estimula a inovação e melhoria contínua em ambos os sistemas operacionais. Cada plataforma tem suas vantagens e desvantagens, e a escolha entre iOS e Android geralmente se resume a preferências pessoais, necessidades específicas e integração com outros dispositivos e serviços.',
        'question' => 'Sem dúvidas, você escolhe?',
        'optionOne' => 'ANDROID',
        'optionTwo' => 'IOS'
      ]);
      DB::table('questions')->insert([
        'level' => 'easy',
        'title' => 'HONDA vs YAMAHA',
        'imageOne' => 'logoHONDA.png',
        'imageTwo' => 'logoYAMAHA.jpg',
        'describe' => 'A escolha entre Honda e Yamaha geralmente se resume a preferências pessoais, orçamento, estilo de pilotagem e até mesmo a disponibilidade de modelos específicos em sua região. Ambas as marcas oferecem produtos de alta qualidade e uma variedade de opções para atender às necessidades de diversos motociclistas. Se você estiver considerando comprar uma motocicleta, é sempre recomendado fazer uma pesquisa detalhada, testar os modelos de interesse e escolher aquele que melhor se adapta às suas preferências e exigências individuais.',
        'question' => 'E ai, qual time você é?',
        'optionOne' => 'HONDA',
        'optionTwo' => 'YAMAHA'
      ]);
      DB::table('questions')->insert([
        'level' => 'easy',
        'title' => 'PLAYSTATION vs XBOX',
        'imageOne' => 'logoPLAYSTATION.png',
        'imageTwo' => 'logoXBOX.png',
        'describe' => 'A rivalidade entre PlayStation e Xbox é uma das mais icônicas no mundo dos videogames. Ambas as marcas pertencem a empresas diferentes e oferecem consoles de videogame com exclusivos e experiências de jogo distintas.',
        'question' => 'Você tem ou queria ter qual?',
        'optionOne' => 'PLAYSTATION',
        'optionTwo' => 'XBOX'
      ]);
    }
}
