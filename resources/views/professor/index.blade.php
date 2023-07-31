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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-center mt-2">Lista de Professores</h1>
        <br>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">

                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            {{-- <th scope="col">ID</th> --}}
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    @foreach ($teachers as $teacher)
                        <tbody>
                            <tr>
                                {{-- <td>{{ $teacher->id }}</td> --}}
                                <td>{{ $teacher->nome }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ formatTelefone($teacher->telefone) }}</td>
                                <td>
                                    <a href="{{ route('professor.show', [$teacher->id]) }}"
                                        class="btn btn-success mr-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('professor.edit', [$teacher->id]) }}" class="btn btn-info mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="d-flex justify-content-end">
                    {!! $teachers->links() !!}
                </div>

                <a href="{{ route('professor.create') }}" class="btn btn-primary">Cadastrar Professor</a>
            </div>


            <div class="col-1"></div>

        </div>
    </main>
</div>
</body>

{{-- A_S Footer --}}
@include('layouts.footer')

{{-- A_S Footer JS --}}
@include('layouts.footer_js')

