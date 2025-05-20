<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class JobPositionController extends ResourceController
{
    protected $modelName = 'App\Models\JobPositionModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = $this->model->orderBy('id', 'DESC')->findAll();
        if ($data != null) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound();
        }
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound();
        }
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $input = $this->request->getPost();
        $save = $this->model->save($input);
        if ($save) {
            return $this->respondCreated('data has been saved successfully');
        } else {
            return $this->fail($this->model->errors());
        }
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $data = $this->model->find($id);
        if ($data === null) {
            return $this->failNotFound('data not found');
        }
        return $this->respond($data, 200);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $data = $this->model->find($id);
        if ($data === null) {
            return $this->failNotFound('data not found');
        }

        $input = $this->request->getPost();
        $update = $this->model->update($id, $input);

        if (!$update) {
            return $this->fail($this->model->errors());
        } else {
            return $this->respondUpdated('data successfully updated');
        }
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if ($data === null) {
            return $this->failNotFound('data not found');
        } else {
            $this->model->delete($data);
            return $this->respondDeleted('data successfully deleted');
        }
    }
}
