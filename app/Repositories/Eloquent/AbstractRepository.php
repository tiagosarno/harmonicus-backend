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

    public function fullcount()
    {
        $result = $this->model->all();
        return $result->count();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    /**
     * first = true or false
     * like = true or false
     *
     * For like queries
     * - key, value
     * - key2, value2
     * - key3, value3
     */
    public function findBy($request)
    {
        if($request->like) {
            if($request->key3 && $request->key2 && $request->key) {
                return $this->model
                    ->where($request->key, 'like', '%'.$request->value.'%')
                    ->orWhere($request->key2, 'like', '%'.$request->value2.'%')
                    ->orWhere($request->key3, 'like', '%'.$request->value3.'%')
                    ->distinct()->get();
            }
            else if (!$request->key3 && $request->key2 && $request->key) {
                return $this->model
                    ->where($request->key, 'like', '%'.$request->value.'%')
                    ->orWhere($request->key2, 'like', '%'.$request->value2.'%')
                    ->distinct()->get();
            }
            else if(!$request->key3 && !$request->key2 && $request->key) {
                return $this->model
                    ->where($request->key, 'like', '%'.$request->value.'%')
                    ->distinct()->get();
            }
            else {
                return null;
            }
        }
        else if($request->first) {
            return $this->model->where($request->key, $request->value)->first();
        }
        else {
            return $this->model->where($request->key, $request->value)->get();
        }
    }

    public function random($resultsNumber)
    {
        return $this->model->inRandomOrder()->limit($resultsNumber)->get();
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
