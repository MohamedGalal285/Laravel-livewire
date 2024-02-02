<?php

namespace App\Repositories\SubCategories;
use App\Repositories\BaseRepositories;

interface SubCategoryRepository extends BaseRepositories{

    public function adminCreate($data);
    public function adminUpdate($data , $modal);

}
