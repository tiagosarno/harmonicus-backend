<?php

namespace App\Repositories\Eloquent;
use Illuminate\Http\Request;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function findBy($request)
    {
        if($request->first) {
            return $this->model->where($request->key, $request->value)->first();
        }
        else {
            return $this->model->where($request->key, $request->value)->get();
        }
    }

    public function store(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $params = $request->all();
        $entity = $this->model->find($id);
        $entity->update($params);
        return $entity;
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}
