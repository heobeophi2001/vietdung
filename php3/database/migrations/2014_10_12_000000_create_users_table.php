<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //bigint auto increament
            $table->string('name'); // varchar
            $table->string('email')->unique(); //duy nhất
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            //đưa vào config
            $table->integer('gender')->default(1);
            $table->integer('role')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
