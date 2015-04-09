<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Taglist for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Taglist\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TaglistController extends AbstractActionController
{
    public function indexAction()
    {
    	$treeArray = [
    		"Option 1" => 	["Suboption 1" => 200],
			"Option 2" => 	["Suboption 2" =>	["Subsub 1" => 201 ,
												 "Subsub 2" => 202]
							],
							["Suboption 3"=> 	["Subsub 3" => 203, 
												 "Subsub 4" => 204,
									     	     "Subsub 5" => 205]
							]
    					];
        $me = array(json_encode($treeArray));
        return new ViewModel($me);
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /taglist/taglist/foo
        return array();
    }
}
