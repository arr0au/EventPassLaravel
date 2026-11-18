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
 
    </header>

    <main>
        <header>
            <span class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <span>Dades de mostra</span>
            <h2 class="nom_apartat">Consultar estadístiques</h2>
            <p class="desc_apartat">Una visió clara de les persones i les validacions.</p>
        </header>

        <div class="filtre_ambit">
            <label class="label_text">Àmbit de la consulta</label>
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
            
            <p class="desc_apartat nota_estadistica_md">7 persones al directori; 6 tenen almenys un registre de Matriculació.</p>
            
            <div class="estadistica_capcalera">
                <div class="estadistica_valor_grup">
                    <span class="estadistica_valor">3 de 16</span>
                </div>
                <span class="badge badge_estadistica">18,75 %</span>
            </div>
            <span class="estadistica_subtitol">invitacions utilitzades</span>
            
            <div class="barra_progres barra_progres_mt4">
                <div class="amplada_18_75"></div>
            </div>
            
            <p class="desc_apartat nota_estadistica">Màxim: 4 invitacions × 4 alumnes. Queden 13 invitacions disponibles.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Participacions per acte</h3>
            </header>
            
            <div class="llegenda_grafic">
                <div class="llegenda_item">
                    <div class="llegenda_quadrat verd"></div>
                    <span>Persones úniques</span>
                </div>
                <div class="llegenda_item">
                    <div class="llegenda_quadrat gris"></div>
                    <span>Registres</span>
                </div>
            </div>
            
            <div class="llista_barres">
                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Jornada cultural</span>
                        <span class="item_barra_dada">5 pers. / 6 reg.</span>
                    </div>
                    <div class="grup_barres">
                        <div class="barra_progres barra_prima"><div class="amplada_83_33"></div></div>
                        <div class="barra_progres barra_prima"><div class="barra_grisa amplada_100"></div></div>
                    </div>
                </div>
                
                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Taller creatiu</span>
                        <span class="item_barra_dada">3 pers. / 3 reg.</span>
                    </div>
                    <div class="grup_barres">
                        <div class="barra_progres barra_prima"><div class="amplada_50"></div></div>
                        <div class="barra_progres barra_prima"><div class="barra_grisa amplada_50"></div></div>
                    </div>
                </div>

                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Xerrada inspiradora</span>
                        <span class="item_barra_dada">1 pers. / 1 reg.</span>
                    </div>
                    <div class="grup_barres">
                        <div class="barra_progres barra_prima"><div class="amplada_16_66"></div></div>
                        <div class="barra_progres barra_prima"><div class="barra_grisa amplada_16_66"></div></div>
                    </div>
                </div>
            </div>
            
            <p class="desc_apartat nota_estadistica_mt8">Les persones úniques de cada acte no se sumen: una mateixa persona pot participar en més d'un acte.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Resultats de validació</h3>
                <span class="badge">10 registres</span>
            </header>
            
            <div class="estadistica_gran">
                80 % correctes
            </div>
            
            <div class="barra_doble">
                <div class="barra_doble_verd amplada_80"></div>
                <div class="barra_doble_vermell amplada_20"></div>
            </div>
            
            <div class="estadistica_badges_fila">
                <span class="badge">8 correctes</span>
                <span class="error_badge">2 incorrectes</span>
            </div>
            
            <p class="desc_apartat nota_estadistica_mt8">10 registres de validació corresponen a 6 persones úniques, no a 10 assistents.</p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Registres per punt de control</h3>
            </header>
            
            <div class="llista_barres_compacta">
                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Porta principal</span>
                        <span class="item_barra_valor">4</span>
                    </div>
                    <div class="barra_progres barra_prima"><div class="amplada_40"></div></div>
                </div>
                
                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Accés auditori</span>
                        <span class="item_barra_valor">2</span>
                    </div>
                    <div class="barra_progres barra_prima"><div class="amplada_20"></div></div>
                </div>

                <div class="item_barra">
                    <div class="item_barra_capcalera">
                        <span class="item_barra_nom">Vestíbul</span>
                        <span class="item_barra_valor">4</span>
                    </div>
                    <div class="barra_progres barra_prima"><div class="amplada_40"></div></div>
                </div>
            </div>
            
            <p class="desc_apartat nota_estadistica_mt12">10 registres en total. Vestíbul agrupa 3 del Taller creatiu i 1 de la Xerrada inspiradora.</p>
        </section>

    </main>

    <p class="frase_estrella">Menys esperes. Més moments.</p>

</body>
</html>