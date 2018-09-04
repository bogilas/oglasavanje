<?php
    return [
        [
            'Pattern'    => '|^login/?$|',
            'Controller' => 'Main',
            'Method'     => 'login'
        ],
        [
            'Pattern'    => '|^logout/?$|',
            'Controller' => 'Main',
            'Method'     => 'logout'
        ],
        [   
            'Pattern'    => '|^adminProfil/?$|',
            'Controller' => 'Admin',
            'Method'     => 'adminProfil'
        ],
        [
            'Pattern'    => '|^pregledProjekcija/?$|',
            'Controller' => 'Admin',
            'Method'     => 'pregledProjekcija'
        ],
        [
            'Pattern'    => '|^dodajProjekciju/?$|',
            'Controller' => 'Admin',
            'Method'     => 'dodajProjekciju'
        ],
        [
            'Pattern'    => '|^pregledSala/?$|',
            'Controller' => 'Admin',
            'Method'     => 'pregledSala'
        ],
        [
            'Pattern'    => '|^dodajSalu/?$|',
            'Controller' => 'Admin',
            'Method'     => 'dodajSalu'
        ],
        [
            'Pattern'    => '|^pregledFilmova/?$|',
            'Controller' => 'Admin',
            'Method'     => 'pregledFilmova'
        ],
        [
            'Pattern'    => '|^dodajFilm/?$|',
            'Controller' => 'Admin',
            'Method'     => 'dodajFilm'
        ],
        [
            'Pattern'    => '|^pregledRezervacija/?$|',
            'Controller' => 'Admin',
            'Method'     => 'pregledRezervacija'
        ],
        [
            'Pattern'    => '|^dodajRezervaciju/?$|',
            'Controller' => 'Admin',
            'Method'     => 'dodajRezervaciju'
        ],
        [
            'Pattern'    => '|^adminInfo/?$|',
            'Controller' => 'Admin',
            'Method'     => 'adminInfo'
        ],
        [
            'Pattern'    => '|^rezervacija/?$|',
            'Controller' => 'Guest',
            'Method'     => 'rezervacija'
        ],
        [
            'Pattern'    => '|^rezervacija/sedista/([0-9]+)/?$|',
            'Controller' => 'Guest',
            'Method'     => 'sedista'
        ],
        [
            'Pattern'    => '|^film/([0-9]+)/?$|',
            'Controller' => 'Guest',
            'Method'     => 'film'
        ],
        [
            'Pattern'    => '|^repertoar/?$|',
            'Controller' => 'Guest',
            'Method'     => 'repertoar'
        ],
        [
            'Pattern'    => '|^uskoro/?$|',
            'Controller' => 'Guest',
            'Method'     => 'uskoro'
        ],
        [
            'Pattern'    => '|^.*$|',
            'Controller' => 'Guest',
            'Method'     => 'index'
        ]
    ];
