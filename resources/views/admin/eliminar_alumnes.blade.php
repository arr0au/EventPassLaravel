<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar alumnes - EventPass</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>

<body>

    <section class="div_general">
        <header>
            <h3 class="text_fitxa">Eliminar alumnes</h3>
        </header>

        <div class="cercador_amb_icona">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
            <input type="search" class="input_general" placeholder="Cerca per nom o DNI/NIE">
        </div>

        <ul class="div_llista llista_seleccionable">
            <li class="objecte_llista">
                <input type="checkbox" class="checkbox_general">
                <div class="info_alumne_llista">
                    <strong>Laia Vidal</strong>
                    <span>12345678Z</span>
                </div>
            </li>
        </ul>

        <div class="resum_seleccio">
            <span class="clau_text">Selecció</span>
            <span class="valor_text">1 alumne · Nil Roca</span>
        </div>

        <div class="error_alert alert_amb_icona">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                <line x1="12" y1="9" x2="12" y2="13" />
                <line x1="12" y1="17" x2="12.01" y2="17" />
            </svg>
            <span>Vols eliminar Nil Roca? Aquesta acció no es pot desfer. Revisa les invitacions i matriculacions associades abans de confirmar.</span>
        </div>

        <div class="accions_fila">
            <button type="button" class="boto_general">Cancel·lar</button>
            <button type="button" class="boto_vermell">Confirmar eliminació</button>
        </div>
    </section>
</body>

</html>