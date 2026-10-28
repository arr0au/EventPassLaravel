<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Pàgina d'Administració</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">Espai d'administració</span>
            <h2 id="titolpetit" class="nom_apartat">Gestió</h2>
            <p id="text-petit-titol" class="desc_apartat">Totes les eines per organitzar els teus actes.</p>
        </header>
        <div class="botons">
            <div id="gestionarAlumnes">
                <a href="{{ route('admin.gestionar_alumnes') }}"><button type="button" class="boto_general">Gestionar Alumnes</button></a>
            </div>
            <div id="importarAlumnes">
                <a href="{{ route('admin.import_alumnes') }}"><button type="button" class="boto_general">Importar o donar d'alta alumnes</button></a>
            </div>
            <div id="gestionarActes">
                <a href="{{ route('admin.gestionar_actes') }}"><button type="button" class="boto_general">Gestionar Actes i activitats</button></a>
            </div>
            <div id="consultarInvitacions">
                <a href="{{ route('admin.consultar_invitacions') }}"><button type="button" class="boto_general">Consultar invitacions</button></a>
            </div>
            <div id="consultarAssistents">
                <a href="{{ route('admin.consultar_assistents') }}"><button type="button" class="boto_general">Consultar assistents</button></a>
            </div>
            <div id="gestionarPuntsControl">
                <a href="{{ route('admin.gestio_punts') }}"><button type="button" class="boto_general">Gestionar punts de control</button></a>
            </div>
            <div id="consultarRegistresAcces">
                <a href="{{ route('admin.consultar_registres') }}"><button type="button" class="boto_general">Consultar registres d'accés</button></a>
            </div>
            <div id="consultarEstadistiques">
                <a href="{{ route('admin.consultar_estadistiques') }}"><button type="button" class="boto_general">Consultar estadistiques</button></a>
            </div>
            <div id="consultarRanquing">
                <a href="{{ route('admin.consultar_ranquing') }}"><button type="button" class="boto_general">Consultar el rànquing</button></a>
            </div>
            <div id="configuracio">
                <a href="{{ route('admin.configuracio') }}"><button type="button" class="boto_general">Configuració</button></a>
            </div>
        </div>
    </main>
    <p id="text-petit" class="frase_estrella">Menys esperes. Més moments.</p>
</body>
</html>