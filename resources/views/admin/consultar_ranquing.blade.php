<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar el rànquing</title>
    <script src="../../js/admin/consultar_ranquing.js" defer></script>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <a href="{{ route('admin.menu') }}" class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <span class="comptador_de_indicacio">Dades de mostra</span>
            <h2 id="titolpetit" class="nom_apartat">Consultar el rànquing</h2>
            <p id="text-petit-titol" class="desc_apartat">La classificació segons la puntuació de cada alumne.</p>
        </header>

        <input type="search" class="input_general input_text" placeholder="Cerca per nom o DNI/NIE">

        <section class="div_general">
            <header>
                <span class="permisionspacetext">PRIMERA POSICIÓ</span>
                <span class="badge">80 punts</span>
            </header>
            <h3 class="text_fitxa">Laia Vidal</h3>
        </section>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Classificació general</h3>
                <span class="badge comptador_de_indicacio">4 alumnes</span>
            </header>
            <ol>
            @foreach ($alumnes as $alumne)
<li class="objecte_llista"
    style="cursor: pointer;"
    data-nom-complet="{{ $alumne->Nom }} {{ $alumne->Cognom }}"
    data-dni="{{ $alumne->DNI_NIE }}"
    data-correu="{{ $alumne->Correu }}"
    data-puntuacio="{{ $alumne->Puntuacio }}">
    <strong>{{ $alumne->Nom }}</strong>
    <span>{{ $alumne->DNI_NIE }}</span>
    <span>{{ $alumne->Puntuacio}}</span>
    </form>
</li>
@endforeach
            </ol>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Resum de l'alumne</h3>
                <span class="badge">1a posició</span>
            </header>
            <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">Laia Vidal</span></p>
            <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">12345678Z</span></p>
            <p><strong class="clau_text">Correu:</strong> <span class="valor_text">laia.vidal@example.cat</span></p>
            <p><strong class="clau_text">Puntuació:</strong> <span class="valor_text">80 punts</span></p>
            
            <p class="alert_msg">El rànquing utilitza Analítica Puntuació. La puntuació de l'esdeveniment indica els punts de l'activitat, no una classificació diferent.</p>
        </section>
    </main>
</body>
</html>