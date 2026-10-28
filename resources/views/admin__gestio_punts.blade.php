<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Gestionar punts de control</title>
    <script src="../../js/admin/gestio_punts.js" defer></script>
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
            <h2 id="titolpetit" class="nom_apartat">Gestionar punts de control</h2>
            <p id="text-petit-titol" class="desc_apartat">Organitza els noms dels punts que consten als registres.</p>
        </header>

        <input type="search" class="input_general input_text" placeholder="Cerca un acte o un punt de control">

        <label class="label_text">Acte per editar</label>
        <select class="selector_general desplegable">
            <option>Jornada cultural - ID 101</option>
        </select>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Jornada cultural</h3>
                <span class="badge comptador_de_indicacio">6 registres</span>
            </header>
            <ul>
                <li class="objecte_llista seleccionat">
                    <h4>Porta principal</h4>
                    <span>4 registres</span>
                </li>
                <li class="objecte_llista">
                    <h4>Accés auditori</h4>
                    <span>2 registres</span>
                </li>
            </ul>

            <header>
                <h3 class="text_fitxa text_indicacio">Taller creatiu</h3>
                <span class="badge comptador_de_indicacio">3 registres</span>
            </header>
            <ul>
                <li class="objecte_llista">
                    <h4>Vestíbul</h4>
                    <span>3 registres</span>
                </li>
            </ul>

            <p class="alert_msg">Els punts són valors text (Punt de control) a Matriculació. Els registres corresponen a registres, no a dispositius ni a persones úniques.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Canviar el nom del punt</h3>
            </header>
            <form class="div_formulari">
                <label class="label_text">Acte</label>
                <input type="text" class="input_general input_text" value="Jornada cultural" readonly>
                <label class="label_text">Nom del punt seleccionat</label>
                <input type="text" class="input_general input_text" value="Porta principal">
                <p class="alert_msg">El canvi s'aplicarà als 4 registres d'aquest acte que tenen aquest valor.</p>
                <button type="submit" class="boto_general boto_continuar">Canviar nom</button>
            </form>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Afegir un punt</h3>
            </header>
            <form class="div_formulari">
                <label class="label_text">Nou valor del punt de control</label>
                <input type="text" class="input_general input_text" value="Accés lateral">
                <label class="label_text">Registre on s'assignarà</label>
                <select class="selector_general desplegable">
                    <option>Anna Vidal - 20/10/2026 - 10:05</option>
                </select>
                <p class="alert_msg">S'assigna el nou nom al registre seleccionat; no es crea cap punt independent.</p>
                <button type="submit" class="boto_general boto_continuar">+ Afegir i assignar punt</button>
            </form>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Eliminar el punt seleccionat</h3>
            </header>
            <form class="div_formulari">
                <p class="desc_apartat">Per retirar "Porta principal", reassigna els seus 4 registres a un altre punt del mateix acte.</p>
                <label class="label_text">Punt de substitució</label>
                <select class="selector_general desplegable">
                    <option>Accés auditori</option>
                </select>
                <p class="error_alert">S'eliminarà aquest nom de l'acte, però es conservaran tots els registres d'accés.</p>
                <button type="button" class="boto_general boto_vermell">Eliminar el punt</button>
            </form>
        </section>
    </main>
</body>
</html>