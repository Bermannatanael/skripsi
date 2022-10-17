<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTeachersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_teachers_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("teacher_id");
            $table->foreign("teacher_id")->references("id")
                ->on("teachers");
            $table->unsignedBigInteger("skill_id");
            $table->foreign("skill_id")->references("id")
                ->on("skills");
            $table->unsignedBigInteger("skill_level_id");
            $table->foreign("skill_level_id")->references("id")
                ->on("skill_levels");
            $table->unsignedBigInteger("works_types_id");
            $table->foreign("works_types_id")->references("id")
                ->on("works_types");
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
        Schema::dropIfExists('user_teachers_profiles');
    }
}
