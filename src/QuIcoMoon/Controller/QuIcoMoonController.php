<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuIcoMoon\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class QuIcoMoonController extends AbstractActionController
{
    public function indexAction()
    {

    }
    public function iconAjaxAction()
    {
        $model = new ViewModel();
        $model->setTemplate('qu-ico-moon/qu-ico-moon/ajax');
        return  $model->setTerminal(true);
    }

}