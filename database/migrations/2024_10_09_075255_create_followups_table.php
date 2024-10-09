<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowupsTable extends Migration
{
    public function up()
    {
        Schema::create('followups', function (Blueprint $table) {
            $table->id();
            $table->string('parent_type');
            $table->string('organization_name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('duration');
            $table->string('outcome')->nullable();
            $table->text('description')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('followups');
    }
}
