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
<a  class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>            
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
        </button>
        <h1 class="Webtitle">EventPass</h1>
    </header>

    <main>
        <header>
            <span class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <h2 class="nom_apartat">Editar alumne</h2>
            <p class="desc_apartat">Editar alumne. </p>
        </header>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Edit un alumne</h3>
                <span class="badge">Edita alumne</span>
            </header>

        <form class="div_formulari" action="{{ route('alumne.update', $alumne) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="fila_formulari">
                    <div class="camp_formulari_flex">
                        <label class="label_text">Nom</label>
                        <input type="text" class="input_general input_text" value="{{ old('Nom', $alumne->Nom) }}" name="Nom" required>
                    </div>
                    <div class="camp_formulari_flex">
                        <label class="label_text">Cognom</label>
                        <input type="text" class="input_general input_text" value="{{ old('Cognom', $alumne->Cognom) }}" name="Cognom" required>
                    </div>
                </div>

                <div class="camp_formulari">
                    <label class="label_text">DNI/NIE · 9 caràcters</label>
                    <input type="text" class="input_general input_text" value="{{ old('DNI_NIE', $alumne->DNI_NIE) }}" name="DNI_NIE" required>
                </div>

                <div class="camp_formulari">
                    <label class="label_text">Correu electrònic</label>
                    <input type="email" class="input_general input_text" value="{{ old('Correu', $alumne->Correu) }}" name="Correu">
                </div>

                <div class="camp_formulari">
                    <label class="label_text">Contrasenya inicial</label>
                    <input type="password" class="input_general input_text" value="{{ old('Contrasenya', $alumne -> Contrasenya) }}" name="Contrasenya">
                </div>

                <div class="fila_formulari fila_formulari_final">
                    <div class="camp_formulari_flex">
                        <label class="label_text">Invitacions · de 0 a 4</label>
                        <select class="selector_general">
                            <option>4</option>
                        </select>
                    </div>
                    <div class="camp_formulari_flex">
                        <label class="label_text">Puntuació</label>
                        <input type="number" class="input_general input_text" value="{{ old('Puntuacio', $alumne -> Puntuacio) }}" name="Puntuacio">
                    </div>
                </div>

                <!-- Alerta d'informació -->
                <div class="alert_msg alert_amb_icona">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    <span>QR personal: es generarà en crear la fitxa. Les dades escrites encara no s'han desat.</span>
                </div>

                <!-- Botó enviar -->
                <button type="submit" class="boto_continuar boto_ample">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                    Editar Alumne
                </button>
            </form>
        </section>

    </main>

    <p class="frase_estrella">Menys esperes. Més moments.</p>

</body>
</html>