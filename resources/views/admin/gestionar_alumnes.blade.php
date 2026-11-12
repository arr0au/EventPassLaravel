<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Gestionar alumnes</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <a href="{{ route('admin.menu') }}" class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>
        <h1 id="titol" class="Webtitle">EVENT PASS</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">Espai d'administració</span>
            <span class="comptador_de_indicacio">Dades de mostra</span>
            <h2 id="titolpetit" class="nom_apartat">Gestionar alumnes</h2>
            <p id="text-petit-titol" class="desc_apartat">Consulta l'alumnat i revisa les seves dades.</p>
        </header>

        <!-- INICI: contingut afegit per a la prova del cercador i la llista d'alumnes -->
        <section class="div_general div_llista" aria-labelledby="titol-cercador">
            <header>
                <h3 id="titol-cercador" class="text_fitxa text_indicacio">Alumnes</h3>
                <span class="badge comptador_de_indicacio">5 alumnes</span>
            </header>
            <label for="cerca" class="label_text">Cercar alumnes per nom, identificador o punts</label>
            <input id="cerca" class="input_general input_text" type="search" placeholder="Per exemple: Laia, 12345678Z o 80 punts">
            <ul id="llista-alumnes" aria-label="Llista d'alumnes de mostra">
                <li class="objecte_llista seleccionat">
                    <span>LV</span>
                    <strong>Laia Vidal</strong>
                    <span>12345678Z</span>
                    <span>80 punts</span>
                </li>
                <li class="objecte_llista">
                    <span>AS</span>
                    <strong>Alvaro Soler</strong>
                    <span>23456789D</span>
                    <span>60 punts</span>
                </li>
                <li class="objecte_llista">
                    <span>JC</span>
                    <strong>Júlia Costa</strong>
                    <span>34567890V</span>
                    <span>40 punts</span>
                </li>
                <li class="objecte_llista">
                    <span>NR</span>
                    <strong>Nil Ojeda</strong>
                    <span>45678901G</span>
                    <span>20 punts</span>
                </li>
                <li class="objecte_llista">
                    <span>JA</span>
                    <strong>Jaime Altozano</strong>
                    <span>23967443T</span>
                    <span>100 punts</span>
                </li>
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