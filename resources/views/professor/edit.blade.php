{{-- A_S Header --}}
@include('layouts.header')

<body class="app app-404-page">
    <header>

        {{-- A_S Menu Lateral --}}
        @include('layouts.menu')
    </header>
    <main>

        <h2 class="text-center mt-5">Atualizar Professor: {{ $teacher->nome }}</h2>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="{{ route('professor.update', $teacher->id) }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label class="fw-bold" for="title">Nome do Professor</label>
                        <input class="form-control" name="nome" value="{{ $teacher->nome }}" id="nome" required type="text"
                            placeholder="Digite o nome do Professor" />
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="fw-bold" for="cpf">CPF do Professor</label> <input class="form-control"
                            name="cpf" value="{{ $teacher->cpf }}" id="cpf" required type="text"
                            placeholder="Digite o CPF do Professor (Somente Números)" />
                        <br>
                    </div>

                    <div class="form-group">
                        <label class="fw-bold" for="telefone">Telefone</label> <input class="form-control"
                            name="telefone" value="{{ $teacher->telefone }}" id="telefone" required type="text"
                            placeholder="Digite o telefone do Professor (Somente Números)" />
                        <br>
                    </div>

                    <div clas
                    s="form-group">
                        <label class="fw-bold" for="email">E-mail do Professor</label> <input class="form-control"
                            name="email" value="{{ $teacher->email }}" id="email" required type="text"
                            placeholder="Digite o e-mail do Professor" />
                        <br>
                    </div>

                    <div class="form-group">
                        <label class="text LabelObjetivoGeral fw-bold" style="text-align: left">Mini
                            Currículo</label>
                        <textarea class="form-control form-control" style="min-height: 250px" name="curriculo" id="curriculo"
                            placeholder="Digite aqui o mini currículo do professor" required>{{ $teacher->curriculo}}</textarea>
                        <p></p>
                    </div>

                    <div class="form-group"><label class="fw-bold" for="title">Vínculo do Professor</label><br />
                        <input name="vinculoProfessor" id="vinculoProfessor" type="radio" value="Servidor" {{ $teacher->vinculoProfessor == 'Servidor' ? 'checked' : ''}} />&nbsp;
                        <label for="vinculoProfessor" class="form-check-label">
                            Servidor&nbsp;&nbsp;&nbsp;
                        </label>
                        <input name="vinculoProfessor" id="vinculoProfessor" type="radio" value="Não Servidor" {{ $teacher->vinculoProfessor == 'Não Servidor' ? 'checked' : ''}} required />
                        <label for="vinculoProfessor" class="form-check-label">
                            Não Servidor
                        </label>
                    </div><br>

                    <div class="form-group"><label class="fw-bold" for="title">Escolaridade</label><br />
                        <input name="escolaridade" type="radio" value="Educação Infantil" {{ $teacher->escolaridade == 'Educação Infantil' ? 'checked' : ''}} />&nbsp;
                        <label for="escolaridade" class="form-check-label">
                            Educação Infantil&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Ensino Fundamental" {{ $teacher->escolaridade == 'Ensino Fundamental' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Ensino Fundamental&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Ensino Médio" {{ $teacher->escolaridade == 'Ensino Médio' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Ensino Médio&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Superior(Graduação)" {{ $teacher->escolaridade == 'Superior(Graduação)' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Superior (Graduação)&nbsp;&nbsp;&nbsp;
                        </label><br>

                        <input name="escolaridade" type="radio" value="Especialização / MBA" {{ $teacher->escolaridade == 'Especialização / MBA' ? 'checked' : ''}} />&nbsp;
                        <label for="escolaridade" class="form-check-label">
                            Especialização / MBA&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Mestrado" {{ $teacher->escolaridade == 'Mestrado' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Mestrado&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Doutorado" {{ $teacher->escolaridade == 'Doutorado' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Doutorado&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" type="radio" value="Pós Doutorado" {{ $teacher->escolaridade == 'Pós Doutorado' ? 'checked' : ''}} required />
                        <label for="escolaridade" class="form-check-label">
                            Pós-Doutorado&nbsp;&nbsp;&nbsp;
                        </label>
                    </div><br>

                    <input type="submit" class="btn btn-success" value="Atualizar Professor">
                </form>
            </div>
            <div class="col-3"></div>
    </main>
</body>


{{-- A_S Footer --}}
@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')
