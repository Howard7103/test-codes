<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('posts',function(Blueprint $table){
            $table->tinyInteger('status')->default(0);   //文章的狀態,0未知 / 1通過 / -1刪除
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts',function(Blueprint $table){
            $table->dropColumn('status');    //刪除列
        });
    }
}
