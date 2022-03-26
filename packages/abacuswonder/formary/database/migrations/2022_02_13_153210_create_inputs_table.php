<?php

use AbacusWonder\Formary\Modules\Input\Input;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable();
            $table->string('classes')->nullable();
            $table->enum('type', Input::INPUT_TYPES_DB);

            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->foreignId('survey_id')->constrained('surveys')->onDelete('cascade');
            $table->foreignId('step_id')->constrained('surveys')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inputs');
    }
};
