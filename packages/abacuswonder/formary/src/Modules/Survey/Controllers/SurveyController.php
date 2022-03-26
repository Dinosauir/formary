<?php

namespace AbacusWonder\Formary\Modules\Survey\Controllers;

use AbacusWonder\Formary\Modules\Survey\Data\SurveyData;
use AbacusWonder\Formary\Modules\Survey\Requests\SurveyRequest;
use AbacusWonder\Formary\Modules\Survey\Services\DeleteService;
use AbacusWonder\Formary\Modules\Survey\Services\StoreService;
use AbacusWonder\Formary\Modules\Survey\Services\UpdateService;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    public function __construct(
        private StoreService  $storeService,
        private UpdateService $updateService,
        private DeleteService $deleteService
    )
    {
    }

    public function store(SurveyRequest $request): int
    {
        return $this->storeService->store(SurveyData::fromRequest($request));
    }

    public function update(int $id, SurveyRequest $request): int
    {
        $this->updateService->update($id, SurveyData::fromRequest($request));

        return $id;
    }

    public function destroy(int $id): int
    {
        return $this->deleteService->delete([$id]);
    }
}
