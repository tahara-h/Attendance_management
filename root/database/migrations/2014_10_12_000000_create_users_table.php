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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name',100);
            $table->string('first_name',100);
            $table->string('last_name_kana',100);
            $table->string('first_name_kana',100);
            $table->integer('role_id',11);
            // $table->integer('prefecture')->nulladle($value = true);
            // $table->string('address1',255)->nulladle($value = true);
            // $table->string('address2',255)->nulladle($value = true);
            $table->string('email',255);
            $table->string('password');
            $table->tinyInteger("locked_flg")->default(0);
            $table->integer("error_count")->unsigned()->default(0);
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
        Schema::dropIfExists("users");
    }
};
