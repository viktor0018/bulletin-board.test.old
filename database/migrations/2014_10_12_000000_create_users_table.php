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
            $table->id();
            $table->string('name',64);
            $table->string('surname',64);
            $table->string('middlename',64);
            $table->enum('role', ['guest', 'user','moder','admin']);
            $table->string('email',64)->unique();
            $table->string('password',128);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',32);
            $table->string('phone_access_time',128);
            $table->enum('status', ['noactive', 'active']);
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
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
