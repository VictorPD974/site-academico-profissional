<?php 
$page_title = "Artigos | Victor Destefane";
include 'includes/header.php'; 

// Array contendo a lista de artigos para fácil manutenção e código limpo
$artigos = [
    [
        'categoria'  => 'Matemática Pura',
        'titulo'     => 'Álgebras de Lie Simples Sobre o Corpo de Característica 2',
        'descricao'  => 'Esta dissertação apresenta um estudo sistemático e uma enciclopédia das álgebras de Lie simples de característica 2 com dimensão até 31. Analisamos as estruturas conhecidas nessa categoria e abordamos questões em aberto levantadas pela literatura.',
        'tamanho'    => '815 KB',
        'pdf'        => 'pdf/AlgebrasdeLieSimplesSobreoCorpodeCaracterstica2.pdf'
    ],
    [
        'categoria'  => 'Educação a Distância',
        'titulo'     => 'Adaptações do Ensino a Distância para Estudantes com Transtorno do Espectro Autista',
        'descricao'  => 'A Lei nº 13.146/2015, conhecida como Estatuto da Pessoa com Deficiência, estabelece diretrizes para a inclusão de pessoas com Transtorno do Espectro Autista (TEA) no ensino. A partir de análise documental em instituições públicas paulistas de ensino superior presencial (USP) e a distância (UNIVESP), este artigo examina adaptações, ferramentas e estratégias de ensino e avaliação voltadas a pessoas com TEA, destacando aspectos mais facilmente atendidos no ensino a distância em comparação ao presencial.',
        'tamanho'    => '366 KB',
        'pdf'        => 'pdf/EAD_2472+(1) (1).pdf'
    ],
    [
        'categoria'  => 'Inclusão & Neurodiversidade',
        'titulo'     => 'ACOLHIMENTO DE ESTUDANTES AUTISTAS E NEURODIVERGENTES PELO COLETIVO AUTISTA DA UNIVERSIDADE DE SÃO PAULO (CAUSP)',
        'descricao'  => 'A Lei nº 13.146/2015, conhecida como Estatuto da Pessoa com Deficiência, estabelece diretrizes para a inclusão de pessoas com Transtorno do Espectro Autista (TEA) no ensino. A partir de análise documental em instituições públicas paulistas de ensino superior presencial (USP) e a distância (UNIVESP), este artigo examina adaptações, ferramentas e estratégias de ensino e avaliação voltadas a pessoas com TEA, destacando aspectos mais facilmente atendidos no ensino a distância em comparação ao presencial.',
        'tamanho'    => '394.65 KB',
        'pdf'        => 'pdf/simposiobem-estar-2022-acolhimento-de-estudantes-autistas-e-neurodivergentes-pelo-colet.pdf'
  ],
    // Adicione mais artigos aqui seguindo o mesmo padrão
];
?>

<style>
/* CSS do layout da Grid de Artigos */
.articles-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1.5rem;
    margin-top: 2rem;
}

/* Telas médias (tablets): 2 por linha */
@media (min-width: 768px) {
    .articles-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Telas grandes (desktops): até 3 por linha, como nas linguagens */
@media (min-width: 1024px) {
    .articles-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Organização interna do cartão para garantir altura uniforme */
.article-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}
</style>

<div class="container section">
    <span class="eyebrow">PUBLICAÇÕES E ENSAIOS</span>
    <h1>Artigos & <span>Publicações</span></h1>
    <p class="lead">Trabalhos acadêmicos, ensaios e notas de estudo em Matemática, Física e Tecnologia disponíveis para download.</p>

    <!-- Grid contendo todos os artigos dentro de um único container -->
    <div class="articles-grid">
        <?php foreach ($artigos as $artigo): ?>
            <article class="article-card">
                <div>
                    <span class="article-category"><?= htmlspecialchars($artigo['categoria']); ?></span>
                    <h2><?= htmlspecialchars($artigo['titulo']); ?></h2>
                    <p><?= htmlspecialchars($artigo['descricao']); ?></p>
                </div>
                <div class="article-footer">
                    <span>PDF • <?= htmlspecialchars($artigo['tamanho']); ?></span>
                    <div class="actions-pdf">
                        <a href="<?= htmlspecialchars($artigo['pdf']); ?>" target="_blank" rel="noopener noreferrer" class="read-link">Visualizar 👁️</a>
                        <a href="<?= htmlspecialchars($artigo['pdf']); ?>" download class="btn-download">Baixar 📥</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>