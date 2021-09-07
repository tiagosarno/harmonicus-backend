<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbstractController extends Controller
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->model->all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fullcount()
    {
        return $this->model->fullcount();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return $this->model->findById($id);
    }

    /**
     * Search items on database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        return $this->model->findBy($request);
    }

    /**
     * Random items on database
     *
     * @param integer $resultsNumber
     * @return \Illuminate\Http\Response
     */
    public function random($resultsNumber = 1)
    {
        return $this->model->random($resultsNumber);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $res = $this->model->store($request);
            return $res;
        }
        catch(Exception $e){
            return "Error: {$e}";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        try{
            $res = $this->model->update($request, $id);
            return $res;
        }
        catch(Exception $e){
            return "Error: {$e}";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try{
            $res = $this->model->destroy($id);
            return $res;
        }
        catch(Exception $e){
            return "Error: {$e}";
        }
    }
}
