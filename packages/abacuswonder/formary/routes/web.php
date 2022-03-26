<?php

//use AbacusWonder\DynamicSurvey\Modules\Step\Controllers\StepController;
//use AbacusWonder\DynamicSurvey\Modules\Survey\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function(){
    Route::get('/survey/home', function (){
        return view('formary::welcome');
    });
//    Route::get('/survey/create', [SurveyController::class, 'create'])->name('abacus.survey.create');
//    Route::get('/survey/edit/{id}', [SurveyController::class, 'edit'])->name('abacus.survey.edit');
//    Route::post('/survey/store', [SurveyController::class, 'store'])->name('abacus.survey.store');
//    Route::put('/survey/update/{id}', [SurveyController::class, 'update'])->name('abacus.survey.update');
//
//    Route::get('/step/edit/{step}', [StepController::class, 'edit'])->name('abacus.step.edit');
//    Route::put('/step/update/{step}', [StepController::class, 'update'])->name('abacus.step.update');
});
