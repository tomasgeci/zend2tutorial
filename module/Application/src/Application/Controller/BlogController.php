<?php
/**
* Zend Framework (http://framework.zend.com/)
*
* @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
* @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
* @license   http://framework.zend.com/license/new-bsd New BSD License
*/

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Models; // -tge- add namespaces for models

class BlogController extends AbstractActionController // -tge- this is blog controller
{
    // -tge- index action for more posts
    public function indexAction()
    {
        return new ViewModel();
    }

    // -tge- post action for single post
    public function postAction()
    {
        // -tge- classical way
        //$pdm = new Models\PostDataMapper();
        
        // -tge- service manager way
        //$pdm = $this->getServiceLocator()->get('PostDataMapper');

        // -tge- factory way
        $pim = $this->getServiceLocator()->get('PostIdentityMap');
        
        // -tge- obtain parameter from URI
        $postID = (int)$this->getEvent()->getRouteMatch()->getParam('postID');

        // -tge- or we can use these commands
        //$postID= $this->params('postID');
        //$postID = $this->params()->fromRoute('postID');

        return new ViewModel();
    }

    // -tge- post action for comments for post
    public function commentsAction()
    {
        // -tge- obtain parameter from URI
        $postID = (int)$this->getEvent()->getRouteMatch()->getParam('postID');

        // -tge- or we can use these commands
        //$postID= $this->params('postID');
        //$postID = $this->params()->fromRoute('postID');

        return new ViewModel();
    }

}
