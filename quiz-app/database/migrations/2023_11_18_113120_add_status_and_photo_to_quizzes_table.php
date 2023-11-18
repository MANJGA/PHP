<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->string('photo')->nullable(); // Photo URL, nullable because not all quizzes may have a photo
            $table->boolean('status')->default(0); // Status, default inactive (0)
        });
    }
    
    public function down()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('status');
        });
    }
    
};
