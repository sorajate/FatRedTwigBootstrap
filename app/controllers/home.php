<?php

use RedBean_Facade as R;

class HomeController extends Controller
{
    /** @var Twig_Environment $twig */
    protected $twig;

    /** @var Base $f3 */
    protected $f3;

    /** @var Web $web */
    //protected $web;

    public function __construct()
    {
        parent::_construct();
    }

    public function get()
    {
        echo $this->twig->render('index.html.twig', [
            'example' => $this->f3->get('IP')
        ]);
    }

    public function post()
    {
        $this->f3->error(405);
    }
}