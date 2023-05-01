<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::insert([
            ['title' =>  'Alguien voló sobre el nido del cuco',
            'category_id' => 1,
            'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico.',
            'year' => '1975',
            'director' => 'Milos Forman',
            'poster' => 'alguienvolo.jpg',
            'rented' => '0'],

            ['title' => 'Cadena perpetua',
	        'category_id' => 1,
	        'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins),tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank.',
	        'year' => '1994',
	        'director' => 'Frank Darabont',
	        'poster' => 'cadenaperpetua.jpg',
	        'rented' => '1'],

            ['title' => 'El golpe',
	        'category_id' => 2,
	        'synopsis' => 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster',
	        'year' => '1973',
	        'director' => 'George Roy Hill',
	        'poster' => 'elgolpe.jpg',
	        'rented' => '0'], 

            ['title' => 'El padrino',
	        'category_id' => 1,
	        'synopsis' => 'Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Cuando Corleone, se niega a intervenir en el negocio de las drogas, el       jefe de otra banda ordena su asesinato',
	        'year' => '1972',
	        'director' => 'Francis Ford Coppola',
	        'poster' => 'elpadrino.jpg',
	        'rented' => '1'],

	        ['title' => 'El pianista',
	        'category_id' => 1,
	        'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive 	con su familia en el ghetto de Varsovia. Pero tendrá que vivir escondido y completamente aislado        durante mucho tiempo.',
	        'year' => '2002',	
	        'director' => 'Roman Polanski',
	        'poster' => 'elpianista.jpg',
	        'rented' => '1'],

	        ['title' => 'Pulp Fiction',
	        'category_id' => 2,
	        'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión:       recuperar un misterioso maletín.',
	        'year' => '1994',
	        'director' => 'Quentin Tarantino',
	        'poster' => 'pulpfiction.jpg',
	        'rented' => '1'],

            ['title' => 'Sin perdón',
	        'category_id' => 3,
	        'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. 	Munny tendrá que        matar a dos hombres ',
	        'year' => '1992',
	        'director' => 'Clint Eastwood',	
	        'poster' => 'sinperdon.jpg',
	        'rented' => '0'],
        ]);
    }
}
