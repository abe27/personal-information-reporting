<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id')->unsigned();
            $table->uuid('company_id')->nullable()->unsigned();
            $table->date('employee_date')->nullable();
            $table
                ->enum('emp_status', ['-', 'P', 'N'])
                ->nullable()
                ->default('-');
            $table->decimal('salary', 8, 2)->nullable()->default(0);
            $table
                ->boolean('is_status')
                ->nullable()
                ->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles')->cascadeDelete();
            $table->foreign('company_id')->references('id')->on('companies')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_job_details');
    }
}
