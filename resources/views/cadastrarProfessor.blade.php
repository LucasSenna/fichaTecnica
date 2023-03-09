{{-- A_S Header --}}
@include('layouts.header')

<body class="app app-404-page">

    <main>
        <div class="container mb-5">
            <h1 class="text-center">Cadastro Professor</h1>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="/cadastrarProfessor" method="POST">
                        @csrf
                        <div class="form-group">
                        <label class="fw-bold" for="titulo">Nome do Professor</label> 
                        <input class="form-control"
                            name="titulo" id="name" required type="text" placeholder="Digite o nome do Professor" />
                        </div>
                    <br>
                    <div class="form-group">
                    <label class="fw-bold" for="titulo">E-mail do Professor</label> <input class="form-control"
                            name="titulo" id="email" required type="text" placeholder="Digite o e-mail do Professor" />
                    <br>
                    </div>

                    <div class="form-group">
                    <label class="text LabelObjetivoGeral fw-bold" style="text-align: left">Mini Currículo</label>
                    <textarea class="form-control form-control" style="min-height: 250px" name="objetivoGeral" id="curriculum"
                        placeholder="Digite aqui o mini curríceulo do professor" required></textarea>
                    <p></p></div>

                    <div class="form-group"><label class="fw-bold" for="tipoProfessor">Tipo de Professor</label><br />
                        <input name="tipoProfessor" id="typeTeacher" type="radio" value="curso" /> Servidor &nbsp; &nbsp;
                        <input name="tipoProfessor" id="typeTeacher" type="radio" value="seminario" required /> Não Servidor &nbsp; &nbsp;
                    </div><br>
                    <button class="btn btn-success">Cadastrar</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        </div>
    </main>
</body>

{{-- A_S Footer --}}
@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')
