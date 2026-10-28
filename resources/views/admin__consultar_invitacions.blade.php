<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar invitacions</title>
    <script src="../../js/admin/consultar_invitacions.js" defer></script>
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
            <h2 id="titolpetit" class="nom_apartat">Consultar invitacions</h2>
            <p id="text-petit-titol" class="desc_apartat">Revisa qui convida i les dades de cada convidat.</p>
        </header>

        <input type="search" class="input_general input_text" placeholder="Cerca un nom o DNI/NIE de la relació">

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Invitacions</h3>
                <span class="badge comptador_de_indicacio">3 relacions</span>
            </header>
            <ul>
                <li class="objecte_llista seleccionat">
                    <h4>Laia Vidal</h4>
                    <span>12345678Z</span>
                    <span>Anna Vidal</span>
                    <span>56789012B</span>
                </li>
                <li class="objecte_llista">
                    <h4>Laia Vidal</h4>
                    <span>12345678Z</span>
                    <span>Pau Vidal</span>
                    <span>67890123B</span>
                </li>
                <li class="objecte_llista">
                    <h4>Marc Soler</h4>
                    <span>23456789D</span>
                    <span>Ona Soler</span>
                    <span>78901234X</span>
                </li>
            </ul>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Detall de la invitació</h3>
                <span class="badge">Seleccionada</span>
            </header>
            
            <article>
                <strong class="text_indicacio">Alumna convidadora</strong>
                <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">Laia Vidal</span></p>
                <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">12345678Z</span></p>
                <p><strong class="clau_text">Invitacions:</strong> <span class="valor_text">2 de 4 disponibles</span></p>
            </article>

            <article>
                <strong class="text_indicacio">Persona convidada</strong>
                <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text">Anna Vidal</span></p>
                <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text">56789012B</span></p>
                <p><strong class="clau_text">Correu:</strong> <span class="valor_text">anna.vidal@example.cat</span></p>
            </article>
            
            <p class="alert_msg">Cada alumne pot tenir un màxim de 4 invitacions. La consulta mostra la relació entre alumne i convidat.</p>
        </section>
    </main>
</body>
</html>