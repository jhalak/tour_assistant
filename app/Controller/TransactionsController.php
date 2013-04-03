<?php
App::uses('AppController', 'Controller');
/**
 * Transactions Controller
 *
 * @property Transaction $Transaction
 */
class TransactionsController extends AppController {
  public function index() {
    $this->set('summary', 'vaila');
  }
}
