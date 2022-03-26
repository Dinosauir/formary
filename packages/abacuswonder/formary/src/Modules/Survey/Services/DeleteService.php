<?php

namespace AbacusWonder\Formary\Modules\Survey\Services;

use AbacusWonder\Formary\Modules\Survey\Survey;
use AbacusWonder\Formary\Services\BaseService;

class DeleteService
{
    public function delete(array $ids): int
    {
        return BaseService::transaction(static function() use ($ids) {
            return Survey::destroy($ids);
        });
    }
}
