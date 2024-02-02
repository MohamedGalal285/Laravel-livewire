<?php

namespace App\Repositories\Categories\Eloquent;
use App\Repositories\BaseEloquentRepository;
use App\Repositories\Categories\CategoryRepository;
use Illuminate\Support\Facades\Storage;

class CategoryEloquentRepository extends BaseEloquentRepository implements CategoryRepository{

    public function adminCreate($data){

        if(isset($data['image']) && $data['image']){
            $path = $this->saveImage($data['image'],'categories');
            $data['image'] = $path;
        }
        $data['user_id'] = auth()->id();
        $this->create($data);

    }

    public function adminUpdate($data , $modal){
        $data['user_id'] = auth()->user()->id;
        $oldImage = $modal->image;
        if ($data['image'] != $oldImage) {
        $data['image'] = $this->saveImage($data['image'], 'categories');
        Storage::disk('public')->delete($oldImage ?? '');
        }
    }
}
