<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Pletium</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/index/hero.css">
    <link rel="stylesheet" href="/assets/css/sites/index/cansat.css">
    <link rel="stylesheet" href="/assets/css/sites/index/team.css">
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
                    <a href="/" class="hero-btn btn-primary">Zjistit více</a>
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

    <section class="team-section" id="nas-tym">
        <div class="team-container">
            <h2 class="section-title">Náš tým</h2>
            <div class="team-grid">

                <div class="team-card">
                    <img src="/assets/images/index/team/default.webp" alt="Fotografie člena" class="team-photo">
                    <h3 class="team-name">Adam</h3>
                    <p class="team-role">Kapitán týmu, Programování</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/default.webp" alt="Fotografie člena" class="team-photo">
                    <h3 class="team-name">Honza</h3>
                    <p class="team-role">Web Developer, Správce soc. sítí</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/default.webp" alt="Fotografie člena" class="team-photo">
                    <h3 class="team-name">Helena</h3>
                    <p class="team-role">3D modelování, Programování</p>
                </div>

                <div class="team-card">
                    <img src="/assets/images/index/team/default.webp" alt="Fotografie člena" class="team-photo">
                    <h3 class="team-name">Veronika</h3>
                    <p class="team-role">Grafika, Tvorba padáku</p>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>
</body>
</html>