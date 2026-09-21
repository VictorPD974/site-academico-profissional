<?php 
$page_title = "Portfólio & Projetos | Victor Destefane";
include 'includes/header.php'; 
?>

<div class="container section">
    <span class="eyebrow">PORTFÓLIO</span>
    <h1>Projetos <span>Desenvolvidos</span></h1>
    <p class="lead">Uma seleção de projetos profissionais, académicos e pessoais desenvolvidos recente e atualmente.</p>

    <!-- Seção de Projetos -->
    <div class="partners-grid">
        
        <!-- Projeto 1 -->
        <div class="partner-card">
            <div class="partner-badge">Projeto Profissional</div>
            <h3>Fiscal TXT → JSON</h3>
            <p>Ferramenta para leitura e parsing de arquivos fiscais em lote (.TXT), conversão estruturada para JSON e visualização analítica de divergências num dashboard interativo.</p>
            <p style="margin-top: 10px; font-size: 0.85rem; color: var(--text-muted, #666);"><strong>Tecnologias:</strong> Python, PHP, JavaScript, Power BI, MySQL</p>
            <a href="https://github.com/VictorPD974/projeto-auditoria" target="_blank" rel="noopener noreferrer" class="partner-link">Repositório GitHub →</a>
        </div>

        <!-- Projeto 2 -->
        <div class="partner-card">
            <div class="partner-badge">Projeto Profissional</div>
            <h3>Galeria_Upload</h3>
            <p>Sistema simples de upload e exibição de imagens e vídeos desenvolvido em PHP + MySQL, com interface em HTML/CSS. O projeto permite enviar arquivos com uma descrição e visualizar os itens enviados em formato de galeria.</p>
            <p style="margin-top: 10px; font-size: 0.85rem; color: var(--text-muted, #666);"><strong>Tecnologias:</strong> PHP, Laravel, JavaScript, HTML/CSS, MySQL</p>
            <a href="https://github.com/seu-usuario/k2web-project" target="_blank" rel="noopener noreferrer" class="partner-link">Repositório GitHub →</a>
        </div>

        <!-- Projeto 3 -->
        <div class="partner-card">
            <div class="partner-badge">Projeto Acadêmico</div>
            <h3>IA como Ferramenta de Aprendizagem Ativa de Python</h3>
            <p>Este repositório foi desenvolvido como entrega oficial para o Desafio de Projeto da DIO (Digital Innovation One), cujo objetivo é explorar o uso de Inteligência Artificial como uma ferramenta estratégica de aprendizagem ativa e curadoria de conhecimento.</p>
            <p style="margin-top: 10px; font-size: 0.85rem; color: var(--text-muted, #666);"><strong>Tecnologias:</strong> NotebookLM</p>
            <a href="https://github.com/seu-usuario/academic-projects" target="_blank" rel="noopener noreferrer" class="partner-link">Repositório GitHub →</a>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>