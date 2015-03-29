<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Zend_Form;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function index2Action()
    {
        $view = new ViewModel();
        $view->setTemplate('form\index\index.phtml');
        return $view;
    }

    public function simpleFormAction()
    {
        $form = new Zend_Form();
        $form->setAction('/user/login')
            ->setMethod('post');

        // Create and configure username element:
        $username = $form->createElement('text', 'username');
        $username->addValidator('alnum')
            ->addValidator('regex', false, array('/^[a-z]+/'))
            ->addValidator('stringLength', false, array(6, 20))
            ->setRequired(true)
            ->addFilter('StringToLower');

        // Create and configure password element:
        $password = $form->createElement('password', 'password');
        $password->addValidator('StringLength', false, array(6))
            ->setRequired(true);

        // Add elements to form:
        $form->addElement($username)
            ->addElement($password)
            // use addElement() as a factory to create 'Login' button:
            ->addElement('submit', 'login', array('label' => 'Login'));
        return $form;
    }
}
