<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

abstract class BaseEloquentRepository implements BaseRepositories
{
    public function __construct(public $model){
        $this->model = $model;
    }
    public function all(){
        return $this->model->all();
    }
    public function create($data){
        // $data = $request->all();
        // if($request->has('image')){
        //     $data['image'] = $this->saveImage($request->image,'images/admin');
        // }
        return $this->model->create($data);
    }
    public function update($data,$model){
        return $model->update($data);
    }
    public function delete($product){
        $user = $this->model->find($product->id);
        $image = $user->image;
        if($user && $image){
            Storage::disk('public')->delete($image);
            return $user->delete();
        }
        return $user->delete();
    }
    public function saveImage($file,$path){
        $path = $file->store($path,'public');
        return 'storage/' . $path;
    }

    public function find($id){
        return $this->model->findOrFail($id);
    }
}
