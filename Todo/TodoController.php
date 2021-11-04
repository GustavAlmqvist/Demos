<?php

namespace App\Controllers;

use App\Models\TodoModel;
use CodeIgniter\Controller;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new TodoModel();
        $data['todo'] = $todo->findAll();

        echo view('templates/header', $data);
        echo view('templates/footer', $data);
        return view('todo/index');
    }

    public function create()
    {
        echo view('templates/header');
        echo view('templates/footer');
        return view('todo/create');
    }

    public function store()
    {
        $todo = new TodoModel();
        $data = [
            'task' => $this->request->getPost('task'),
            'deadline' => $this->request->getPost('deadline')
        ];

        $todo->save($data);
        return redirect()->to(base_url('todo'))->with('status','Task added!');
    }

    public function edit($id)
     {
        $todo = new TodoModel();
        $data['todo'] = $todo->find($id);
        
        echo view('templates/header');
        echo view('templates/footer');
        return view('todo/edit', $data);
     }

     public function update($id)
     {
        $todo = new TodoModel();
        $data = [
            'task' => $this->request->getPost('task'),
            'deadline' => $this->request->getPost('deadline')
        ];

        $todo->update($id, $data);
        return redirect()->to(base_url('todo'))->with('status','Task updated!');

     }

     public function delete($id)
     {
        $todo = new TodoModel();
        $todo->delete($id);
        return redirect()->to(base_url('todo'))->with('status','Task deleted!');
     }
}
