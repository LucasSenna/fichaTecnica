{{-- A_S Header --}}
@include('layouts.header')

<body class="app app-404-page">
    <header>

        {{-- A_S Menu Lateral --}}
        @include('layouts.menu')
    </header>
    <main>
        <h1 class="text-center mt-5">Cadastro Ficha Técnica</h1>
        <div class="container-fluid">


            <div class="row">

                <div class="col-2"></div>
                <div class="col-md-8">
                    <p>
                        <!-- Título do evento -->
                    <div class="form-group"><label class="fw-bold" for="titulo">* Título do Evento:</label> <input
                            class="form-control" name="titulo" id="titulo" required type="text"
                            placeholder="Digite o título do evento" /></div><br>

                    <!-- Tipo do evento -->
                    <div class="form-group"><label class="fw-bold" for="tipoEvento">* Tipo do Evento:</label><br />
                        <input name="tipoEvento" id="tipoEvento" type="radio" value="curso" /> Curso &nbsp; &nbsp;
                        <input name="tipoEvento" type="radio" value="seminario" required /> Seminário &nbsp; &nbsp;
                        <input name="tipoEvento" type="radio" value="palestra" required /> Palestra &nbsp; &nbsp;
                        <input name="tipoEvento" type="radio" value="congresso" required /> Congresso &nbsp; &nbsp;
                        <input name="tipoEvento" type="radio" value="oficina" required /> Oficina &nbsp; &nbsp;
                        <input name="tipoEvento" type="radio" value="workshop" required /> Workshop
                    </div><br>

                    <!-- Modalidade do evento -->
                    <div class="form-group"><label class="fw-bold" for="modalidadeEvento">* Modalidade do
                            Evento:</label><br />
                        <input name="modalidadeEvento" id="modalidadeEvento" type="radio" value="presencial" required /> Presencial &nbsp;
                        &nbsp;
                        <input name="modalidadeEvento" id="modalidadeEvento" type="radio" value="online" required /> Online &nbsp; &nbsp;
                        <input name="modalidadeEvento" id="modalidadeEvento" type="radio" value="ead" required /> EAD &nbsp; &nbsp;
                        <input name="modalidadeEvento" id="modalidadeEvento" type="radio" value="hibrido" required /> Híbrido &nbsp; &nbsp;
                    </div><br>


                    <!-- Eixo Temático -->
                    <div class="form-group"><label class="fw-bold" for="eixoTematico">* Eixo Temático:</label><br />
                        <select class="form-select" required>
                            <option name="eixoTematico" id="eixoTematico" type="radio" value="administrativoFinanceiro"> Administrativo
                                Financeira</option>
                            <option name="eixoTematico" id="eixoTematico"   type="radio" value="gestaoEDesenvolvimentoDePessoas"> Gestão e
                                Desenvolvimento de Pessoas</option>
                            <option name="eixoTematico" id="eixoTematico" type="radio" value="planejamentoOrcamentoFinancas">
                                Planejamento, Orçamento e Finanças</option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="tecnologiaDaInformacaoComunicacao">
                                Tecnologia da Informação e Comunicação</option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="politicasPublicas"> Políticas Públicas
                            </option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="desenvolvimentoDustentavel">
                                Desenvolvimento Sustentável </option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="modernizacaoOrganizacional"> Modernização
                                Organizacional </option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="previdencia"> Previdência </option>
                            <option name="eixoTematico" id="eixoTematico"  type="radio" value="controleInterno"> Controle Intterno
                            </option>
                        </select>
                    </div><br>

                    <!-- Objetivo Geral -->
                    <label class="text LabelObjetivoGeral fw-bold"
                    style="text-align: left">* Objetivo Geral</label>
                    <textarea class="form-control form-control" style="min-height: 200px" name="objetivoGeral"  id="objetivoGeral" placeholder="Digite aqui o objetivo geral do evento"
                        required></textarea>
                    <p></p>

                    <!-- Público Alvo -->
                    <label class="text LabelPublicoAlvo fw-bold" style="text-align: left">* Público Alvo</label>
                    <textarea class="form-control form-control" style="min-height: 100px"  name="publicoAlvo" id="publicoAlvo" placeholder="Digite aqui o público alvo do evento"
                        required></textarea>
                    <p></p>


                    <!-- Período -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group date"><label for="dataInicioEvento"
                                    class="fw-bold
                                fw-bold">* Data de início do
                                    evento:</label>
                                <input class="form-control" name="dataInicioEvento" id="dataInicioEvento" required type="date" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group date"><label for="dataFimEvento"
                                    class="fw-bold
                                fw-bold">* Data de encerramento do
                                    evento:</label>
                                <input class="form-control" name="dataFimEvento" id="dataFimEvento" required type="date" />
                            </div>
                        </div>
                    </div>
                    <p></p>

                    <!-- Horário -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group date"><label for="horaInicioEvento"
                                    class="fw-bold
                                fw-bold">* Hora do início do
                                    evento:</label>
                                <input class="form-control" name="horaInicioEvento" id="horaInicioEvento" required type="time" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group date"><label for="horaFimEvento"
                                    class="fw-bold
                                fw-bold">* Hora do fim do
                                    evento:</label>
                                <input class="form-control" name="horaFimEvento" id="horaFimEvento" required type="time" />
                            </div>
                        </div>
                    </div>
                    <p></p>

                    <div class="row">
                        <!-- Carga Horária -->
                        <div class="col-md-3">
                            <div class="form-group"><label for="cargaHoraria" class="fw-bold fw-bold">* Carga Horária
                                    do evento:</label>
                                <div class="input-group mb-2">
                                    <input required type="number" class="form-control" id="cargaHoraria"
                                        placeholder="">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">h/a</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Local do Evento -->
                        <div class="col-md-9">
                            <div class="form-group"><label for="localEvento" class="fw-bold fw-bold">* Local do
                                    evento:</label>
                                <input class="form-control" name="localEvento" id=""localEvento required type="text"
                                    placeholder="Digite aqui o local do Evento" />
                            </div>
                        </div>
                    </div>
                    </p>

                    <div class="row">
                        <div class="col-md-3">
                            <!-- Vagas Ofertadas -->
                            <div class="form-group"><label for="vagas"
                                    class="fw-bold
                                    fw-bold">* Vagas
                                    Ofertadas:</label>
                                <input class="form-control" name="vagas" id="vagas" required type="number" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- Certificação -->
                            <div class="form-group"><label class="fw-bold" for="certificacao">*
                                    Certificação:</label><br />
                                <input name="certificacao" id="certificacao" type="radio" value="Sim" required />
                                Sim &nbsp; &nbsp;
                                <input name="certificacao" id="certificacao" type="radio" value="Nao" required />
                                Não &nbsp; &nbsp;
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Órgão Demandante / Patrick-->
                            <div class="form-group"><label class="fw-bold" for="orgaoDemandante">* Órgão
                                    Demandante:</label><br />
                                <select class="form-select" required>
                                    <option name="eixoTematico" type="radio" value=""> Órgão 1 </option>
                                    <option name="eixoTematico" type="radio" value=""> Órgão 2 </option>
                                    <option name="eixoTematico" type="radio" value=""> Órgão 3 </option>
                                    <option name="eixoTematico" type="radio" value=""> Órgão 4 </option>
                                </select>
                            </div><br>
                        </div>
                    </div>

                    <hr>
                    <h2 class="text-center">
                        Conteúdo Programático
                    </h2>

                    <section id="modulos">
                        <form class="form_M1" id="modulo01">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 01</h4>

                                <label class="text LabeltituloContMod01 fw-bold" for="tituloContMod01"
                                    style="text-align: left">Título - Módulo 01</label>
                                <input class="form-control form-control" name="tituloContMod01" id="tituloContMod01" placeholder="Digite aqui o título do módulo 01"/><br>

                                <label class="text fw-bold" for="id_professorMod01" style="text-align: left">Título - Módulo 01</label>
                                <select name="id_professorMod01" id="id_professorMod01" class="form-control">

                                </select>

                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group"><label for="chContMod01"
                                                class="fw-bold">Carga Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="chContMod01" id="chContMod01" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group date"><label for="dataInicioCont01"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont01" id="dataInicioCont01" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group date"><label for="dataFimCont01"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont01" id="dataFimCont02" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod01 fw-bold" for="conteudoContMod01"
                                    style="text-align: left">Conteúdo - Módulo 01</label>
                                <textarea class="form-control" style="min-height: 200px" name="conteudoContMod01" id="conteudoContMod01" placeholder="Digite aqui o conteúdo do módulo 01" required></textarea><br>

                                <label class="text LabelresultadosContMod01 fw-bold" for="resultadosContMod01"
                                    style="text-align: left">Resultados esperados - Módulo 01</label>
                                <textarea class="form-control" style="min-height: 200px" name="resultadosContMod01" id="resultadosContMod01" placeholder="Digite aqui os resultados do módulo 01"></textarea><br>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo02">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 02</h4>

                                <label class="text LabeltituloModulo02 fw-bold" for="tituloModulo02"
                                    style="text-align: left">Título - Módulo 02</label>
                                <textarea class="form-control" name="tituloModulo02" placeholder="Digite aqui o título do módulo 02"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo02"
                                                class="fw-bold">Carga Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo02" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont02"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont02" id="dataInicioCont02" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont02"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont02" id="dataFimCont02" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod02 fw-bold" for="conteudoContMod02"
                                    style="text-align: left">Conteúdo - Módulo 02</label>
                                <textarea class="form-control"style="min-height: 200px"  name="conteudoContMod02" id="conteudoContMod02" placeholder="Digite aqui o conteúdo do módulo 02"></textarea><br>

                                <label class="text LabelresultadosContMod02 fw-bold" for="resultadosContMod02"
                                    style="text-align: left">Resultados esperados - Módulo 02</label>
                                <textarea class="form-control" style="min-height: 200px" name="resultadosContMod02" id="resultadosContMod02" placeholder="Digite aqui os resultados do módulo 02"></textarea>
                                <br>
                                <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                    <select class="form-select" required>
                                        <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                        <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                        <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                        <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                    </select>
                                </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo2">Apagar Módulo
                                    02</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo03">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 03</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo03"
                                    style="text-align: left">Título - Módulo 03</label>
                                <textarea class="form-control" name="tituloModulo03" placeholder="Digite aqui o título do módulo 03"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo03"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo03" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont03"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont03" id="dataInicioCont03" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont03"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont03" id="dataFimCont03" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod03 fw-bold" for="conteudoContMod03"
                                    style="text-align: left">Conteúdo - Módulo 03</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="conteudoContMod03" id="conteudoContMod03"
                                    placeholder="Digite aqui o conteúdo do módulo 03"></textarea><br>

                                <label class="text LabelresultadosContMod03 fw-bold" for="resultadosContMod03"
                                    style="text-align: left">Resultados esperados - Módulo 03</label>
                                <textarea class="form-control form-control" name="resultadosContMod03" id="resultadosContMod03" style="min-height: 200px"
                                    placeholder="Digite aqui os resultados do módulo 03"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo3">Apagar Módulo
                                    03</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo04">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 04</h4>

                                <label class="text LabeltituloModulo04 fw-bold" for="tituloModulo04"
                                    style="text-align: left">Título - Módulo 04</label>
                                <textarea class="form-control" name="tituloModulo04" placeholder="Digite aqui o título do módulo 04"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo04"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo04" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont04"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont04" id="dataInicioCont04" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont04"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont04" id="dataFimCont04" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod04 fw-bold" for="conteudoContMod04"
                                    style="text-align: left">Conteúdo - Módulo 04</label>
                                <textarea class="form-control form-control" name="conteudoContMod04" id="conteudoContMod04" style="min-height: 200px"
                                    placeholder="Digite aqui o conteúdo do módulo 04"></textarea><br>

                                <label class="text LabelresultadosContMod04 fw-bold" for="resultadosContMod04"
                                    style="text-align: left">Resultados esperados - Módulo 04</label>
                                <textarea class="form-control form-control" name="resultadosContMod04" id="resultadosContMod04" style="min-height: 200px"
                                    placeholder="Digite aqui os resultados do módulo 04"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo4">Apagar Módulo
                                    04</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo05">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 05</h4>

                                <label class="text LabeltituloModulo05 fw-bold" for="tituloModulo05"
                                    style="text-align: left">Título - Módulo 05</label>
                                <textarea class="form-control" name="tituloModulo05" placeholder="Digite aqui o título do módulo 05"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo05"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo05" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont05"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont05" id="dataInicioCont05" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont05"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont05" id="dataFimCont05" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod05 fw-bold" for="conteudoContMod05"
                                    style="text-align: left">Conteúdo - Módulo 05</label>
                                <textarea class="form-control form-control" name="conteudoContMod05" id="conteudoContMod05" style="min-height: 200px"
                                    placeholder="Digite aqui o conteúdo do módulo 05"></textarea><br>

                                <label class="text LabelresultadosContMod05 fw-bold" for="resultadosContMod05"
                                    style="text-align: left">Resultados esperados - Módulo 05</label>
                                <textarea class="form-control form-control" name="resultadosContMod05" id="resultadosContMod05" style="min-height: 200px"
                                    placeholder="Digite aqui os resultados do módulo 05"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo5">Apagar Módulo
                                    05</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo06">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 06</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo06"
                                    style="text-align: left">Título - Módulo 06</label>
                                <textarea class="form-control" name="tituloModulo06" placeholder="Digite aqui o título do módulo 06"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo06"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo06" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont06"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont06" id="dataInicioCont06" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont06"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont06" id="dataFimCont06" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod06 fw-bold" for="conteudoContMod06"
                                    style="text-align: left">Conteúdo - Módulo 06</label>
                                <textarea class="form-control form-control" name="conteudoContMod06" id="conteudoContMod06" style="min-height: 200px"
                                    placeholder="Digite aqui o conteúdo do módulo 06"></textarea><br>

                                <label class="text LabelresultadosContMod06 fw-bold" for="resultadosContMod06"
                                    style="text-align: left">Resultados esperados - Módulo 06</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="resultadosContMod06" id="resultadosContMod06"
                                    placeholder="Digite aqui os resultados do módulo 06"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo6">Apagar Módulo
                                    06</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo07">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 07</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo07"
                                    style="text-align: left">Título - Módulo 07</label>
                                <textarea class="form-control" name="tituloModulo07" placeholder="Digite aqui o título do módulo 07"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo07"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo07" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont07"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont07" id="dataInicioCont07" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont07"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont07" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod07 fw-bold" for="conteudoContMod07"
                                    style="text-align: left">Conteúdo - Módulo 07</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="conteudoContMod07" id="conteudoContMod07"
                                    placeholder="Digite aqui o conteúdo do módulo 07"></textarea><br>

                                <label class="text LabelresultadosContMod07 fw-bold" for="resultadosContMod07"
                                    style="text-align: left">Resultados esperados - Módulo 07</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="resultadosContMod07" id="resultadosContMod07"
                                    placeholder="Digite aqui os resultados do módulo 07"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo7">Apagar Módulo
                                    07</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo08">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 08</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo08"
                                    style="text-align: left">Título - Módulo 08</label>
                                <textarea class="form-control" name="tituloModulo08" placeholder="Digite aqui o título do módulo 08"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo08"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo08" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont08"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont08" id="dataInicioCont08" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont08"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont08" id="dataFimCont08" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod08 fw-bold" for="conteudoContMod08"
                                    style="text-align: left">Conteúdo - Módulo 08</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="conteudoContMod08" id="conteudoContMod08"
                                    placeholder="Digite aqui o conteúdo do módulo 08"></textarea><br>

                                <label class="text LabelresultadosContMod08 fw-bold" for="resultadosContMod08"
                                    style="text-align: left">Resultados esperados - Módulo 08</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="resultadosContMod08" id="resultadosContMod08"
                                    placeholder="Digite aqui os resultados do módulo 08"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo8">Apagar Módulo
                                    08</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo09">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 09</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo09"
                                    style="text-align: left">Título - Módulo 09</label>
                                <textarea class="form-control" name="tituloModulo09" placeholder="Digite aqui o título do módulo 09"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo09"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo09" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont09"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont09" id="dataInicioCont09" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont09"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont09" id="dataFimCont09" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod09 fw-bold" for="conteudoContMod09"
                                    style="text-align: left">Conteúdo - Módulo 09</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="conteudoContMod09" id="conteudoContMod09"
                                    placeholder="Digite aqui o conteúdo do módulo 09"></textarea><br>

                                <label class="text LabelresultadosContMod09 fw-bold" for="resultadosContMod09"
                                    style="text-align: left">Resultados esperados - Módulo 09</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="resultadosContMod09" id="resultadosContMod09"
                                    placeholder="Digite aqui os resultados do módulo 09"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>


                                <button type="reset" class="btn btn-danger" id="ocultarModulo9">Apagar Módulo
                                    09</button>
                            </div>
                        </form>
                        <form class="form_CT" id="modulo10">
                            <div class="bs-callout bs-callout-success">
                                <h4 class="text LabelFormulario fw-bold">Módulo 10</h4>

                                <label class="text LabeltituloModulo03 fw-bold" for="tituloModulo10"
                                    style="text-align: left">Título - Módulo 10</label>
                                <textarea class="form-control" name="tituloModulo10" placeholder="Digite aqui o título do módulo 10"></textarea><br>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group"><label for="CargaHoraraiaModulo10"
                                                class="fw-bold
                                            fw-bold">Carga
                                                Horária:</label>
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="CargaHoraraiaModulo10" required
                                                    type="number" />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">h/a</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataInicioCont10"
                                                class="fw-bold">Data de início do módulo:</label>
                                            <input class="form-control" name="dataInicioCont10" id="dataInicioCont10" required
                                                type="date" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group date"><label for="dataFimCont10"
                                                class="fw-bold">Data de encerramento do módulo:</label>
                                            <input class="form-control" name="dataFimCont10" id="dataFimCont10" required
                                                type="date" />
                                        </div>
                                    </div>
                                </div><br>

                                <label class="text LabelconteudoContMod10 fw-bold" for="conteudoContMod10"
                                    style="text-align: left">Conteúdo - Módulo 10</label>
                                <textarea class="form-control form-control" style="min-height: 200px"  name="conteudoContMod10" id="conteudoContMod10"
                                    placeholder="Digite aqui o conteúdo do módulo 10"></textarea><br>

                                <label class="text LabelresultadosContMod10 fw-bold" for="resultadosContMod10"
                                    style="text-align: left">Resultados esperados - Módulo 10</label>
                                <textarea class="form-control form-control" name="resultadosContMod10" id="resultadosContMod10" style="min-height: 200px"
                                    placeholder="Digite aqui os resultados do módulo 10"></textarea><br>
                                    <div class="form-group"><label class="fw-bold" for="professor">* Professor</label><br />
                                        <select class="form-select" required>
                                            <option name="eixoTematico" type="radio" value=""> Nome 1 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 2 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 3 </option>
                                            <option name="eixoTematico" type="radio" value=""> Nome 4 </option>
                                        </select>
                                    </div><br>

                                <button type="reset" class="btn btn-danger" id="ocultarModulo10">Apagar Módulo
                                    10</button>
                            </div>
                        </form>

                        <button class="btn btn-success" id="criarModulo" type="submit">Inserir novo módulo</button>
                    </section>

                    <hr>
                    <!-- Referências / Patrick-->
                    <h2 class="text-center"> Referências </h2>

                    <label class="text LabelObjetivoGeral fw-bold" style="text-align: left">* Referências</label>
                    <textarea class="form-control form-control" style="min-height: 200px"  name="objetivoGeral" placeholder="Digite aqui as referências" required></textarea>
                    <p></p>

                    <br><br><br>
                    <div class="form-group" align="center"><button class="btn btn-lg btn-success" type="submit">
                            Enviar
                            dados </button></div>
                    </form>

                </div>
                <div class="col-2"></div>

            </div>
        </div>
    </main>
</body>


{{-- A_S Footer --}}
@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')
