<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 30);
            $table->string('tipoEvento');
            $table->string('modalidadeEvento');
            $table->string('eixoTematico');
            $table->longText('objetivoGeral');
            $table->string('publicoAlvo,');
            $table->date('dataInicioEvento');
            $table->date('dataFimEvento');
            $table->time('horaInicioEvento');
            $table->time('horaFimEvento');
            $table->integer('cargaHoraria');
            $table->string('localEvento', 80);
            $table->integer('vagas');
            $table->string('certificacao');
            $table->integer('id_orgaoDemandante');
            $table->string('tituloContMod01');
            $table->integer('chContMod01');
            $table->date('dataInicioCont01');
            $table->date('dataFimCont01');
            $table->longText('conteudoContMod01');
            $table->longText('resultadosContMod01');
            $table->integer('id_professorMod01');
            $table->string('tituloContMod02')->nullable();
            $table->time('chContMod02')->nullable();
            $table->date('dataInicioCont02')->nullable();
            $table->date('dataFimCont02')->nullable();
            $table->longText('conteudoContMod02')->nullable();
            $table->longText('resultadosContMod02')->nullable();
            $table->integer('id_professorMod02')->nullable();
            $table->string('tituloContMod03')->nullable();
            $table->time('chContMod03')->nullable();
            $table->date('dataInicioCont03')->nullable();
            $table->date('dataFimCont03')->nullable();
            $table->longText('conteudoContMod03')->nullable();
            $table->longText('resultadosContMod03')->nullable();
            $table->integer('id_professorMod03')->nullable();
            $table->string('tituloContMod04')->nullable();
            $table->time('chContMod04')->nullable();
            $table->date('dataInicioCont04')->nullable();
            $table->date('dataFimCont04')->nullable();
            $table->longText('conteudoContMod04')->nullable();
            $table->longText('resultadosContMod04')->nullable();
            $table->integer('id_professorMod04')->nullable();
            $table->string('tituloContMod05')->nullable();
            $table->time('chContMod05')->nullable();
            $table->date('dataInicioCont05')->nullable();
            $table->date('dataFimCont05')->nullable();
            $table->longText('conteudoContMod05')->nullable();
            $table->longText('resultadosContMod05')->nullable();
            $table->integer('id_professorMod05')->nullable();
            $table->string('tituloContMod06')->nullable();
            $table->time('chContMod06')->nullable();
            $table->date('dataInicioCont06')->nullable();
            $table->date('dataFimCont06')->nullable();
            $table->longText('conteudoContMod06')->nullable();
            $table->longText('resultadosContMod06')->nullable();
            $table->integer('id_professorMod06')->nullable();
            $table->string('tituloContMod07')->nullable();
            $table->time('chContMod07')->nullable();
            $table->date('dataInicioCont07')->nullable();
            $table->date('dataFimCont07')->nullable();
            $table->longText('conteudoContMod07')->nullable();
            $table->longText('resultadosContMod07')->nullable();
            $table->integer('id_professorMod07')->nullable();
            $table->string('tituloContMod08')->nullable();
            $table->time('chContMod08')->nullable();
            $table->date('dataInicioCont08')->nullable();
            $table->date('dataFimCont08')->nullable();
            $table->longText('conteudoContMod08')->nullable();
            $table->longText('resultadosContMod08')->nullable();
            $table->integer('id_professorMod08')->nullable();
            $table->string('tituloContMod09')->nullable();
            $table->time('chContMod09')->nullable();
            $table->date('dataInicioCont09')->nullable();
            $table->date('dataFimCont09')->nullable();
            $table->longText('conteudoContMod09')->nullable();
            $table->longText('resultadosContMod09')->nullable();
            $table->integer('id_professorMod09')->nullable();
            $table->string('tituloContMod10')->nullable();
            $table->time('chContMod10')->nullable();
            $table->date('dataInicioCont10')->nullable();
            $table->date('dataFimCont10')->nullable();
            $table->longText('conteudoContMod10')->nullable();
            $table->longText('resultadosContMod10')->nullable();
            $table->integer('id_professorMod10')->nullable();
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
    }
};