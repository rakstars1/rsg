<?php

namespace App\Repositories\MYSQL;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentInterface;

class BaseRepository implements EloquentInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model::get();
    }

    public function createAll($param)
    {
        return $this->model::create($param->all());
    }

    public function getById($id)
    {
        return $this->model::where('id', '=', $id)->first();
    }
    
    public function getJSON()
    {
        return $this->model::get()->toJson(JSON_PRETTY_PRINT);
    }
    
    public function getJSONById($id)
    {
        return $this->model::where('id', '=', $id)->first()->toJson(JSON_PRETTY_PRINT);
    }

}
