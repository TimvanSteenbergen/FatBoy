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
use StickyNotes\Model\StickyNotesTable as StickyNotesTable;

class IndexController extends AbstractActionController
{
    /** @var StickyNotes\Model\StickyNotesTable $stickyNotesTable*/
    protected $stickyNotesTable;
    public function indexAction()
    {
        $result = new ViewModel(array(
            'stickynote' => $this->getStickyNotesTable()->getStickyNote(1),
        ));
    }

    public function getStickyNotesTable() {
        if (!$this->stickyNotesTable) {
            $sm = $this->getServiceLocator();
            $this->stickyNotesTable = $sm->get('StickyNotes\Model\StickyNotesTable');
        }
        return $this->stickyNotesTable;
    }
    public function simpleTableAction()
    {
    }
}
