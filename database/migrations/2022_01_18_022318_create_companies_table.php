<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('contact')->nullable();
            $table->string('company')->unique();
            $table->string('addres_1')->nullable();
            $table->longText('addres_2')->nullable();
            $table->uuid('country_id');
            $table->string('email')->nullable();
            $table->string('tel_no', 55)->nullable()->default('-');
            $table->timestamps();
            $table
                ->foreign('country_id')
                ->reference('id')
                ->on('zip_codes')
                ->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
