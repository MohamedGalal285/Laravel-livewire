<?php

namespace App\Repositories\Products\Eloquent;
use App\Repositories\BaseEloquentRepository;
use App\Repositories\Products\ProductRepository;
use Illuminate\Support\Facades\Storage;

class ProductEloquentRepository extends BaseEloquentRepository implements ProductRepository{

    public function adminCreate($data){

        if(isset($data['image']) && $data['image']){
            $path = $this->saveImage($data['image'],'products');
            $data['image'] = $path;
        }
        $data['user_id'] = auth()->id();
        $this->create($data);
    }

    public function adminUpdate($data , $model){
        $data['user_id'] = auth()->user()->id;
        $oldImage = $model->image;
            if ($data['image'] != $oldImage) {
                $data['image'] = $this->saveImage($data['image'], 'products');
                Storage::disk('public')->delete($oldImage ?? '');
            }else{
                unset($data['image']);
            }
            $this->update($data,$model);
        }
    }
