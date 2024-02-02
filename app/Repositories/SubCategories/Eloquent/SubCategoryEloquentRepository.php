<?php

namespace App\Repositories\SubCategories\Eloquent;
use App\Repositories\BaseEloquentRepository;
use App\Repositories\SubCategories\SubCategoryRepository;
use Illuminate\Support\Facades\Storage;

class SubCategoryEloquentRepository extends BaseEloquentRepository implements SubCategoryRepository{

    public function adminCreate($data){

        if(isset($data['image']) && $data['image']){
            $path = $this->saveImage($data['image'],'SubCategories');
            $data['image'] = $path;
        }
        $data['user_id'] = auth()->id();
        $this->create($data);

    }

    public function adminUpdate($data , $modal){
        $data['user_id'] = auth()->user()->id;
        $oldImage = $modal->image;
        if ($data['image'] != $oldImage) {
        $data['image'] = $this->saveImage($data['image'], 'SubCategories');
        Storage::disk('public')->delete($oldImage ?? '');
        }
    }
}
