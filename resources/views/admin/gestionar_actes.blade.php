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
            <span class="comptador_de_indicacio">Dades de mostra</span>
            <h2 id="titolpetit" class="nom_apartat">Gestionar actes i activitats</h2>
            <p id="text-petit-titol" class="desc_apartat">Organitza els actes, els horaris i la puntuació.</p>
        </header>
        
        <input type="search" class="input_general input_text" placeholder="Cerca un acte o una activitat">
        <button type="button" onclick="window.location='{{ route('esdeveniment.create') }}'" class="boto_general boto_continuar">+ Crear un acte</button>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Actes i activitats</h3>
                <span class="badge comptador_de_indicacio">3 actes</span>
            </header>
            <ul>
            @foreach ($esdeveniments as $esdeveniment) 
                <li class="objecte_llista">
                    <strong>{{ $esdeveniment->Nom }}</strong>
                    <span>{{ $esdeveniment->Hora_Inici}}</span>
                    <span>{{ $esdeveniment->Hora_Finalitzacio }}</span>
                    <span>{{ $esdeveniment->Estat}}</span>
                    <button type="button" onclick="window.location='{{ route('esdeveniment.edit', $esdeveniment) }}'" class="boto_general boto_continuar">Editar</button>
                    <form action="{{ route('esdeveniment.destroy', $esdeveniment) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este evento?')">
                            Eliminar
                        </button>
                    </form>
                    </li>
            @endforeach
            </ul>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Editar l'acte</h3>
                <span class="badge">ID 101</span>
            </header>
            <p class="alert_msg">Abans d'eliminar-lo, revisa els registres de matriculació associats a l'acte.</p>
        </section>
    </main>
</body>
</html>