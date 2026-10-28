<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPass - Consultar estadístiques</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>

    <header>
        <a href="{{ route('admin.menu') }}" class="boto_tornar"><button type="button" class="boto_general boto_tornar">&#8592;</button></a>
        <h1 class="Webtitle">EventPass</h1>
    </header>

    <main>
        <header>
            <span class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <span>Dades de mostra</span>
            <h2 class="nom_apartat">Consultar estadístiques</h2>
            <p class="desc_apartat">Una visió clara de les persones i les validacions.</p>
        </header>

        <div style="display: flex; flex-direction: column; gap: 6px; margin-bottom: 4px;">
            <label class="label_text" style="font-size: 0.8rem;">Àmbit de la consulta</label>
            <select class="selector_general">
                <option>Tots els actes · 3 actes</option>
            </select>
        </div>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Persones i invitacions</h3>
            </header>
            
            <div class="cartes">
                <article>
                    <strong>4</strong>
                    <span>alumnes al directori</span>
                </article>
                <article>
                    <strong>3</strong>
                    <span>convidats al directori</span>
                </article>
            </div>
            
            <p class="desc_apartat" style="font-size: 0.85rem; margin-top: 4px;">7 persones al directori; 6 tenen almenys un registre de Matriculació.</p>
            
            <div style="display: flex; align-items: flex-end; justify-content: space-between; margin-top: 8px;">
                <div style="display: flex; align-items: baseline; gap: 8px;">
                    <span style="font-size: 1.6rem; font-weight: 500; color: var(--brand-green); letter-spacing: -0.02em;">3 de 16</span>
                </div>
                <span class="badge" style="margin-bottom: 6px;">18,75 %</span>
            </div>
            <span style="font-size: 0.8rem; color: var(--text-muted); margin-top: -12px;">invitacions utilitzades</span>
            
            <div class="barra_progres" style="margin-top: 4px;">
                <div style="width: 18.75%;"></div>
            </div>
            
            <p class="desc_apartat" style="font-size: 0.8rem; margin-top: 4px;">Màxim: 4 invitacions × 4 alumnes. Queden 13 invitacions disponibles.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Participacions per acte</h3>
            </header>
            
            <div style="display: flex; gap: 16px; align-items: center;">
                <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="width: 8px; height: 8px; border-radius: 2px; background-color: var(--brand-green);"></div>
                    <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Persones úniques</span>
                </div>
                <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="width: 8px; height: 8px; border-radius: 2px; background-color: var(--brand-gray-bar);"></div>
                    <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Registres</span>
                </div>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 16px; margin-top: 8px;">
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Jornada cultural</span>
                        <span style="color: var(--text-muted); font-size: 0.85rem;">5 pers. / 6 reg.</span>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 4px;">
                        <div class="barra_progres" style="height: 6px;"><div style="width: 83.33%;"></div></div>
                        <div class="barra_progres" style="height: 6px;"><div style="width: 100%; background-color: var(--brand-gray-bar);"></div></div>
                    </div>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Taller creatiu</span>
                        <span style="color: var(--text-muted); font-size: 0.85rem;">3 pers. / 3 reg.</span>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 4px;">
                        <div class="barra_progres" style="height: 6px;"><div style="width: 50%;"></div></div>
                        <div class="barra_progres" style="height: 6px;"><div style="width: 50%; background-color: var(--brand-gray-bar);"></div></div>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Xerrada inspiradora</span>
                        <span style="color: var(--text-muted); font-size: 0.85rem;">1 pers. / 1 reg.</span>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 4px;">
                        <div class="barra_progres" style="height: 6px;"><div style="width: 16.66%;"></div></div>
                        <div class="barra_progres" style="height: 6px;"><div style="width: 16.66%; background-color: var(--brand-gray-bar);"></div></div>
                    </div>
                </div>
            </div>
            
            <p class="desc_apartat" style="font-size: 0.8rem; margin-top: 8px;">Les persones úniques de cada acte no se sumen: una mateixa persona pot participar en més d'un acte.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Resultats de validació</h3>
                <span class="badge">10 registres</span>
            </header>
            
            <div style="font-size: 2.1rem; font-weight: 400; color: var(--brand-green); letter-spacing: -0.02em; margin-top: 4px;">
                80 % correctes
            </div>
            
            <div style="display: flex; width: 100%; height: 12px; border-radius: var(--radius-pill); overflow: hidden; margin-top: 4px;">
                <div style="width: 80%; background-color: var(--brand-green);"></div>
                <div style="width: 20%; background-color: var(--brand-red);"></div>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 4px;">
                <span class="badge">8 correctes</span>
                <span class="error_badge">2 incorrectes</span>
            </div>
            
            <p class="desc_apartat" style="font-size: 0.8rem; margin-top: 8px;">10 registres de validació corresponen a 6 persones úniques, no a 10 assistents.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Registres per punt de control</h3>
            </header>
            
            <div style="display: flex; flex-direction: column; gap: 14px; margin-top: 4px;">
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Porta principal</span>
                        <span style="font-weight: 700; color: var(--brand-green); font-size: 0.95rem;">4</span>
                    </div>
                    <div class="barra_progres" style="height: 6px;"><div style="width: 40%;"></div></div>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Accés auditori</span>
                        <span style="font-weight: 700; color: var(--brand-green); font-size: 0.95rem;">2</span>
                    </div>
                    <div class="barra_progres" style="height: 6px;"><div style="width: 20%;"></div></div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem;">
                        <span style="font-weight: 500; color: var(--text-main);">Vestíbul</span>
                        <span style="font-weight: 700; color: var(--brand-green); font-size: 0.95rem;">4</span>
                    </div>
                    <div class="barra_progres" style="height: 6px;"><div style="width: 40%;"></div></div>
                </div>
            </div>
            
            <p class="desc_apartat" style="font-size: 0.8rem; margin-top: 12px;">10 registres en total. Vestíbul agrupa 3 del Taller creatiu i 1 de la Xerrada inspiradora.</p>
        </section>

    </main>

    <p class="frase_estrella">Menys esperes. Més moments.</p>

</body>
</html>