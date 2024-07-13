<?php

namespace App\Controller;

use Jaxon\Demo\Ajax\App\Test as AppTest;
use Jaxon\Demo\Ajax\App\Buttons as AppButtons;
use Jaxon\Demo\Ajax\Ext\Test as ExtTest;
use Jaxon\Demo\Ajax\Ext\Buttons as ExtButtons;

use function Jaxon\jaxon;
use function Jaxon\rq;

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
        $this->set('appTest', rq(AppTest::class));
        $this->set('rqAppButtons', rq(AppButtons::class));
        $this->set('extTest', rq(ExtTest::class));
        $this->set('rqExtButtons', rq(ExtButtons::class));

        $this->render('demo');
    }

    public function jaxon()
    {}
}
