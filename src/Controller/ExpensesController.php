<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Expenses Controller
 *
 * @property \App\Model\Table\ExpensesTable $Expenses
 */
class ExpensesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('expenses', $this->paginate($this->Expenses));
        $this->set('_serialize', ['expenses']);
    }

    /**
     * View method
     *
     * @param string|null $id Expense id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expense = $this->Expenses->get($id, [
            'contain' => []
        ]);
        $this->set('expense', $expense);
        $this->set('_serialize', ['expense']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expense = $this->Expenses->newEntity();
        if ($this->request->is('post')) {
            $expense = $this->Expenses->patchEntity($expense, $this->request->data);
            if ($this->Expenses->save($expense)) {
                $this->Flash->success(__('The expense has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expense could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('expense'));
        $this->set('_serialize', ['expense']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expense id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expense = $this->Expenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expense = $this->Expenses->patchEntity($expense, $this->request->data);
            if ($this->Expenses->save($expense)) {
                $this->Flash->success(__('The expense has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expense could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('expense'));
        $this->set('_serialize', ['expense']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expense id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expense = $this->Expenses->get($id);
        if ($this->Expenses->delete($expense)) {
            $this->Flash->success(__('The expense has been deleted.'));
        } else {
            $this->Flash->error(__('The expense could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
