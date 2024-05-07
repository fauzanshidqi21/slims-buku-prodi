<?php
use SLiMS\Table\Schema;
use SLiMS\Table\Blueprint;
use SLiMS\Migration\Migration;

class CreateTable extends Migration
{
    function up() {
        Schema::create('buku_prodi', function(Blueprint $table) {
            $table->autoIncrement('id');
            $table->string('judul', 64)->notNull();
            $table->string('pengarang', 64)->notNull();
            $table->string('penerbit', 64)->notNull();
            $table->string('tahunterbit', 64)->notNull();
            $table->string('prodi', 64)->notNull();
            $table->timestamps();
        });
    }

    function down() {
        Schema::drop('buku_prodi');
    }
}