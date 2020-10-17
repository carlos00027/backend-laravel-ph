<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users_roles');

        Schema::create('users_roles', function (Blueprint $table) {
            $table->id();

            // $table->bigInteger("user_id")->unsigned();
            // $table->foreign("user_id")
            // ->references("id")
            // ->on("users")
            // ->onDelete("cascade")
            // ->onUpdate("cascade");

            // $table->bigInteger("rol_id")->unsigned();
            // $table->foreign("rol_id")
            // ->references("id")
            // ->on("roles")
            // ->onDelete("cascade")
            // ->onUpdate("cascade");

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
        Schema::dropIfExists('users_roles');
    }
}
