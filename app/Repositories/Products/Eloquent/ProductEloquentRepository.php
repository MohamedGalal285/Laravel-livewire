<?php

namespace App\Repositories\Products\Eloquent;
use App\Repositories\BaseEloquentRepository;
use App\Repositories\Products\ProductRepository;

class ProductEloquentRepository extends BaseEloquentRepository implements ProductRepository{

    public function adminCreate($data){

        if(isset($data['image']) && $data['image']){
            $path = $this->saveImage($data['image'],'products');
            $data['image'] = $path;
        }
        $data['user_id'] = auth()->id();
        $this->create($data);

    }
}
