<?php namespace Stone\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{

    public function up()
    {
        Schema::create('stone_testimonials_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_allowed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stone_testimonials_testimonials');
    }

}
