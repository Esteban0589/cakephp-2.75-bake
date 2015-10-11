<?php
class MusicaliaController extends AppController {
    public function grupos() {
        return $this->redirect(array('controller' => 'grupos','action' => 'index'));
	}
}