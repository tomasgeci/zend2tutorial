<?php
/**
* Zend Framework (http://framework.zend.com/)
*
* @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
* @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
* @license   http://framework.zend.com/license/new-bsd New BSD License
*/

namespace TgePageLayout\Controller; // -tge- correct namespace

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        // -tge- create custom view object
        $viewObj = new ViewModel();

        // -tge- create custom widget
        $widgetObj = new ViewModel(
            array(
                'title' => 'some title for widget',
                'content' => 'some content for widget',
            )
        );
        // assign view file for widget
        $widgetObj->setTemplate('index/widget'); // -tge- defined in module config file

        // -tge- add widget as child
        $viewObj->addChild($widgetObj,'widget');

        return $viewObj;
    }
}
