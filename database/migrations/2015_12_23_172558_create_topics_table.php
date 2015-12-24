<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //topicsテーブルを生成する
        Schema::create('topics', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->date('published');
            $table->timestamps();
            //Add columns for Laravel Stapler 
            $table->string('eyecatch_file_name', 256);
            $table->integer('eyecatch_file_size');
            $table->string('eyecatch_content_type', 256);
            $table->timestamp('eyecatch_updated_at');

            /*
              JFYI:laravel-stapler用のカラム追加
              カラム名：eyecatch_file_name => varchar(256)
              カラム名：eyecatch_file_size => int(11)
              カラム名：eyecatch_comtent_type => varchar(256)
              カラム名：eyecatch_updated_at => timestamp
            */

            /*
              JFYI:カラムの詳細設定をする場合はこちらを参考にしてみてください
              http://laravel.com/docs/5.1/migrations#writing-migrations
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //topicsテーブルを削除する
        Schema::drop('topics');
    }
}
