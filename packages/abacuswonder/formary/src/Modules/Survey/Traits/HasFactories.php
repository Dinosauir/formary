<?php

namespace AbacusWonder\Formary\Modules\Survey\Traits;

use AbacusWonder\Formary\Modules\Survey\Contracts\DataInterface;

trait HasFactories
{
    public static function createModelFromData(DataInterface $data): self
    {
        $model = new self;

        $model->name = $data->name;
        $model->description = $data->description;
        $model->order = $data->order;

        return $model;
    }

    public function updateModelFromData(DataInterface $data): void
    {
        $this->name = $data->name;
        $this->description = $data->description;
        $this->order = $data->order;
    }
}
