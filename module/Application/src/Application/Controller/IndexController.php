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

        $this->testAction();

        return new ViewModel();
    }

    // public function someAction() {
    //     $dbAdapter = $this->serviceLocator->get('Zend\Db\Adapter\Adapter');
    //
    //     // Do something with the database adapter, e.g.:
    //     $dbAdapter->query('SELECT username FROM user WHERE id = ?', array(37));
    // }

    public function testAction() {
        // $this->getServiceLocator()->get('db');
        // $sm = $this->getServiceLocator();
        $this->adapter = $this->serviceLocator->get('Zend\Db\Adapter\Adapter');
        // $sm = $this->getServiceLocator();
        // $this->adapter = $this->serviceLocator->get('Zend\Db\Adapter\Adapter');

        $sql = "show tables";
        $statement = $this->adapter->query($sql);
        $result = $statement->execute();

        error_log("testa test acton", 0);
        var_dump($result);
    }

    public function adapter() {
        // if (!$this->adapter) {
        //      $sm = $this->getServiceLocator();
        //      $this->adapter = $sm->get('Zend\Db\Adapter\Adapter');
        //   }
        // return $this->adapter;
        // $this->getServiceLocator()->get('db');
        // $sm = $this->getServiceLocator();
        // $this->adapter = $sm->get('Zend\Db\Adapter\Adapter');
        $sm = $this->getServiceLocator();
        $this->adapter = $this->serviceLocator->get('Zend\Db\Adapter\Adapter');

        return $this->adapter;

    }

}
