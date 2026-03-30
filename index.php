<?php
// Inclure l'en-tête commun
require_once 'includes/header.php';
?>

<main class="main-content">
    <div class="hero">
        <div class="hero-content">
            <h1>📚 Fiches de Révision</h1>
            <p>Maîtrisez les fondamentaux du développement web avec nos fiches complètes et professionnelles</p>
            <div class="hero-badges">
                <span class="hero-badge">HTML5</span>
                <span class="hero-badge">CSS3</span>
                <span class="hero-badge">PHP</span>
                <span class="hero-badge">RGAA</span>
            </div>
        </div>
    </div>

    <div class="cards-grid">
        <!-- Carte HTML -->
        <div class="card card-html">
            <div class="card-header">
                <div class="card-icon">📄</div>
                <span class="card-badge">Langage de balisage</span>
            </div>
            <div class="card-body">
                <h2>HTML</h2>
                <p>Structure sémantique, balises essentielles, formulaires, accessibilité RGAA et bonnes pratiques.</p>
                <ul class="card-features">
                    <li>🏗️ Structure de base</li>
                    <li>🧠 Balises sémantiques</li>
                    <li>♿ Accessibilité RGAA</li>
                    <li>📝 Formulaires complets</li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="fiche-html.php" class="btn btn-primary">Consulter la fiche →</a>
            </div>
        </div>

        <!-- Carte CSS -->
        <div class="card card-css">
            <div class="card-header">
                <div class="card-icon">🎨</div>
                <span class="card-badge">Styles & Design</span>
            </div>
            <div class="card-body">
                <h2>CSS</h2>
                <p>Mise en page, sélecteurs, Flexbox, Grid, Box Model, spécificité et propriétés essentielles.</p>
                <ul class="card-features">
                    <li>🎯 Sélecteurs avancés</li>
                    <li>⚖️ Spécificité CSS</li>
                    <li>📦 Box Model</li>
                    <li>📐 Flexbox & Grid</li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="fiche-css.php" class="btn btn-primary">Consulter la fiche →</a>
            </div>
        </div>
    </div>

    <!-- Section bonus -->
    <div class="bonus-section">
        <div class="bonus-card">
            <div class="bonus-icon">💡</div>
            <h3>Conseils d'examen</h3>
            <p>Les fiches incluent les pièges courants et les affirmations vraies/fausses qui tombent souvent aux examens.</p>
        </div>
        <div class="bonus-card">
            <div class="bonus-icon">♿</div>
            <h3>Accessibilité RGAA</h3>
            <p>Toutes les fiches respectent les normes d'accessibilité web avec des exemples concrets.</p>
        </div>
        <div class="bonus-card">
            <div class="bonus-icon">🚀</div>
            <h3>Prêt pour l'examen</h3>
            <p>Structure claire, codes commentés et points essentiels à retenir pour réussir.</p>
        </div>
    </div>
</main>

<?php
// Inclure le pied de page
require_once 'includes/footer.php';
?>