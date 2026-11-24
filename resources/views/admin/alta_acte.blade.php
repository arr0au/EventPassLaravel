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
        
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <h2 id="titolpetit" class="nom_apartat">Gestionar actes i activitats</h2>
            <p id="text-petit-titol" class="desc_apartat">Organitza els actes, els horaris i la puntuació.</p>
        </header>
        <form class="div_formulari" action="{{ route('esdeveniment.store') }}" method="POST">
            @csrf
            <label class="label_text">Nom de l'acte</label>
            <input type="text" class="input_general input_text" value="" name="nom" required>

                <label class="label_text">Descripció</label>
                <textarea class="input_general input_text" name="descripcio" required></textarea>

                <label class="label_text">Ubicació</label>
                <input type="text" class="input_general input_text" value="" name="ubicacio" required>

                <label class="label_text">Data</label>
                <input type="date" class="input_general" value="2026-10-20" name="data" required>

                <label class="label_text">Hora d'inici</label>
                <input type="time" class="input_general" value="" name="hora_inici" required>

                <label class="label_text">Hora de finalització</label>
                <input type="time" class="input_general" value="" name="hora_finalitzacio" required>

                <label class="label_text">Puntuació de l'activitat</label>
                <input type="number" class="input_general" value="" name="puntuacio" required>

                <label class="label_text">Estat</label>
                <div>
                    <input type="checkbox" class="switch_general" checked name="estat" value="1">
                    <span class="badge">Actiu</span>
                </div>

                <button type="submit" class="boto_general boto_continuar">Desar els canvis</button>
            </form>
            </main>
            </body>
            </html>