<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offerings Controller
 *
 * @property \App\Model\Table\OfferingsTable $Offerings
 */
class OfferingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('offerings', $this->paginate($this->Offerings));
        $this->set('_serialize', ['offerings']);
    }

    /**
     * View method
     *
     * @param string|null $id Offering id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offering = $this->Offerings->get($id, [
            'contain' => []
        ]);
        $this->set('offering', $offering);
        $this->set('_serialize', ['offering']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offering = $this->Offerings->newEntity();
        if ($this->request->is('post')) {
            $offering = $this->Offerings->patchEntity($offering, $this->request->data);
            if ($this->Offerings->save($offering)) {
                $this->Flash->success(__('The offering has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offering could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('offering'));
        $this->set('_serialize', ['offering']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offering id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offering = $this->Offerings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offering = $this->Offerings->patchEntity($offering, $this->request->data);
            if ($this->Offerings->save($offering)) {
                $this->Flash->success(__('The offering has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offering could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('offering'));
        $this->set('_serialize', ['offering']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offering id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offering = $this->Offerings->get($id);
        if ($this->Offerings->delete($offering)) {
            $this->Flash->success(__('The offering has been deleted.'));
        } else {
            $this->Flash->error(__('The offering could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
