<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Pletium</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/index/hero.css">
    <link rel="stylesheet" href="/assets/css/sites/index/cansat.css">
    <link rel="stylesheet" href="/assets/css/sites/index/about.css">
    <link rel="stylesheet" href="/assets/css/sites/index/team.css">
    <link rel="stylesheet" href="/assets/css/sites/index/live.css">
    <link rel="stylesheet" href="/assets/css/sites/index/sponsors.css">
</head>

<body>
    <?php require __DIR__ . '/includes/elements/nav.php'; ?>

    <section class="hero">
        <div class="hero-content-grid">

            <div class="hero-logo-box">
                <img src="/assets/images/logo/logo.svg" alt="Pletium Logo" class="hero-large-logo" draggable="false">
            </div>

            <div class="hero-text-box">
                <h1 class="hero-title">Pletium</h1>
                <p class="hero-description">
                    Studentský tým účastnící se soutěže CanSat, který vyvíjí funkční atmosférickou sondu o velikosti plechovky.
                </p>
                <div class="hero-actions-group">
                    <a href="/#o-tymu" class="hero-btn btn-primary">Zjistit více</a>
                    <a href="/live" class="hero-btn btn-secondary">Sledovat let</a>
                </div>
            </div>

        </div>
    </section>

    <section id="o-cansatu">
        <div class="cansat-section">
            <div class="cansat-section-image">
                <img src="/assets/images/index/cansat.webp" draggable="false">
            </div>
            <div class="cansat-section-content">
                <h2>
                    O Soutěži
                </h2>
                <p>
                CanSat je mezinárodní studentská soutěž zaštítěná Evropskou vesmírnou agenturou (ESA), zaměřená na stavbu funkčního satelitu o velikosti plechovky.
                Tyto satelity jsou vynášeny pomocí rakety, dronu či letadla a během sestupu musí zajišťovat bezdrátový přenos dat v reálném čase na vzdálenost až jednoho kilometru. 
                </p>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section id="o-tymu">
        <div class="about-section">
            <div class="about-section-image">
                <img src="/assets/images/index/team.webp" draggable="false" alt="Náš tým">
            </div>
            <div class="about-section-content">
                <h2>
                    O týmu
                </h2>
                <p>
                    Jsme čtyřčlenný tým studentů oboru Informační technologie ze Střední průmyslové školy ve Frýdku-Místku.
                    V rámci soutěže CanSat propojujeme naše zkušenosti z oblasti softwaru a hardwaru při vývoji funkčního modelu satelitu. 
                    V projektu se snažíme naše znalosti posunout o úroveň výš při řešení technických výzev spojených s vesmírným výzkumem.
                </p>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section class="team-section" id="clenove-tymu">
        <div class="team-container">
            <h2 class="section-title">Členové týmu</h2>
            <div class="team-grid">

                <div class="team-card">
                    <img src="/assets/images/index/team/Jirka.webp" alt="Fotografie člena" class="team-photo" draggable="false">
                    <h3 class="team-name">Jirka</h3>
                    <p class="team-role">Mentor týmu</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/Adam.webp" alt="Fotografie člena" class="team-photo" draggable="false">
                    <h3 class="team-name">Adam</h3>
                    <p class="team-role">Kapitán týmu, Programování</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/Honza.webp" alt="Fotografie člena" class="team-photo" draggable="false">
                    <h3 class="team-name">Honza</h3>
                    <p class="team-role">Web Developer, Správce soc. sítí</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/Helena.webp" alt="Fotografie člena" class="team-photo" draggable="false">
                    <h3 class="team-name">Helena</h3>
                    <p class="team-role">3D modelování, Programování</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/Veronika.webp" alt="Fotografie člena" class="team-photo" draggable="false">
                    <h3 class="team-name">Veronika</h3>
                    <p class="team-role">Grafika, Tvorba padáku, Výroba antény</p>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section>
        <div class="live-section">
            <div class="live-section-image">
                <img src="/assets/images/index/live.webp" draggable="false" alt="Náš tým">
            </div>
            <div class="live-section-content">
                <h2>
                    Sleduj naši misi
                </h2>
                <p>
                    Sledujte průběh naší mise v reálném čase prostřednictvím živého přenosu telemetrických dat přímo na našem webu.
                </p>
                <a href="/live" class="btn btn-primary">Sledovat let</a>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section class="sponsors-section" id="sponzori">
        <div class="team-container">
            <h2 class="section-title">Naši sponzoři</h2>
            <div class="sponsors-grid">

                <div class="sponsor-card">
                    <div class="sponsor-logo-wrapper">
                        <img src="/assets/images/index/sponsors/laskakit.webp" alt="Logo Sponzor 1" class="sponsor-logo" draggable="false">
                    </div>
                    <h3 class="sponsor-name">LaskaKit</h3>
                    <p class="sponsor-gift">Součástky, Mikrokontroléry</p>
                    <a href="https://www.laskakit.cz/" target="_blank" class="btn btn-primary btn-small">Navštívit web</a>
                </div>

                <div class="sponsor-card">
                    <div class="sponsor-logo-wrapper">
                        <img src="/assets/images/index/sponsors/lpz-group.webp" alt="Logo Sponzor 2" class="sponsor-logo" draggable="false">
                    </div>
                    <h3 class="sponsor-name">LPZ-Group</h3>
                    <p class="sponsor-gift">Peněžní dar</p>
                    <a href="https://www.lpz-group.cz/" target="_blank" class="btn btn-primary btn-small">Navštívit web</a>
                </div>

                <div class="sponsor-card">
                    <div class="sponsor-logo-wrapper">
                        <img src="/assets/images/index/sponsors/hwkitchen.webp" alt="Logo Sponzor 3" class="sponsor-logo" draggable="false">
                    </div>
                    <h3 class="sponsor-name">HWKitchen</h3>
                    <p class="sponsor-gift">Mikrokontrolér</p>
                    <a href="https://www.hwkitchen.cz/" target="_blank" class="btn btn-primary btn-small">Navštívit web</a>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <?php require __DIR__ . '/includes/elements/footer.php'; ?>
</body>
</html>