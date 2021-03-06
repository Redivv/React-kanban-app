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
            $table->integer('column_number')->default(0);
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->string('title');
            $table->text('description')->nullable()->default(null);
            $table->text('validation_terms');
            $table->text('validation_comments')->nullable()->default(null);
            $table->text('notes')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('set null');
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
