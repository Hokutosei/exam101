<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // $this->getServiceLocator()->get('db');
        $sm = $this->getServiceLocator();
        $this->adapter = $sm->get('Zend\Db\Adapter\Adapter');

        error_log("testa", 0);
        var_dump($this->adapter);


        return new ViewModel();
    }

}
