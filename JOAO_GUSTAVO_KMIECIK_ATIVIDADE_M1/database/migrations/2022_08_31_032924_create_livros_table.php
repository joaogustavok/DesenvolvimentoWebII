<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('nome_livro', 45)->notNull();
            $table->string('nome_original', 75)->notNull();
            $table->string('genero_livro', 25)->notNull();
            $table->string('sinopse_livro', 500)->nullable();
            $table
                ->integer('paginas_livro')
                ->notNull()
                ->unsigned()
                ->length(11);
            $table
                ->integer('anopub_livro')
                ->notNull()
                ->unsigned()
                ->length(11);
            $table
                ->integer('editora_livro')
                ->notNull()
                ->unsigned()
                ->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
