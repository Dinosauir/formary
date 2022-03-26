<?php

namespace AbacusWonder\Formary\Modules\Survey\Services;

use AbacusWonder\Formary\Modules\Survey\Contracts\DataInterface;
use AbacusWonder\Formary\Modules\Survey\Survey;

class UpdateService
{
    public function update(int $id,DataInterface $data): void
    {
        /** @var Survey $model */
        $model = Survey::findOrFail($id);

        $model->updateModelFromData($data);
        $model->save();
    }
}
