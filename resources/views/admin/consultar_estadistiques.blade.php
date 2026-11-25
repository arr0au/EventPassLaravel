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
        <a href="{{ route('admin.menu') }}" class="boto_tornar">
            <button type="button" class="boto_general boto_tornar">&#8592;</button>
        </a>
        <h1 id="titol" class="Webtitle">EventPass</h1>
    </header>

    <main>
        <header>
            <span class="permisionspacetext">ESPAI D'ADMINISTRACIÓ</span>
            <h2 class="nom_apartat">Consultar estadístiques</h2>
            <p class="desc_apartat">Una visió clara de les persones i les validacions.</p>
        </header>

        <form method="GET" action="{{ route('admin.consultar_estadistiques') }}" class="filtre_ambit">
            <label class="label_text" for="esdeveniment_id">Àmbit de la consulta</label>
            <select id="esdeveniment_id" name="esdeveniment_id" class="selector_general" onchange="this.form.submit()">
                <option value="">
                    Tots els actes · {{ $esdeveniments->count() }}
                    {{ $esdeveniments->count() === 1 ? 'acte' : 'actes' }}
                </option>
                @foreach ($esdeveniments as $esdeveniment)
                    <option value="{{ $esdeveniment->id }}" @selected($esdevenimentId == $esdeveniment->id)>
                        {{ $esdeveniment->Nom }}
                    </option>
                @endforeach
            </select>
        </form>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Persones i invitacions</h3>
            </header>

            <div class="cartes">
                <article>
                    <strong>{{ $totalAlumnes }}</strong>
                    <span>alumnes al directori</span>
                </article>
                <article>
                    <strong>{{ $totalConvidats }}</strong>
                    <span>convidats al directori</span>
                </article>
            </div>

            <p class="desc_apartat nota_estadistica_md">
                {{ $totalDirectori }} persones al directori; {{ $personesUniques }} tenen almenys un registre de
                Matriculació.
            </p>

            <div class="estadistica_capcalera">
                <div class="estadistica_valor_grup">
                    <span class="estadistica_valor">{{ $invitacionsUtilitzades }} de {{ $invitacionsMaximes }}</span>
                </div>
                <span class="badge badge_estadistica">{{ number_format($percentatgeInvitacions, 2, ',', '.') }}
                    %</span>
            </div>
            <span class="estadistica_subtitol">invitacions utilitzades</span>

            <div class="barra_progres barra_progres_mt4">
                <div style="width: {{ $percentatgeInvitacions }}%;"></div>
            </div>

            <p class="desc_apartat nota_estadistica">
                Màxim: 4 invitacions × {{ $totalAlumnes }} alumnes. Queden {{ $invitacionsDisponibles }} invitacions
                disponibles.
            </p>
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
                @forelse ($participacionsPerActe as $item)
                    <div class="item_barra">
                        <div class="item_barra_capcalera">
                            <span class="item_barra_nom">{{ $item['nom'] }}</span>
                            <span class="item_barra_dada">{{ $item['persones'] }} pers. / {{ $item['registres'] }}
                                reg.</span>
                        </div>
                        <div class="grup_barres">
                            <div class="barra_progres barra_prima">
                                <div style="width: {{ round(($item['persones'] / $maxParticipacio) * 100, 2) }}%;">
                                </div>
                            </div>
                            <div class="barra_progres barra_prima">
                                <div class="barra_grisa"
                                    style="width: {{ round(($item['registres'] / $maxParticipacio) * 100, 2) }}%;">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="alert_msg">No hi ha actes registrats.</p>
                @endforelse
            </div>

            <p class="desc_apartat nota_estadistica_mt8">
                Les persones úniques de cada acte no se sumen: una mateixa persona pot participar en més d'un acte.
            </p>
        </section>

        <section class="div_general">
            <header>
                <h3 class="text_fitxa">Registres per punt de control</h3>
            </header>

            <div class="llista_barres_compacta">
                @forelse ($registresPerPunt as $punt => $total)
                    <div class="item_barra">
                        <div class="item_barra_capcalera">
                            <span class="item_barra_nom">{{ $punt }}</span>
                            <span class="item_barra_valor">{{ $total }}</span>
                        </div>
                        <div class="barra_progres barra_prima">
                            <div
                                style="width: {{ $totalRegistres > 0 ? round(($total / $totalRegistres) * 100, 2) : 0 }}%;">
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="alert_msg">Encara no hi ha registres de validació.</p>
                @endforelse
            </div>

            <p class="desc_apartat nota_estadistica_mt12">{{ $totalRegistres }} registres en total.</p>
        </section>
    </main>

    <p class="frase_estrella">Menys esperes. Més moments.</p>
</body>

</html>
