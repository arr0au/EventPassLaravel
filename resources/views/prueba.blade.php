<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar assistents</title>
    <script src="resources/js/admin/consultar_assistents.js" defer></script>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <header>
        <a href="menu.html" class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <span class="comptador_de_indicacio">Dades de mostra</span>
            <h2 id="titolpetit" class="nom_apartat">Consultar assistents</h2>
            <p id="text-petit-titol" class="desc_apartat">Consulta les persones associades a cada acte.</p>
        </header>

        <label class="label_text">Acte</label>
        <select class="selector_general desplegable">
            <option>Jornada cultural - 20/10/2026</option>
        </select>

        <nav class="nav_petit">
            <button type="button" class="boto_general active">Tothom</button>
            <button type="button" class="boto_general">Alumnes</button>
            <button type="button" class="boto_general">Convidats</button>
        </nav>

        <div class="cartes">
            <article>
                <strong>5</strong>
                <span>persones úniques</span>
            </article>
            <article>
                <strong>6</strong>
                <span>registres de validació</span>
            </article>
        </div>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Assistents</h3>
                <span class="badge comptador_de_indicacio">3 alumnes - 2 convidats</span>
            </header>
            <p class="desc_apartat">Es mostra l'última validació registrada de cada persona.</p>
            <ul>
                <li class="objecte_llista">
                    <h4>Laia Vidal</h4>
                    <span>12345678Z - Alumna</span>
                    <span class="badge">Correcta</span>
                    <span>10:02</span>
                </li>
                <li class="objecte_llista">
                    <h4>Marc Soler</h4>
                    <span>23456789D - Alumne</span>
                    <span class="badge">Correcta</span>
                    <span>10:04</span>
                </li>
                <li class="objecte_llista seleccionat">
                    <h4>Anna Vidal</h4>
                    <span>56789012B - Convidada</span>
                    <span class="badge">Correcta</span>
                    <span>10:06</span>
                </li>
            </ul>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Detall de l'assistent</h3>
                <span class="badge">Convidada</span>
            </header>
            <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">Anna Vidal</span></p>
            <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">56789012B</span></p>
            <p><strong class="clau_text">Correu:</strong> <span class="valor_text">anna.vidal@example.cat</span></p>
            <p><strong class="clau_text">Acte:</strong> <span class="valor_text">Jornada cultural - ID 101</span></p>
            
            <header>
                <h4 class="text_indicacio">Registre de validació</h4>
                <span class="null_badge">20/10/2026</span>
            </header>
            <ul>
                <li class="objecte_llista">
                    <strong>10:06</strong>
                    <span>Porta principal</span>
                    <span class="badge">Correcta</span>
                </li>
                <li class="objecte_llista">
                    <strong>10:05</strong>
                    <span>Porta principal</span>
                    <b class="error_badge">Incorrecta</b>
                </li>
            </ul>
            <p class="alert_msg">Dades de Matriculació: 2 registres corresponen a una sola persona.</p>
        </section>
    </main>
</body>
</html>