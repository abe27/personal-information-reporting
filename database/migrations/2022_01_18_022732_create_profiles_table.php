<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('empcode')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nick_name')->nullable();
            $table
                ->enum('sexual', ['-', 'F', 'M'])
                ->nullable()
                ->default('-');
            $table
                ->enum('status', ['-', 'S', 'M', 'D'])
                ->nullable()
                ->default('-');
            $table->date('marry_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('signal_url')->nullable();
            $table
                ->boolean('is_status')
                ->nullable()
                ->default(false);
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
        Schema::dropIfExists('profiles');
    }
}
