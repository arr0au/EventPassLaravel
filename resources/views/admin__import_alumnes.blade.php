<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Importar o donar d'alta alumnes</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>

    <header>
<a href="{{ route('admin.menu') }}" class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
        </button>
        <h1 class="Webtitle">EventPass</h1>
    </header>

    <main>
        <header>
            <span class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <span>Dades de mostra</span>
            <h2 class="nom_apartat">Importar o donar d'alta alumnes</h2>
            <p class="desc_apartat">Crea alumnes, importa un CSV o elimina fitxes.</p>
        </header>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Crear un alumne</h3>
                <span class="badge">Nova alta</span>
            </header>

            <form class="div_formulari" style="gap: 12px; margin-top: 4px;">
                <div style="display: flex; gap: 12px;">
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 4px;">
                        <label class="label_text">Nom</label>
                        <input type="text" class="input_general" value="Aina">
                    </div>
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 4px;">
                        <label class="label_text">Cognom</label>
                        <input type="text" class="input_general" value="Ferrer">
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 4px;">
                    <label class="label_text">DNI/NIE · 9 caràcters</label>
                    <input type="text" class="input_general" value="X1234567L">
                </div>

                <div style="display: flex; flex-direction: column; gap: 4px;">
                    <label class="label_text">Correu electrònic</label>
                    <input type="email" class="input_general" value="aina.ferrer@example.cat">
                </div>

                <div style="display: flex; flex-direction: column; gap: 4px;">
                    <label class="label_text">Contrasenya inicial</label>
                    <input type="password" class="input_general" value=".............">
                </div>

                <div style="display: flex; gap: 12px; margin-bottom: 4px;">
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 4px;">
                        <label class="label_text">Invitacions · de 0 a 4</label>
                        <select class="selector_general">
                            <option>4</option>
                        </select>
                    </div>
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 4px;">
                        <label class="label_text">Puntuació</label>
                        <input type="number" class="input_general" value="0">
                    </div>
                </div>

                <!-- Alerta d'informació -->
                <div class="alert_msg" style="display: flex; gap: 8px; align-items: flex-start;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 1px;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    <span>QR personal: es generarà en crear la fitxa. Les dades escrites encara no s'han desat.</span>
                </div>

                <!-- Botó enviar -->
                <button type="submit" class="boto_continuar" style="width: 100%; margin-top: 4px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                    Crear alumne
                </button>
            </form>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Importar alumnes via CSV</h3>
            </header>
            
            <div style="display: flex; flex-direction: column; gap: 14px; margin-top: 4px;">
                <div style="border: 1px dashed var(--border-input); border-radius: var(--radius-md); padding: 20px 16px; display: flex; flex-direction: column; align-items: center; gap: 12px; background-color: #fafcfb;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--brand-green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    <span style="font-weight: 700; font-size: 0.95rem; color: var(--text-main);">alta_alumnes.csv</span>
                    <button type="button" class="boto_general" style="width: 100%; display: flex; justify-content: center; gap: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                        Seleccionar arxiu CSV
                    </button>
                </div>

                <button type="button" class="boto_descarregar" style="width: 100%;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Descarregar plantilla CSV
                </button>

                <div style="display: flex; flex-direction: column; gap: 6px; margin-top: 4px;">
                    <p class="text_fitxa" style="font-size: 0.85rem;">Columnes requerides</p>
                    <p class="desc_apartat" style="font-size: 0.85rem;">DNI_NIE, Nom, Cognom, Correu, Contrasenya.<br><span style="color: var(--text-muted);">Opcionals: Invitacions_disponibles (0–4), Puntuacio. El QR personal es genera en l'alta. Les contrasenyes no es mostren a la previsualització.</span></p>
                </div>

                <!-- Previsualització -->
                <header style="margin-top: 8px;">
                    <h3 class="text_fitxa" style="font-size: 0.95rem;">Previsualització · 2 files</h3>
                    <span class="error_badge">1 error</span>
                </header>

                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; flex-direction: column; gap: 2px;">
                            <span style="font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Aina Ferrer</span>
                            <span style="font-size: 0.85rem; color: var(--text-muted);">X1234567L</span>
                        </div>
                        <span class="badge">Correcta</span>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; flex-direction: column; gap: 2px;">
                            <span style="font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Biel Serra</span>
                            <span style="font-size: 0.85rem; color: var(--brand-red);">1234 · el DNI/NIE ha de tenir 9 caràcters</span>
                        </div>
                        <span class="error_badge">Incorrecta</span>
                    </div>
                </div>

                <div class="error_alert" style="display: flex; gap: 8px; align-items: flex-start; margin-top: 4px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 1px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    <span>Corregeix el DNI/NIE de Biel Serra i torna a validar abans d'importar.</span>
                </div>

                <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 4px;">
                    <button type="button" class="boto_general" style="display: flex; justify-content: center; gap: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><polyline points="9 15 11 17 15 12"/></svg>
                        Tornar a validar el CSV
                    </button>
                    <button type="button" class="boto_esperant" disabled>
                        Importar alumnes · pendent de validació
                    </button>
                </div>
            </div>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Eliminar alumnes</h3>
            </header>

            <div style="position: relative; margin-top: 4px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%);"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <input type="search" class="input_general" placeholder="Cerca per nom o DNI/NIE" style="padding-left: 42px;">
            </div>

            <ul class="div_llista" style="gap: 10px; margin-top: 4px;">
                <li class="objecte_llista" style="justify-content: flex-start; gap: 14px; padding: 12px 14px;">
                    <input type="checkbox" class="checkbox_general">
                    <div style="display: flex; flex-direction: column; gap: 2px;">
                        <strong style="font-size: 0.95rem;">Laia Vidal</strong>
                        <span style="font-size: 0.85rem; font-weight: normal; color: var(--text-muted);">12345678Z</span>
                    </div>
                </li>
                <li class="objecte_llista" style="justify-content: flex-start; gap: 14px; padding: 12px 14px;">
                    <input type="checkbox" class="checkbox_general">
                    <div style="display: flex; flex-direction: column; gap: 2px;">
                        <strong style="font-size: 0.95rem;">Marc Soler</strong>
                        <span style="font-size: 0.85rem; font-weight: normal; color: var(--text-muted);">23456789D</span>
                    </div>
                </li>
                <li class="objecte_llista" style="justify-content: flex-start; gap: 14px; padding: 12px 14px;">
                    <input type="checkbox" class="checkbox_general">
                    <div style="display: flex; flex-direction: column; gap: 2px;">
                        <strong style="font-size: 0.95rem;">Júlia Costa</strong>
                        <span style="font-size: 0.85rem; font-weight: normal; color: var(--text-muted);">34567890V</span>
                    </div>
                </li>
                <li class="objecte_llista seleccionat" style="justify-content: flex-start; gap: 14px; padding: 12px 14px; background-color: var(--bg-soft-green); border-color: var(--brand-green);">
                    <input type="checkbox" class="checkbox_general" checked>
                    <div style="display: flex; flex-direction: column; gap: 2px;">
                        <strong style="font-size: 0.95rem;">Nil Roca</strong>
                        <span style="font-size: 0.85rem; font-weight: normal; color: var(--text-muted);">45678901G</span>
                    </div>
                </li>
            </ul>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 4px; padding: 0 4px;">
                <span class="clau_text">Selecció</span>
                <span class="valor_text">1 alumne · Nil Roca</span>
            </div>

            <div class="error_alert" style="display: flex; gap: 8px; align-items: flex-start; margin-top: 4px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 1px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                <span>Vols eliminar Nil Roca? Aquesta acció no es pot desfer. Revisa les invitacions i matriculacions associades abans de confirmar.</span>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 4px;">
                <button type="button" class="boto_general" style="flex: 1;">Cancel·lar</button>
                <button type="button" class="boto_vermell" style="flex: 1;">Confirmar eliminació</button>
            </div>
        </section>

    </main>

    <p class="frase_estrella">Menys esperes. Més moments.</p>

</body>
</html>