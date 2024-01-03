<?php

namespace App\Repositories;

interface BaseRepositories{
    public function all();
    public function create($data);
    public function update($request,$model);
    public function delete($product);
    public function saveImage($file,$path);
    public function find($id);
}

