<?php

namespace AbacusWonder\Formary\Modules\Survey\Data;

use AbacusWonder\Formary\Modules\Survey\Contracts\DataInterface;
use AbacusWonder\Formary\Modules\Survey\Requests\SurveyRequest;
use Spatie\LaravelData\Data;

class SurveyData extends Data implements DataInterface
{
    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?int $order = null,
    )
    {
    }

    public static function fromRequest(SurveyRequest $request): self
    {
        return new self(
            name: $request->input('name'),
            description: $request->input('description'),
            order: $request->input('order')
        );
    }
}
