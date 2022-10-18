<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 80 );
            $table->date('birth')->nullable();
            $table->date('proposal')->nullable();
            $table->date('acceptance')->nullable();
            $table->foreignId('category_id')->default(3);
            $table->foreignId('nationality_id')->default(1);
            $table->foreignId('marital_id')->default(1);
            $table->string('gender' , 1)->default('M');
            $table->string('comment' , 2000 )->nullable();
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
        Schema::dropIfExists('persons');
    }
}
