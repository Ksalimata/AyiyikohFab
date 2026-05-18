<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $data = [
            'title'            => 'Ayiyikoh FabLab & Incubateur',
            'meta_description' => 'Ayiyikoh FabLab & Incubateur Espace de fabrication numérique et d\'innovation ouvert à tous à Abidjan, Côte d\'Ivoire.',
        ];

        return view('home/index', $data);
    }
}
