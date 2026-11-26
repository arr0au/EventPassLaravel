<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar invitacions</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <a href="{{ route('admin.menu') }}" class="boto_tornar">
            <button type="button" class="boto_general boto_tornar">&#8592;</button>
        </a>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <h2 id="titolpetit" class="nom_apartat">Consultar invitacions</h2>
            <p id="text-petit-titol" class="desc_apartat">Revisa qui convida i les dades de cada convidat.</p>
        </header>

        <form method="GET" action="{{ route('convidat.index') }}">
            <input
                type="search"
                name="buscar"
                value="{{ $buscar }}"
                class="input_general input_text"
                placeholder="Cerca un nom o DNI/NIE de la relació"
            >
        </form>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Invitacions</h3>
                <span class="badge comptador_de_indicacio">
                    {{ $convidats->count() }} {{ $convidats->count() === 1 ? 'relació' : 'relacions' }}
                </span>
            </header>
            <ul>
                @forelse ($convidats as $convidat)
                    <li
                        class="objecte_llista {{ $seleccionat?->id === $convidat->id ? 'seleccionat' : '' }}"
                        style="cursor: pointer;"
                        onclick="window.location='{{ route('convidat.index', ['buscar' => $buscar, 'seleccionat' => $convidat->id]) }}'"
                    >
                        <h4>{{ $convidat->alumne?->Nom }} {{ $convidat->alumne?->Cognom }}</h4>
                        <span>{{ $convidat->alumne?->DNI_NIE }}</span>
                        <span>{{ $convidat->Nom }} {{ $convidat->Cognom }}</span>
                        <span>{{ $convidat->DNI_NIE }}</span>
                    </li>
                @empty
                    <li class="alert_msg">No s'han trobat invitacions.</li>
                @endforelse
            </ul>
        </section>

        @if ($seleccionat)
            <section class="div_general">
                <header>
                    <h3 class="text_fitxa">Detall de la invitació</h3>
                    <span class="badge">Seleccionada</span>
                </header>

                <article>
                    <strong class="text_indicacio">Alumne/a convidador/a</strong>
                    <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">{{ $seleccionat->alumne?->Nom }} {{ $seleccionat->alumne?->Cognom }}</span></p>
                    <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">{{ $seleccionat->alumne?->DNI_NIE }}</span></p>
                    <p><strong class="clau_text">Invitacions:</strong> <span class="valor_text">{{ $seleccionat->alumne?->Invitacions_Disponibles ?? 0 }} de 4 disponibles</span></p>
                </article>

                <article>
                    <strong class="text_indicacio">Persona convidada</strong>
                    <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">{{ $seleccionat->Nom }} {{ $seleccionat->Cognom }}</span></p>
                    <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">{{ $seleccionat->DNI_NIE }}</span></p>
                    <p><strong class="clau_text">Correu:</strong> <span class="valor_text">{{ $seleccionat->Correu }}</span></p>
                </article>

                <p class="alert_msg">Cada alumne pot tenir un màxim de 4 invitacions. La consulta mostra la relació entre alumne i convidat.</p>
            </section>
        @endif
    </main>
</body>
</html>