<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Gestionar actes i activitats</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <style>
        mark.cerca-highlight {
            background-color: #fde047;
            color: inherit;
            padding: 0 2px;
            border-radius: 2px;
        }

        .div_llista ul li.objecte_llista:hover,
        .div_llista ul li.objecte_llista.seleccionat {
            background-color: var(--bg-soft-green);
            border-color: var(--brand-green);
        }
    </style>
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

        <input
            type="search"
            id="cercador"
            class="input_general input_text"
            placeholder="Cerca un acte o una activitat"
        >
        <button type="button" onclick="window.location='{{ route('esdeveniment.create') }}'" class="boto_general boto_continuar">Crear un acte</button>

        <section class="div_general div_llista">
            <header>
                <h3 class="text_fitxa text_indicacio">Actes i activitats</h3>
                <span
                    id="comptador"
                    data-singular="acte"
                    data-plural="actes"
                    class="badge comptador_de_indicacio"
                >
                    {{ count($esdeveniments) }} {{ count($esdeveniments) === 1 ? 'acte' : 'actes' }}
                </span>
            </header>
            <ul>
            @foreach ($esdeveniments as $esdeveniment)
                <li
                    class="objecte_llista"
                    style="cursor: pointer;"
                    data-id="{{ $esdeveniment->id ?? '' }}"
                    data-nom="{{ $esdeveniment->Nom }}"
                    data-descripcio="{{ $esdeveniment->Descripcio }}"
                    data-inici="{{ $esdeveniment->Hora_Inici }}"
                    data-fi="{{ $esdeveniment->Hora_Finalitzacio }}"
                    data-estat="{{ $esdeveniment->Estat }}"
                >
                    <strong>{{ $esdeveniment->Nom }}</strong>
                    <span>{{ $esdeveniment->Hora_Inici }}</span>
                    <span>{{ $esdeveniment->Hora_Finalitzacio }}</span>
                    <span>{{ $esdeveniment->Estat }}</span>
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

        <section class="div_general div_fitxa">
            <header>
                <h3 class="text_fitxa">Detall de l'acte</h3>
                <span class="badge" id="fitxa-id">ID —</span>
            </header>
            <p><strong class="clau_text">Nom:</strong> <span class="valor_text" id="fitxa-nom">—</span></p>
            <p><strong class="clau_text">Descripció:</strong> <span class="valor_text" id="fitxa-descripcio">—</span></p>
            <p><strong class="clau_text">Hora d'inici:</strong> <span class="valor_text" id="fitxa-inici">—</span></p>
            <p><strong class="clau_text">Hora de finalització:</strong> <span class="valor_text" id="fitxa-fi">—</span></p>
            <p><strong class="clau_text">Estat:</strong> <span class="valor_text" id="fitxa-estat">—</span></p>
            <p class="alert_msg">Abans d'eliminar-lo, revisa els registres de matriculació associats a l'acte.</p>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('cercador');
            const items = document.querySelectorAll('.div_llista ul li.objecte_llista');
            const comptador = document.getElementById('comptador');

            const fitxaId = document.getElementById('fitxa-id');
            const fitxaNom = document.getElementById('fitxa-nom');
            const fitxaDescripcio = document.getElementById('fitxa-descripcio');
            const fitxaInici = document.getElementById('fitxa-inici');
            const fitxaFi = document.getElementById('fitxa-fi');
            const fitxaEstat = document.getElementById('fitxa-estat');

            const seleccionarItem = (item) => {
    if (!item) return;

    items.forEach((el) => {
        el.classList.remove('seleccionat');
    });
    item.classList.add('seleccionat');

    if (fitxaId) fitxaId.textContent = item.dataset.id ? `ID ${item.dataset.id}` : 'Seleccionat';
    if (fitxaNom) fitxaNom.textContent = item.dataset.nom || '—';
    if (fitxaDescripcio) fitxaDescripcio.textContent = item.dataset.descripcio || '—';
    if (fitxaInici) fitxaInici.textContent = item.dataset.inici || '—';
    if (fitxaFi) fitxaFi.textContent = item.dataset.fi || '—';
    if (fitxaEstat) fitxaEstat.textContent = item.dataset.estat || '—';
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

            const singular = comptador?.dataset.singular || 'acte';
            const plural = comptador?.dataset.plural || 'actes';

            const actualitzarComptador = (visibles) => {
                if (!comptador) return;
                const paraula = visibles === 1 ? singular : plural;
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
            };

            input.addEventListener('input', filtrar);
            input.addEventListener('search', filtrar);
        });
    </script>
</body>
</html>