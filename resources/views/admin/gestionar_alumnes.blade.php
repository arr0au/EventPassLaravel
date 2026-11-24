<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Tots els alumnes</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <style>
        mark.cerca-highlight {
            background-color: #fde047;
            padding: 0 2px;
        }

        #llista-alumnes li:first-child:not(.seleccionat):not(:hover) {
            background-color: var(--bg-surface);
            border-color: var(--border-light);
        }

        #llista-alumnes li:hover,
        #llista-alumnes li.seleccionat {
            background-color: var(--bg-soft-green);
            border-color: var(--brand-green);
        }
    </style>
</head>

<body>
    <header>
        <h1 id="titol" class="Webtitle">EVENT PASS</h1>
    </header>
    <main>
        <header>
            <span id="subtitol-titol" class="permisionspacetext">Espai d'administració</span>
            <h2 id="titolpetit" class="nom_apartat">Llista d'alumnes</h2>
            <p id="text-petit-titol" class="desc_apartat">Consulta l'alumnat i revisa les seves dades.</p>
        </header>
        <input type="search" id="cercador" class="input_general input_text" placeholder="Cerca un alumne...">
        <button type="button" onclick="window.location='{{ route('alumne.create') }}'" class="boto_general boto_continuar">Crear un alumne</button>
        <section class="div_general div_llista" aria-labelledby="titol-cercador">
            <header>
                <h3 id="titol-cercador" class="text_fitxa text_indicacio">Alumnes</h3>
                <span id="comptador" class="badge comptador_de_indicacio">{{ count($alumnes) }} {{ count($alumnes) === 1 ? 'alumne' : 'alumnes' }}</span>
            </header>
            <ul id="llista-alumnes" aria-label="Llista d'alumnes">

@foreach ($alumnes as $alumne)
<li class="objecte_llista"
    style="cursor: pointer;"
    data-nom-complet="{{ $alumne->Nom }} {{ $alumne->Cognom }}"
    data-dni="{{ $alumne->DNI_NIE }}"
    data-correu="{{ $alumne->Correu }}"
    data-puntuacio="{{ $alumne->Puntuacio }}">
    <strong>{{ $alumne->Nom }}</strong>
    <span>{{ $alumne->DNI_NIE }}</span>
    <span>{{ $alumne->Puntuacio}}</span>
    <button type="button" onclick="window.location='{{ route('alumne.edit', $alumne) }}'" class="boto_general boto_continuar">Editar</button>
    <form action="{{ route('alumne.destroy', $alumne) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este alumno?')">
            Eliminar
        </button>
    </form>
</li>
@endforeach

            </ul>
            <p id="sense-resultats" class="alert_msg" aria-live="polite" hidden>No s'han trobat alumnes.</p>
        </section>

        <section class="div_general div_fitxa">
            <header>
                <h3 class="text_fitxa">Fitxa d'Alumne</h3>
                <span class="badge" id="fitxa-estat">Seleccionada</span>
            </header>
            <p><strong class="clau_text">Nom i cognom:</strong> <span class="valor_text" id="fitxa-nom">—</span></p>
            <p><strong class="clau_text">DNI/NIE:</strong> <span class="valor_text" id="fitxa-dni">—</span></p>
            <p><strong class="clau_text">Correu:</strong> <span class="valor_text" id="fitxa-correu">—</span></p>
            <p><strong class="clau_text">Puntuació:</strong> <span class="valor_text" id="fitxa-puntuacio">—</span></p>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('cercador');
            const items = document.querySelectorAll('.div_llista ul li.objecte_llista');
            const comptador = document.getElementById('comptador');
            const senseResultats = document.getElementById('sense-resultats');

            const fitxaNom = document.getElementById('fitxa-nom');
            const fitxaDni = document.getElementById('fitxa-dni');
            const fitxaCorreu = document.getElementById('fitxa-correu');
            const fitxaPuntuacio = document.getElementById('fitxa-puntuacio');

            const seleccionarItem = (item) => {
                if (!item || !fitxaNom) return;

                items.forEach((el) => {
                    el.classList.remove('seleccionat');
                });

                item.classList.add('seleccionat');

                const puntuacio = item.dataset.puntuacio ?? '0';
                fitxaNom.textContent = (item.dataset.nomComplet || '').trim() || '—';
                fitxaDni.textContent = item.dataset.dni || '—';
                fitxaCorreu.textContent = item.dataset.correu || '—';
                fitxaPuntuacio.textContent = `${puntuacio} punts`;
            };

            items.forEach((item) => {
                item.dataset.htmlOriginal = item.innerHTML;

                item.addEventListener('click', (event) => {
                    if (event.target.closest('button, form, a')) return;
                    seleccionarItem(item);
                });
            });

            if (items.length > 0) {
                seleccionarItem(items[0]);
            }

            if (!input) return;

            const actualitzarComptador = (visibles) => {
                if (!comptador) return;
                const paraula = visibles === 1 ? 'alumne' : 'alumnes';
                comptador.textContent = `${visibles} ${paraula}`;
            };

            const netejarHighlight = (item) => {
                item.innerHTML = item.dataset.htmlOriginal;
            };

            const aplicarHighlight = (item, terme) => {
                netejarHighlight(item);
                if (!terme) return;

                const escaped = terme.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
                const regex = new RegExp(`(${escaped})`, 'gi');

                const walker = document.createTreeWalker(item, NodeFilter.SHOW_TEXT, null);
                const textNodes = [];
                let node;
                while ((node = walker.nextNode())) {
                    if (node.nodeValue.trim() !== '' && !node.parentElement.closest('button, script, style')) {
                        textNodes.push(node);
                    }
                }

                textNodes.forEach((textNode) => {
                    if (!regex.test(textNode.nodeValue)) return;
                    regex.lastIndex = 0;

                    const spanWrapper = document.createElement('span');
                    spanWrapper.innerHTML = textNode.nodeValue.replace(
                        regex,
                        '<mark class="cerca-highlight">$1</mark>'
                    );

                    const fragment = document.createDocumentFragment();
                    while (spanWrapper.firstChild) {
                        fragment.appendChild(spanWrapper.firstChild);
                    }
                    textNode.parentNode.replaceChild(fragment, textNode);
                });
            };

            const filtrar = () => {
                const terme = input.value.trim();
                const termeLower = terme.toLowerCase();
                let visibles = 0;

                items.forEach((item) => {
                    const text = item.textContent.toLowerCase();
                    const coincideix = text.includes(termeLower);

                    item.style.display = coincideix ? '' : 'none';

                    if (coincideix) {
                        visibles++;
                        aplicarHighlight(item, terme);
                    } else {
                        netejarHighlight(item);
                    }
                });

                actualitzarComptador(visibles);
                if (senseResultats) {
                    senseResultats.hidden = visibles > 0;
                }
            };

            input.addEventListener('input', filtrar);
            input.addEventListener('search', filtrar);
        });
    </script>
</body>

</html>