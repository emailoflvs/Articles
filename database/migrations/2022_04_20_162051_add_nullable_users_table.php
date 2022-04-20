<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->nullable()->change();
            $table->string('firstname')->nullable()->change();
            $table->string('surname')->nullable()->change();
            $table->string('avatar')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('sex')->nullable()->change();
            $table->boolean('showPhone')->nullable()->change();
            $table->string('experience')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
