{{-- A_S Header --}}
@include('layouts.header')
@php include(app_path('Helpers/FormatHelper.php')) @endphp

<body>

    <header>

        {{-- A_S Menu Lateral --}}
        @include('layouts.menu')
    </header>
<div class="container">
    <main>
        <h1 class="text-center mt-5">Dados do Professor: {{ $teacher->nome }}</h1>
        <div class="mb-3">
            <label for="nomeCompleto" class="form-label">Nome Completo:</label>
            <p class="form-control-static">{{ $teacher->nome }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <p class="form-control-static">{{ $teacher->email }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="cpf" id="cpf" class="form-label">CPF:</label>
            <p class="form-control-static">{{ formatCpf($teacher->cpf) }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <p class="form-control-static">{{ formatTelefone($teacher->telefone) }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="curriculo" class="form-label">Currículo:</label>
            <p class="form-control-static">{{ $teacher->curriculo }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="vinculo" class="form-label">Vínculo:</label>
            <p class="form-control-static">{{ $teacher->vinculoProfessor }}</p>
        </div><hr>
        <div class="mb-3">
            <label for="escolaridade" class="form-label">Escolaridade:</label>
            <p class="form-control-static">{{ $teacher->escolaridade }}</p>
        </div>
        <a href="{{ route('professor.edit', [$teacher->id]) }}" class="btn btn-info mr-1 text-end">
            <i class="fas fa-pen">EDITAR</i>
        </a>
    </main>
</div>

</td>
</body>


@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')
