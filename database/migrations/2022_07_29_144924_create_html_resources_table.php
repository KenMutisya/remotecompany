<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('html_resources', function (Blueprint $table) {
            $table->id();

            $table->text('snippet_description');
            $table->longText('snippet');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('html_resources');
    }
};
