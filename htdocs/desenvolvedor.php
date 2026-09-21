<?php
$page_title = 'Desenvolvedor | Victor Destefane';
include 'includes/header.php';
$technologies = [
    ['Python','Automação, análise de dados e desenvolvimento de soluções.'],
    ['PHP','Desenvolvimento web e aplicações com backend.'],
    ['HTML','Estruturação semântica de páginas e aplicações web.'],
    ['CSS','Interfaces responsivas e estilização de aplicações.'],
    ['JavaScript','Interatividade e funcionalidades no frontend.'],
    ['C++','Programação e fundamentos de desenvolvimento de software.'],
    ['SQL','Consultas, modelagem e manipulação de bancos de dados.'],
    ['Linguagem R','Análise estatística, ciência de dados e visualização.'],
    ['Power BI','Construção de dashboards interativos e análise de dados.'],
    ['LaTeX','Editoração científica e documentação acadêmica de alta qualidade.']
];
?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">DESENVOLVEDOR</p>
        <h1>Desenvolvimento e tecnologia</h1>
        <p>Projetos que combinam programação, resolução de problemas e conhecimento matemático.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">TECNOLOGIAS</p>
                <h2>Ferramentas e linguagens</h2>
            </div>
        </div>

        <div class="tech-grid">
            <?php 
            // Mapeamento de ícones e tags por tecnologia para alimentar o card
            $tech_meta = [
                'Python'      => ['icon' => 'devicon-python-plain colored', 'tags' => ['Automação', 'Data Science', 'Backend']],
                'PHP'         => ['icon' => 'devicon-php-plain colored', 'tags' => ['Web', 'Backend', 'Sistemas']],
                'HTML'        => ['icon' => 'devicon-html5-plain colored', 'tags' => ['Frontend', 'Semântica']],
                'CSS'         => ['icon' => 'devicon-css3-plain colored', 'tags' => ['UI/UX', 'Responsivo']],
                'JavaScript'  => ['icon' => 'devicon-javascript-plain colored', 'tags' => ['ES6+', 'Frontend', 'Interatividade']],
                'C++'         => ['icon' => 'devicon-cplusplus-plain colored', 'tags' => ['Algoritmos', 'Performance']],
                'SQL'         => ['icon' => 'devicon-oracle-original colored', 'tags' => ['Bancos de Dados', 'Queries', 'PL/SQL']],
                'Linguagem R' => ['icon' => 'devicon-r-original colored', 'tags' => ['Estatística', 'Data Analysis', 'Visualização']],
                'Power BI'    => ['icon' => 'fa-solid fa-chart-column colored', 'tags' => ['BI', 'Dashboards', 'DAX']],
                'LaTeX'       => ['icon' => 'devicon-latex-original colored', 'tags' => ['Acadêmico', 'Documentação', 'Artigos']]
            ];

            foreach ($technologies as $i => $tech): 
                $name = $tech[0];
                $desc = $tech[1];
                $icon = isset($tech_meta[$name]['icon']) ? $tech_meta[$name]['icon'] : 'devicon-code-plain';
                $tags = isset($tech_meta[$name]['tags']) ? $tech_meta[$name]['tags'] : ['Tecnologia'];
                $index = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
            ?>
            <article class="tech-card">
                <div class="tech-card-header">
                    <span class="tech-number"><?= $index ?></span>
                    <i class="<?= $icon ?> tech-icon"></i>
                </div>
                <h3><?= htmlspecialchars($name) ?></h3>
                <p><?= htmlspecialchars($desc) ?></p>
                <div class="tech-tags">
                    <?php foreach ($tags as $tag): ?>
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
            <p class="eyebrow">PERFIL</p>
            <h2>Desenvolvimento orientado a problemas</h2>
            <p>Tenho interesse em criar aplicações úteis, automatizar tarefas e transformar necessidades concretas em soluções digitais.</p>
            <p>Além das linguagens apresentadas aqui, tenho interesse em APIs, Git/GitHub e desenvolvimento de aplicações voltadas a dados.</p>
        </div>
        <div class="highlight-box">
            <strong>Portfólio</strong>
            <p>Conheça os projetos já desenvolvidos e acompanhe novos trabalhos.</p>
            <a class="text-link" href="portfolio.php">Ver portfólio →</a>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
