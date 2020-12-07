<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name', 50);
            $table->string('task_description');
            $table->string('notes');
            $table->dateTime('date_completed_at');
            $table->boolean('is_reminded');
            $table->boolean('is_archived');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('priority_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('reminder_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
