<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('link_resources', function (Blueprint $table) {
            $table->id();

            $table->string('link');
            $table->boolean('openinnewtab');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('link_resources');
    }
};
