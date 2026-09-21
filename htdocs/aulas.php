<?php
$page_title = 'Aulas Particulares | Victor Destefane';
include 'includes/header.php';

// Array dinâmico de serviços/aulas com ícones e tags
$services = [
    [
        'index' => '01',
        'icon'  => 'fa-solid fa-calculator',
        'title' => 'Matemática',
        'desc'  => 'Reforço escolar, ensino médio, preparação para provas, vestibulares e acompanhamento acadêmico em cálculo, álgebra e geometria.',
        'tags'  => ['Álgebra', 'Cálculo', 'Geometria', 'Estatística']
    ],
    [
        'index' => '02',
        'icon'  => 'fa-solid fa-atom',
        'title' => 'Física',
        'desc'  => 'Revisão de conceitos fundamentais, resolução orientada de exercícios e preparação estruturada para avaliações.',
        'tags'  => ['Mecânica', 'Termodinâmica', 'Eletromagnetismo']
    ],
    [
        'index' => '03',
        'icon'  => 'fa-solid fa-user-graduate',
        'title' => 'Acompanhamento',
        'desc'  => 'Planejamento personalizado da rotina de estudos e suporte contínuo focado no ritmo e objetivos do aluno.',
        'tags'  => ['Mentoria', 'Plano de Estudos', 'Resolução de Listas']
    ]
];

// Array de depoimentos para otimização do carrossel
$testimonials = [
    [
        'quote'  => 'Excelente professor, com o apoio dele eu consegui uma ótima nota em um concurso público, recomendo demais.',
        'author' => 'Osvaldo Belchior'
    ],
    [
        'quote'  => 'Professor, explica muito, solicito e preço justo super recomendo!!',
        'author' => 'Tamires da Silva'
    ],
    [
        'quote'  => 'Professor sempre muito disposto a tirar minhas dúvidas, explica muito bem, recomendo demais. Me ajudou com algumas matérias da graduação que eu tive mais dificuldade.',
        'author' => 'Gabriel Braga'
    ],
    [
        'quote'  => 'Professor muito atencioso e bem preparado para explicar com calma e delicadeza!',
        'author' => 'Brenda Yasmin'
    ],
    [
        'quote'  => 'Victor é um ótimo professor, empenhado nas necessidades do aluno e usando de exemplos e demonstrações para nos colocar para pensar e realmente entender o conteúdo. Ele é a diferença entre decorar e aprender',
        'author' => 'Aline Costa'
    ],
    [
        'quote'  => 'Um excelente professor, as aulas de reforço me salvaram durante a faculdade. Ele não só ensina, mas também motiva os alunos a pensarem por si mesmos. Tem uma forma clara de explicar, quebrando conceitos complexos em partes mais simples...',
        'author' => 'Flavia Sousa'
    ]
];
?>

<style>
/* Estilos extras para dar destaque imediato aos cards de serviço */
.service-card-featured {
    position: relative;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-top: 3px solid var(--accent, #2563eb);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.service-card-featured:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    border-color: var(--accent, #2563eb);
}

.service-icon-box {
    width: 42px;
    height: 42px;
    border-radius: 8px;
    background: rgba(37, 99, 235, 0.1);
    color: var(--accent, #2563eb);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
}
</style>

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">AULAS PARTICULARES</p>
        <h1>Matemática e Física</h1>
        <p>Atendimento individual para quem busca reforço, preparação e acompanhamento nos estudos.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards-3">
            <?php foreach ($services as $s): ?>
            <article class="service-card service-card-featured">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <div class="service-icon-box">
                            <i class="<?= $s['icon'] ?>"></i>
                        </div>
                        <span style="font-weight: 800; font-size: 0.95rem; opacity: 0.5;"><?= $s['index'] ?></span>
                    </div>

                    <h3 style="font-size: 1.35rem; margin-bottom: 8px;"><?= htmlspecialchars($s['title']) ?></h3>
                    <p style="line-height: 1.6;"><?= htmlspecialchars($s['desc']) ?></p>
                </div>
                
                <div class="tech-tags" style="margin-top: 20px;">
                    <?php foreach ($s['tags'] as $tag): ?>
                        <span><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="container two-col">
        <div>
            <p class="eyebrow">COMO FUNCIONA</p>
            <h2>Atendimento individual</h2>
            <p>As aulas podem ser organizadas de acordo com o conteúdo, nível de conhecimento e objetivo do aluno.</p>
            <ul class="check-list">
                <li>Identificação das principais dificuldades</li>
                <li>Revisão da teoria necessária</li>
                <li>Resolução orientada de exercícios</li>
                <li>Acompanhamento da evolução</li>
            </ul>
        </div>
        <div class="contact-panel">
            <h3>Quer conversar sobre as aulas?</h3>
            <p>Entre em contato para informar a disciplina, nível de ensino e objetivo.</p>
            <a class="button primary" href="contato.php">Solicitar informações</a>
        </div>
    </div>
</section>

<section class="section testimonials-section">
    <div class="container">
        <div class="testimonials-header">
            <div>
                <span class="eyebrow">DEPOIMENTOS</span>
                <h2>O que dizem os Alunos</h2>
                <p class="lead-sm">Avaliações de quem já teve aulas particulares e acompanhamento acadêmico.</p>
            </div>
            <!-- Botões de Navegação -->
            <div class="carousel-controls">
                <button class="carousel-btn prev" id="testimonialPrev" aria-label="Depoimento anterior">←</button>
                <button class="carousel-btn next" id="testimonialNext" aria-label="Próximo depoimento">→</button>
            </div>
        </div>

        <!-- Track/Carrossel de Cards -->
        <div class="testimonials-carousel" id="testimonialTrack">
            <?php foreach ($testimonials as $t): ?>
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="quote">"<?= htmlspecialchars($t['quote']) ?>"</p>
                <span class="author">— <?= htmlspecialchars($t['author']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>