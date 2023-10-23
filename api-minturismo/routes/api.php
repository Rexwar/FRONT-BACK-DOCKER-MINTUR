<?php

use App\Http\Controllers\Establishments\EstablishmentController;
use App\Http\Controllers\Establishments\EstablishmentTypeController;
use App\Http\Controllers\Establishments\ResultsController;
use App\Http\Controllers\Forms\CatalogGeographicClassifierController;
use App\Http\Controllers\Forms\ComponentController;
use App\Http\Controllers\Forms\FormController;
use App\Http\Controllers\Forms\QuestionController;
use App\Http\Controllers\Forms\SubTopicController;
use App\Models\Forms\CatalogGeographicClassifier;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'form'
], function () {
    Route::get('/', [FormController::class, 'getAll']);
    Route::post('/', [FormController::class, 'store']);
    Route::delete('/{id}', [FormController::class, 'destroy']);
    Route::get('/{id}', [FormController::class, 'show']);
    Route::put('/{id}', [FormController::class, 'update']);
    Route::get('/show/active', [FormController::class, 'showActiveForm']);
});

Route::group(['prefix' => 'question', 'middleware' => 'api'], function () {
    Route::get('/', [QuestionController::class, 'getAll']);
    Route::post('/', [QuestionController::class, 'store']);
    Route::get('/questions', [QuestionController::class, 'getQuestionsFromFormActive']);
    Route::delete('/{id}', [QuestionController::class, 'destroy']);
    Route::get('/{id}', [QuestionController::class, 'show']);
    Route::put('/{id}', [QuestionController::class, 'update']);
});

Route::group(['prefix' => 'component', 'middleware' => 'api'], function () {
    Route::get('/', [ComponentController::class, 'getAll']);
    Route::post('/', [ComponentController::class, 'store']);
    Route::delete('/{id}', [ComponentController::class, 'destroy']);
    Route::get('/{id}', [ComponentController::class, 'show']);
    Route::put('/{id}', [ComponentController::class, 'update']);
});

Route::group(['prefix' => 'sub-topic', 'middleware' => 'api'], function () {
    Route::get('/', [SubTopicController::class, 'getAll']);
    Route::post('/', [SubTopicController::class, 'store']);
    Route::delete('/{id}', [SubTopicController::class, 'destroy']);
    Route::get('/{id}', [SubTopicController::class, 'show']);
    Route::put('/{id}', [SubTopicController::class, 'update']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'establishment'
], function () {
    Route::get('/', [EstablishmentController::class, 'getAll']);
    Route::get('/getAllResults', [EstablishmentController::class, 'getAllResults']);
    Route::get('/last-day', [EstablishmentController::class, 'getAllLastDay']);
    Route::get('/count-no-complete', [EstablishmentController::class, 'getEstablishmentsNoCompletedForm']);
    Route::get('/grouped-by-type', [EstablishmentController::class, 'getAllGroupedByType']);
    Route::get('/data-excel', [EstablishmentController::class, 'getAllForExcel']);
    Route::post('/', [EstablishmentController::class, 'store']);
    Route::delete('/{id}', [EstablishmentController::class, 'destroy']);
    Route::get('/{id}', [EstablishmentController::class, 'show']);
    Route::put('/{id}', [EstablishmentController::class, 'update']);
    Route::post('/update-intent/{id}', [EstablishmentController::class, 'updateIntent']);
    Route::get('/establishment-active/{email}', [EstablishmentController::class, 'showActiveEstablishment']);
    Route::get('/establishment-results/{id}', [EstablishmentController::class, 'chargeResultsToDownload']);
    Route::get('/establishment-active-form/{email}', [EstablishmentController::class, 'showActiveEstablishmentForm']);
    Route::get('/establishment-percentage/{idEstablishment}/{idIntent}', [EstablishmentController::class, 'showPercentageForm']);
    Route::get('/establishment-questions-subtopic/{subTopicResultId}/{idEstablishment}/{idIntent}', [EstablishmentController::class, 'showQuestionsOfSubTopic']);
    Route::get('/establishment-questions-subtopic-validate/{subTopicResultId}/{idEstablishment}/{idIntent}', [EstablishmentController::class, 'showQuestionsOfSubTopicValidate']);
    Route::get('/establishment-questions-results/{subTopicResultId}/{idEstablishment}/{idIntent}', [EstablishmentController::class, 'showQuestionsResults']);
});

Route::prefix('establishmentType')->group(function () {
    Route::get('/', [EstablishmentTypeController::class, 'getAll']);
});

Route::group(['prefix' => 'results', 'middleware' => 'api'], function () {
    Route::get('/', [ResultsController::class, 'getAll']);
    Route::put('/{id}', [ResultsController::class, 'update']);
});

Route::prefix('geographic-classifier')->group(function () {
    Route::get('/', [CatalogGeographicClassifierController::class, 'getAll']);
    Route::get('/provinces', [CatalogGeographicClassifierController::class, 'getAllProvinces']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});




