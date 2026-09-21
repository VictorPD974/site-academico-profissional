<?php
$page_title = $page_title ?? 'Victor Destefane | Matemática, Física e Tecnologia';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Victor Destefane — Matemática, Física, Tecnologia e Desenvolvimento.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <title><?= htmlspecialchars($page_title) ?></title>
   <link rel="stylesheet" href="/assets/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
   
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">VICTOR <span>DESTEFANE</span></a>
        <button class="menu-toggle" aria-label="Abrir menu">☰</button>
        <nav class="nav">
            <a class="<?= $current_page === 'index.php' ? 'active' : '' ?>" href="index.php">Início</a>
            <a class="<?= $current_page === 'aulas.php' ? 'active' : '' ?>" href="aulas.php">Aulas</a>
            <a class="<?= in_array($current_page, ['desenvolvedor.php','portfolio.php']) ? 'active' : '' ?>" href="desenvolvedor.php">Desenvolvedor</a>
              <a class="<?= $current_page === 'portfolio.php' ? 'active' : '' ?>" href="portfolio.php">Portfolio</a>
            <a class="<?= $current_page === 'artigos.php' ? 'active' : '' ?>" href="artigos.php">Artigos</a>
            <a class="<?= $current_page === 'parcerias.php' ? 'active' : '' ?>" href="parcerias.php">Parcerias</a>
            <a class="nav-button" href="contato.php">Contato</a>
             <!-- Botão Modo Escuro -->
        <!-- Botão Modo Escuro dentro do nav -->
      <button id="themeToggle" class="theme-toggle-btn" aria-label="Alternar Tema">
        <span id="themeIcon">🌙</span>
      </button>
    </nav>
    </div>
</header>
    
     <!-- Banner de Pedido Amigável para AdBlock 
<div id="adblock-notice" class="adblock-banner" style="display: none;">
    <div class="container adblock-content">
        <span>💡 <strong>Gosta do conteúdo?</strong> Considere desativar o AdBlock para apoiar a manutenção do site. Não usamos anúncios invasivos!</span>
        <button onclick="document.getElementById('adblock-notice').style.display='none'" class="adblock-close" aria-label="Fechar">&times;</button>
    </div>
</div>

<script>
// Detecta se os scripts de anúncios foram bloqueados
window.addEventListener('load', function() {
    setTimeout(function() {
        // Tenta checar um elemento de anúncio padrão
        const adElement = document.querySelector('.adsbygoogle, .ad-unit');
        if (!adElement || adElement.offsetHeight === 0) {
            document.getElementById('adblock-notice').style.display = 'block';
        }
    }, 1000);
});
</script> -->
<main>
