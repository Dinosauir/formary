<?php

namespace AbacusWonder\Formary\Modules\Survey\Services;

use AbacusWonder\Formary\Modules\Survey\Contracts\DataInterface;
use AbacusWonder\Formary\Modules\Survey\Survey;

class StoreService
{
    public function store(DataInterface $data): int
    {
        return Survey::createModelFromData($data)->id;
    }
}
