<?php

namespace App\Repositories\Products;
use App\Repositories\BaseRepositories;

interface ProductRepository extends BaseRepositories{

    public function adminCreate($data);

}
