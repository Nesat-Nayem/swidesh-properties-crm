<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('full_name');
            $table->string('phone_type');
            $table->string('telephone');
            $table->string('email');
            $table->decimal('lead_value', 10, 2);
            $table->string('assigned');
            $table->string('status');
            $table->text('notes');
            $table->string('source');
            $table->string('category');
            $table->string('tags')->nullable();
            $table->date('last_contacted')->nullable();
            $table->decimal('total_budget', 10, 2);
            $table->date('target_date');
            $table->string('content_type');
            $table->string('brand_name')->nullable();
            $table->string('company_name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('website')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
