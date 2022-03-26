<?php

namespace AbacusWonder\Formary\Modules\Survey\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property Step[] $steps
 * @property Question[] $questions
 */
trait HasRelations
{
    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
