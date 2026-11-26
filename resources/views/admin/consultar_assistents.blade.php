<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar assistents</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <a href="{{ route('esdeveniment.index') }}" class="boto_tornar">
            <button type="button" class="boto_general boto_tornar">&#8592;</button>
        </a>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <h2 id="titolpetit" class="nom_apartat">Consultar assistents</h2>
            <p id="text-petit-titol" class="desc_apartat">Consulta les persones associades a cada acte.</p>
        </header>

        <form method="GET" action="{{ route('admin.consultar_assistents') }}">
            <label class="label_text" for="esdeveniment_id">Acte</label>
            <select id="esdeveniment_id" name="esdeveniment_id" class="selector_general desplegable" onchange="this.form.submit()">
                @forelse ($esdeveniments as $esdeveniment)
                    <option value="{{ $esdeveniment->id }}" @selected($esdevenimentSeleccionat?->id === $esdeveniment->id)>
                        {{ $esdeveniment->Nom }} - {{ \Carbon\Carbon::parse($esdeveniment->Data)->format('d/m/Y') }}
                    </option>
                @empty
                    <option value="">No hi ha actes registrats</option>
                @endforelse
            </select>
            <input type="hidden" name="tipus" value="{{ $tipus }}">
        </form>

        <nav class="nav_petit">
            @foreach (['tots' => 'Tothom', 'alumne' => 'Alumnes', 'convidat' => 'Convidats'] as $valor => $etiqueta)
                <a href="{{ route('admin.consultar_assistents', ['esdeveniment_id' => $esdevenimentSeleccionat?->id, 'tipus' => $valor]) }}">
                    <button type="button" class="boto_general {{ $tipus === $valor ? 'active' : '' }}">{{ $etiqueta }}</button>
                </a>
            @endforeach
        </nav>

        <div class="cartes">
            <article>
                <strong>{{ $totalPersonesUniques }}</strong>
                <span>persones úniques</span>
            </article>
            <article>
                <strong>{{ $totalRegistres }}</strong>
                <span>registres de validació</span>
            </article>
        </div>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Assistents</h3>
                <span class="badge comptador_de_indicacio">{{ $totalAlumnes }} alumnes - {{ $totalConvidats }} convidats</span>
            </header>
            <p class="desc_apartat">Es mostra l'última validació registrada de cada persona.</p>
            <ul>
                @forelse ($assistents as $dni => $dades)
                    @php
                        $ultim = $dades['ultim'];
                        $persona = $dades['persona'];
                    @endphp
                    <li
                        class="objecte_llista {{ $assistentSeleccionat && $assistentSeleccionat['ultim']->persona_id === $dni ? 'seleccionat' : '' }}"
                        style="cursor: pointer;"
                        onclick="window.location='{{ route('admin.consultar_assistents', ['esdeveniment_id' => $esdevenimentSeleccionat?->id, 'tipus' => $tipus, 'persona_id' => $dni]) }}'"
                    >
                        <h4>{{ $persona?->Nom }} {{ $persona?->Cognom }}</h4>
                        <span>{{ $dni }} - {{ ucfirst($ultim->Tipus_Persona) }}</span>
                        <span class="{{ $ultim->Validacio_correcta ? 'badge' : 'error_badge' }}">
                            {{ $ultim->Validacio_correcta ? 'Correcta' : 'Incorrecta' }}
                        </span>
                        <span>{{ $ultim->Hora ? substr($ultim->Hora, 0, 5) : '—' }}</span>
                    </li>
                @empty
                    <li class="alert_msg">No hi ha assistents registrats per a aquest acte.</li>
                @endforelse
            </ul>
        </section>

        @if ($assistentSeleccionat)
            @php
                $ultimSel = $assistentSeleccionat['ultim'];
                $personaSel = $assistentSeleccionat['persona'];
                $registresSel = $assistentSeleccionat['registres'];
            @endphp
            <section class="div_general">
                <header>
                    <h3 class="text_fitxa">Detall de l'assistent</h3>
                    <span class="badge">{{ ucfirst($ultimSel->Tipus_Persona) }}</span>
                </header>
                <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">{{ $personaSel?->Nom }} {{ $personaSel?->Cognom }}</span></p>
                <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">{{ $ultimSel->persona_id }}</span></p>
                <p><strong class="clau_text">Correu:</strong> <span class="valor_text">{{ $personaSel?->Correu ?? '—' }}</span></p>
                <p><strong class="clau_text">Acte:</strong> <span class="valor_text">{{ $esdevenimentSeleccionat?->Nom }} - ID {{ $esdevenimentSeleccionat?->id }}</span></p>

                <header>
                    <h4 class="text_indicacio">Registre de validació</h4>
                    <span class="null_badge">{{ $ultimSel->Data ? \Carbon\Carbon::parse($ultimSel->Data)->format('d/m/Y') : '—' }}</span>
                </header>
                <ul>
                    @foreach ($registresSel as $reg)
                        <li class="objecte_llista">
                            <strong>{{ $reg->Hora ? substr($reg->Hora, 0, 5) : '—' }}</strong>
                            <span>{{ $reg->Punt_de_control ?? 'Sense punt' }}</span>
                            <span class="{{ $reg->Validacio_correcta ? 'badge' : 'error_badge' }}">
                                {{ $reg->Validacio_correcta ? 'Correcta' : 'Incorrecta' }}
                            </span>
                        </li>
                    @endforeach
                </ul>
                <p class="alert_msg">
                    Dades de Matriculació: {{ $registresSel->count() }} {{ $registresSel->count() === 1 ? 'registre correspon' : 'registres corresponen' }} a una sola persona.
                </p>
            </section>
        @endif
    </main>
</body>
</html>