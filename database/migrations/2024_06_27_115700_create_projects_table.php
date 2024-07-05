<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->date('project_date')->nullable();
            $table->string('energy_generation')->nullable();
            $table->string('category')->nullable();
            $table->string('client_company')->nullable();
            $table->string('location')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', [0, 1])->default(1)->comment('0 => DeActive , 1 => Active');
            $table->softDeletes();
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
        Schema::dropIfExists('projects');
    }
};
