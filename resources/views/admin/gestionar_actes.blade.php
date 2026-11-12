<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Gestionar actes i activitats</title>
    <script src="../../js/admin/gestionar_actes.js" defer></script>
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
            <h2 id="titolpetit" class="nom_apartat">Gestionar actes i activitats</h2>
            <p id="text-petit-titol" class="desc_apartat">Organitza els actes, els horaris i la puntuació.</p>
        </header>
        
        <input type="search" class="input_general input_text" placeholder="Cerca un acte o una activitat">
        <button type="button" class="boto_general boto_continuar">+ Crear un acte</button>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Actes i activitats</h3>
                <span class="badge comptador_de_indicacio">3 actes</span>
            </header>
            <ul>
                <li class="objecte_llista seleccionat">
                    <h4>Jornada cultural</h4>
                    <span>20/10/2026 - 10:00-14:00 - 40 punts</span>
                    <span class="badge">Actiu</span>
                </li>
                <li class="objecte_llista">
                    <h4>Taller creatiu</h4>
                    <span>21/10/2026 - 16:00-18:00 - 20 punts</span>
                    <span class="badge">Actiu</span>
                </li>
                <li class="objecte_llista">
                    <h4>Xerrada inspiradora</h4>
                    <span>19/10/2026 - 11:00-12:00 - 20 punts</span>
                    <b class="null_badge">Inactiu</b>
                </li>
            </ul>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Editar l'acte</h3>
                <span class="badge">ID 101</span>
            </header>
            <form class="div_formulari">
                <label class="label_text">Nom de l'acte</label>
                <input type="text" class="input_general input_text" value="Jornada cultural">

                <label class="label_text">Descripció</label>
                <textarea class="input_general input_text">Una jornada per compartir música, lectures i projectes de l'alumnat amb les famílies.</textarea>

                <label class="label_text">Ubicació</label>
                <input type="text" class="input_general input_text" value="Auditori del centre">

                <label class="label_text">Data</label>
                <input type="date" class="input_general" value="2026-10-20">

                <label class="label_text">Hora d'inici</label>
                <input type="time" class="input_general" value="10:00">

                <label class="label_text">Hora de finalització</label>
                <input type="time" class="input_general" value="14:00">

                <label class="label_text">Puntuació de l'activitat</label>
                <input type="number" class="input_general" value="40">

                <label class="label_text">Estat</label>
                <div>
                    <input type="checkbox" class="switch_general" checked>
                    <span class="badge">Actiu</span>
                </div>

                <button type="submit" class="boto_general boto_continuar">Desar els canvis</button>
                <button type="button" class="boto_general boto_vermell">Eliminar aquest acte</button>
            </form>
            <p class="alert_msg">Abans d'eliminar-lo, revisa els registres de matriculació associats a l'acte.</p>
        </section>
    </main>
</body>
</html>