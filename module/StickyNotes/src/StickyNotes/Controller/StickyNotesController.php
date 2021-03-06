<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/StickyNotes for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace StickyNotes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StickyNotesController extends AbstractActionController
{
    protected $stickyNotesTable;
    
 public function indexAction() {
     return new ViewModel(array(
                    'stickynotes' => $this->getStickyNotesTable()->fetchAll(),
                ));
 }

    public function getStickyNotesTable() {
    	if (!$this->stickyNotesTable) {
    		$sm = $this->getServiceLocator();
            $this->stickyNotesTable = $sm->get('StickyNotes\Model\StickyNotesTable');
        }
    	return $this->stickyNotesTable;
    }

    public function addAction() {
        $request = $this->getRequest();
        $response = $this->getResponse();
        if ($request->isPost()) {
            $new_note = new \StickyNotes\Model\Entity\StickyNote();
            if (!$note_id = $this->getStickyNotesTable()->saveStickyNote($new_note))
                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
            else {
                $response->setContent(\Zend\Json\Json::encode(array('response' => true, 'new_note_id' => $note_id)));
            }
        }
        return $response;
    }

    public function removeAction() {
        $request = $this->getRequest();
        $response = $this->getResponse();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $note_id = $post_data['id'];
            if (!$this->getStickyNotesTable()->removeStickyNote($note_id))
                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
            else {
                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
            }
        }
        return $response;
    }
    public function updateAction(){
        // update post
        $request = $this->getRequest();
        $response = $this->getResponse();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $note_id = $post_data['id'];
            $note_content = $post_data['content'];
            $stickynote = $this->getStickyNotesTable()->getStickyNote($note_id);
            $stickynote->setNote($note_content);
            if (!$this->getStickyNotesTable()->saveStickyNote($stickynote))
                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
            else {
                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
            }
        }
        return $response;
    }
}
