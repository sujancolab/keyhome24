<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('agency_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('location');
            $table->string('ad_type');
            $table->string('category');
            $table->string('property_type');
            $table->decimal('price', 10, 2);
            $table->string('address_property');
            $table->string('postal_code');
            $table->string('city');
            $table->string('canton');
            $table->integer('surface_area');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('floor');
            $table->json('features')->nullable();
            $table->text('description');
            $table->json('photos')->nullable();
            $table->json('documents')->nullable();
            $table->string('publication_duration');
            $table->string('payment_method');
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
        Schema::dropIfExists('posts');
    }
}
