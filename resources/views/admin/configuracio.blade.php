<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Configuració</title>
    <script src="../../js/admin/configuracio.js" defer></script>
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
            <h2 id="titolpetit" class="nom_apartat">Configuració</h2>
            <p id="text-petit-titol" class="desc_apartat">Gestiona l'accés d'administració i la interfície.</p>
        </header>

        <section class="div_general div_fitxa">
            <header>
                <h3 class="text_fitxa">Compte d'administració</h3>
            </header>
            <p><strong class="clau_text">Identificador d'administració:</strong> <span class="valor_text">admin.centre</span></p>
            <p><strong class="clau_text">Contrasenya:</strong> <span class="valor_text">••••••••••••</span></p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Canviar la contrasenya</h3>
            </header>
            <form class="div_formulari">
                <label class="label_text">Contrasenya actual</label>
                <input type="password" class="input_general input_text" value="••••••••••••">
                
                <label class="label_text">Nova contrasenya</label>
                <input type="password" class="input_general input_text" value="••••••••••••">
                
                <label class="label_text">Confirmar la nova contrasenya</label>
                <input type="password" class="input_general input_text" value="••••••••••••">
                
                <p class="alert_msg">Utilitza una clau que no facis servir en altres serveis. Les contrasenyes es mantenen ocultes.</p>
                <button type="submit" class="boto_general boto_continuar">Desar la contrasenya</button>
            </form>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Idioma de la interfície</h3>
                <span class="badge">Preferència d'interfície</span>
            </header>
            <form class="div_formulari">
                <label class="label_text">Idioma</label>
                <select class="selector_general desplegable">
                    <option>Català</option>
                </select>
                <p class="alert_msg">Aquesta preferència només canvia la llengua de la interfície; no és un camp del compte a la base de dades.</p>
                <button type="submit" class="boto_general boto_continuar">Desar la preferència</button>
            </form>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Sessió</h3>
            </header>
            <p class="desc_apartat">En acabar, tanca la sessió per protegir l'accés a l'espai d'administració.</p>
            <button type="button" class="boto_general boto_vermell">Tancar sessió</button>
        </section>
    </main>
</body>
</html>