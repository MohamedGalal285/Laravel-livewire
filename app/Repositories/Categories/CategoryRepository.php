<?php

namespace App\Repositories\Categories;
use App\Repositories\BaseRepositories;

interface CategoryRepository extends BaseRepositories{

    public function adminCreate($data);
    public function adminUpdate($data , $modal);

}
