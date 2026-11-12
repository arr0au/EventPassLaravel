<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar registres d'accés</title>
    <script src="../../js/admin/consultar_registres.js" defer></script>
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
            <h2 id="titolpetit" class="nom_apartat">Consultar registres d'accés</h2>
            <p id="text-petit-titol" class="desc_apartat">Revisa l'historial de validacions de Matriculació.</p>
        </header>

        <form class="div_formulari">
            <fieldset>
                <legend>Filtres de consulta</legend>
                <label class="label_text">Acte</label>
                <select class="selector_general desplegable">
                    <option>Jornada cultural</option>
                </select>
                
                <label class="label_text">Data</label>
                <input type="date" class="input_general" value="2026-10-20">
                
                <label class="label_text">Resultat</label>
                <select class="selector_general desplegable">
                    <option>Tots</option>
                </select>
                
                <label class="label_text">Punt de control</label>
                <select class="selector_general desplegable">
                    <option>Tots els punts</option>
                </select>
            </fieldset>
        </form>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">6 registres · 5 persones</h3>
                <span class="badge">Jornada cultural - 20/10/2026</span>
                <button type="button" class="boto_general">Més recents primer</button>
            </header>
            <ul>
                <li class="objecte_llista">
                    <h4>Ona Soler</h4>
                    <span>78901234X - 10:10 - Accés auditori</span>
                    <span class="badge">Correcta</span>
                </li>
                <li class="objecte_llista">
                    <h4>Júlia Costa</h4>
                    <span>34567890V - 10:08 - Accés auditori</span>
                    <span class="badge">Correcta</span>
                </li>
                <li class="objecte_llista">
                    <h4>Anna Vidal</h4>
                    <span>56789012B - 10:06 - Porta principal</span>
                    <span class="badge">Correcta</span>
                </li>
                <li class="objecte_llista seleccionat">
                    <h4>Anna Vidal</h4>
                    <span>56789012B - 10:05 - Porta principal</span>
                    <b class="error_badge">Incorrecta</b>
                </li>
            </ul>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Detall del registre</h3>
                <span class="badge">Seleccionat</span>
            </header>
            <p><strong class="clau_text">Persona:</strong> <span class="valor_text">Anna Vidal - Convidada</span></p>
            <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">56789012B</span></p>
            <p><strong class="clau_text">Acte:</strong> <span class="valor_text">Jornada cultural - ID 101</span></p>
            <p><strong class="clau_text">Punt de control:</strong> <span class="valor_text">Porta principal</span></p>
            <p><strong class="clau_text">Data:</strong> <span class="valor_text">20/10/2026</span></p>
            <p><strong class="clau_text">Hora:</strong> <span class="valor_text">10:05</span></p>
            <p><strong class="clau_text">Validació:</strong> <b class="error_badge">Incorrecta</b></p>
            
            <p class="alert_msg">Es mostra el resultat registrat. No es dedueix cap motiu de la validació incorrecta.</p>
        </section>
    </main>
</body>
</html>