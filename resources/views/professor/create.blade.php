{{-- A_S Header --}}
@include('layouts.header')

<body class="app app-404-page">
    <header>

        {{-- A_S Menu Lateral --}}
        @include('layouts.menu')
    </header>
    <main>

        <h1 class="text-center mt-5">Cadastro Professor</h1>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="{{ route('professor.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="fw-bold" for="title">Nome do Professor</label>
                        <input class="form-control" name="nome" id="nome" required type="text"
                            placeholder="Digite o nome do Professor" />
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="fw-bold" for="cpf">CPF do Professor</label> <input class="form-control"
                            name="cpf" id="cpf" required type="text"
                            placeholder="Digite o CPF do Professor (Somente Números)" maxlength="14" required/>
                        <br>
                    </div>

                    <div class="form-group">
                        <label class="fw-bold" for="telefone">Telefone</label> <input class="form-control"
                            name="telefone" id="telefone" required type="text"
                            placeholder="Digite o telefone do Professor (Somente Números)" />
                        <br>
                    </div>

                    <div clas
                    s="form-group">
                        <label class="fw-bold" for="email">E-mail do Professor</label> <input class="form-control"
                            name="email" id="email" required type="text"
                            placeholder="Digite o e-mail do Professor" />
                        <br>
                    </div>

                    <div class="form-group">
                        <label class="text LabelObjetivoGeral fw-bold" style="text-align: left">Mini
                            Currículo</label>
                        <textarea class="form-control form-control" style="min-height: 250px" name="curriculo" id="curriculo"
                            placeholder="Digite aqui o mini currículo do professor" required></textarea>
                        <p></p>
                    </div>

                    <div class="form-group"><label class="fw-bold" for="title">Vínculo do Professor</label><br />
                        <input name="vinculoProfessor" id="vinculoProfessor" type="radio" value="Servidor" />&nbsp;
                        <label for="vinculoProfessor" class="form-check-label">
                            Servidor&nbsp;&nbsp;&nbsp;
                        </label>
                        <input name="vinculoProfessor" id="vinculoProfessor" type="radio" value="Não Servidor" required />
                        <label for="vinculoProfessor" class="form-check-label">
                            Não Servidor
                        </label>
                    </div><br>

                    <div class="form-group"><label class="fw-bold" for="title">Escolaridade</label><br />
                        <input name="escolaridade" id="escolaridade" type="radio" value="Educação Infantil" />&nbsp;
                        <label for="escolaridade" class="form-check-label">
                            Educação Infantil&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Ensino Fundamental" required />
                        <label for="escolaridade" class="form-check-label">
                            Ensino Fundamental&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Ensino Médio" required />
                        <label for="escolaridade" class="form-check-label">
                            Ensino Médio&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Superior(Graduação)" required />
                        <label for="escolaridade" class="form-check-label">
                            Superior (Graduação)&nbsp;&nbsp;&nbsp;
                        </label><br>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Especialização / MBA" />&nbsp;
                        <label for="escolaridade" class="form-check-label">
                            Especialização / MBA&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Mestrado" required />
                        <label for="escolaridade" class="form-check-label">
                            Mestrado&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Doutorado" required />
                        <label for="escolaridade" class="form-check-label">
                            Doutorado&nbsp;&nbsp;&nbsp;
                        </label>

                        <input name="escolaridade" id="escolaridade" type="radio" value="Pós Doutorado" required />
                        <label for="escolaridade" class="form-check-label">
                            Pós-Doutorado&nbsp;&nbsp;&nbsp;
                        </label>
                    </div><br>

                    <input type="submit" class="btn btn-success" value="Cadastrar Professor">
                </form>
            </div>
            <div class="col-3"></div>
    </main>
</body>


{{-- A_S Footer --}}
@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')
<script>
    $(document).ready(function() {
        // Quando o campo de entrada for modificado, formatar e limitar o CPF com os separadores
        $("#cpf").on("input", function() {
          let cpfValue = $(this).val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo

          // Limitar o campo para 11 caracteres (tamanho do CPF sem os separadores)
          if (cpfValue.length > 11) {
            cpfValue = cpfValue.slice(0, 11);
          }

          // Formatar o CPF com os separadores
          if (cpfValue.length >= 3) {
            cpfValue = cpfValue.replace(/^(\d{3})(\d)/, "$1.$2");
          }
          if (cpfValue.length >= 6) {
            cpfValue = cpfValue.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3");
          }
          if (cpfValue.length >= 9) {
            cpfValue = cpfValue.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, "$1.$2.$3-$4");
          }

          $(this).val(cpfValue);
        });

        // Quando o formulário for enviado, remover os separadores antes do envio
        $("form").submit(function() {
          const cpfValue = $("#cpf").val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo
          $("#cpf").val(cpfValue);
        });
      });
    </script>
