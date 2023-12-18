<?php

// database/migrations/xxxx_xx_xx_create_subtasks_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtasksTable extends Migration
{
    public function up()
    {
        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subtasks');
    }
}

