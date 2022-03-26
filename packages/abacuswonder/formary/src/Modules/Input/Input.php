<?php

namespace AbacusWonder\Formary\Modules\Input;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property int $question_id
 * @property int $survey_id
 * @property int $step_id
 * @property string $label
 * @property string $classes
 * @property string $type
 */
class Input extends Model
{
    public const INPUT_TYPES = [
        'text' => 'text',
        'radio' => 'radio',
        'select' => 'select',
        'switch' => 'switch',
        'checkbox' => 'checkbox',
        'text-area' => 'textarea',
        'file' => 'file',
        'date' => 'date',
        'signature' => 'signature'
    ];

    public const INPUT_TYPES_DB = [
        'text',
        'radio',
        'select',
        'switch',
        'checkbox',
        'textarea',
        'file',
        'date',
        'signature'
    ];

    protected $guarded = ['id'];
}
