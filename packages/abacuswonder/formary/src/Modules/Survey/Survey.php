<?php

namespace AbacusWonder\Formary\Modules\Survey;

use AbacusWonder\Formary\Modules\Survey\Traits\HasFactories;
use AbacusWonder\Formary\Modules\Survey\Traits\HasRelations;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $name
 * @property ?string $description
 * @property int $order
 */
class Survey extends Model
{
    use HasFactories;
    use HasRelations;

    protected $guarded = ['id'];
}
