<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class TopicController extends AbstractRestfulController
{
    protected $collectionOptions = array('GET', 'POST');
    protected $resourceOptions = array('GET', 'PUT', 'DELETE');

    protected function _getOptions()
    {
        if($this->params->fromRoute('id', false)) {
            return $this->resourceOptions;
        }

        return $this->collectionOptions;
    }

    public function options()
    {
        $response = $this->getResponse();

        $response->getHeaders()
                ->addHeaderLine('Allow', implode(',', $this->_getOptions()));

        return $response;
    }

    public function checkOptions($e)
    {
        if(in_array($e->getRequest()->getMethod(), $this->_getOptions())) {
            return;
        }

        $response = $this->getResponse();
        $response->setStatusCode(405);
        return $response;
    }


    // topicLists will get all topics
    public function topicLists()
    {
        $this->adapter = $this->serviceLocator->get('Zend\Db\Adapter\Adapter');
        $sql = "select * from topics";
        $statement = $this->adapter->query($sql);
        $result = $statement->execute();

        return $result;
    }

    public function get($id)
    {   // Action used for GET requests with resource Id
        return new JsonModel($this->topicLists());
    }

    public function create($data)
    {
        error_log("called create", 0);
        $topicAPIService = $this->getServiceLocator()->get('topicAPIService');

        $result = $topicAPIService->create($data);
        $response = $this.getResponse();
        $reponse->setStatusCode(201);

        return new JsonModel($result);

        // return $this->methodNotAllowed();
    }

}
