<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Tots els alumnes</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <h1 id="titol" class="Webtitle">EVENT PASS</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">Espai d'administració</span>
            <h2 id="titolpetit" class="nom_apartat">Llista d'alumnes</h2>
            <p id="text-petit-titol" class="desc_apartat">Consulta l'alumnat i revisa les seves dades.</p>
        </header>

        <section class="div_general div_llista" aria-labelledby="titol-cercador">
            <header>
                <h3 id="titol-cercador" class="text_fitxa text_indicacio">Alumnes</h3>
                <span class="badge comptador_de_indicacio">5 alumnes</span>
            </header>
            <label for="cerca" class="label_text">Cercar alumnes per nom, identificador o punts</label>
            <input id="cerca" class="input_general input_text" type="search" placeholder="Per exemple: Laia, 12345678Z o 80 punts">
            <ul id="llista-alumnes" aria-label="Llista d'alumnes de mostra">

                @foreach ($alumnes as $alumne)
                <li class="objecte_llista">
                    <strong>{{ $alumne->Nom }}</strong>
                    <span>{{ $alumne->DNI_NIE }}</span>
                    <span>{{ $alumne->Puntuacio}}</span>
                    
                    <form action="{{ route('alumne.destroy', $alumne) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este alumno?')">
                            Eliminar
                        </button>
                    </form>
                </li>
                @endforeach

            </ul>
            <p id="sense-resultats" class="alert_msg" aria-live="polite" hidden>No s'han trobat alumnes.</p>
        </section>

        <section class="div_general div_fitxa">
            <header>
                <h3 class="text_fitxa">Fitxa d'Alumne</h3>
                <span class="badge">Seleccionada</span>
            </header>
            <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">Laia Vidal</span></p>
            <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">12345678Z</span></p>
            <p><strong class="clau_text">Correu:</strong> <span class="valor_text">laia.vidal@example.cat</span></p>
            <p><strong class="clau_text">Puntuació:</strong> <span class="valor_text">80 punts</span></p>
        </section>
    </main>
</body>

</html>