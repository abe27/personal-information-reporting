<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id');
            $table->string('address_1');
            $table->longText('address_2')->nullable();
            $table->uuid('country_id');
            $table
                ->enum('status', ['-', 'Seft', 'Rent'])
                ->nullable()
                ->default('-');
            $table
                ->string('tel_no', 55)
                ->nullable()
                ->default('-');
            $table
                ->string('mobile_no', 55)
                ->nullable()
                ->default('-');
            $table
                ->boolean('is_status')
                ->nullable()
                ->default(false);
            $table->timestamps();
            $table
                ->foreign('profile_id')
                ->reference('id')
                ->on('positions')
                ->cascadeDelete();
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
        Schema::dropIfExists('employee_addresses');
    }
}
