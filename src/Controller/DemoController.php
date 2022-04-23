<?php

namespace App\Controller;

use Jaxon\Demo\Ajax\Bts;
use Jaxon\Demo\Ajax\Pgw;
use Cake\Core\Configure;
use Cake\Routing\Router;

use function jaxon;

class DemoController extends AppController
{
    public function index()
    {
        $jaxon = jaxon()->app();

        // Set the layout
        $this->viewBuilder()->setLayout('empty');

        $this->set('csrfToken', $this->request->getAttribute('csrfToken'));
        $this->set('jaxonCss', $jaxon->css());
        $this->set('jaxonJs', $jaxon->js());
        $this->set('jaxonScript', $jaxon->script());
        $this->set('pageTitle', "Cake Framework");
        // Jaxon request to the Bts Jaxon class
        $this->set('bts', $jaxon->request(Bts::class));
        // Jaxon request to the Pgw Jaxon class
        $this->set('pgw', $jaxon->request(Pgw::class));

        $this->render('demo');
    }

    public function jaxon()
    {}
}
