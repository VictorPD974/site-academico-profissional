<?php
$page_title = 'Contato | Victor Destefane';
include 'includes/header.php';
?>
<section class="section">
    <div class="container">
        <p class="eyebrow">Contato</p>
        <h1>Entre em <span>contato</span></h1>
        <p class="lead">Use o formulário para falar sobre aulas, projetos ou parcerias.</p>

        <?php if (isset($_GET['status']) && $_GET['status'] == 'sucesso'): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 6px; margin-bottom: 24px; border: 1px solid #c3e6cb;">
                Mensagem enviada com sucesso! Obrigado pelo contato.
            </div>
        <?php endif; ?>

        <div class="contact-grid">
            <!-- Coluna de Informações / Links -->
            <div class="contact-info-card">
                <p class="eyebrow">Mensagem</p>
                <h3 style="font-size: 22px; margin-bottom: 12px;">Como posso ajudar?</h3>
                <p style="color: var(--muted); font-size: 14px; margin-bottom: 28px;">
                    Informe seu objetivo e, se possível, os detalhes principais. 
                </p>

                <div class="contact-info-item">
                    <strong>LinkedIn</strong>
                    <a href="https://linkedin.com" target="_blank" rel="noopener">https://www.linkedin.com/in/victor-destefane-52575951/</a>
                </div>

                <div class="contact-info-item">
                    <strong>GitHub</strong>
                    <a href="https://github.com" target="_blank" rel="noopener">https://github.com/VictorPD974</a>
                </div>

                <div class="contact-info-item">
                    <strong>E-mail</strong>
                    <a href="mailto:seu-email@exemplo.com">victorpassarelli5@gmail.com</a>
                </div>
            </div>

            <!-- Coluna do Formulário -->
            <div class="contact-form-card">
                <form action="processa.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome completo" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="seu@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <select id="assunto" name="assunto" class="form-control">
                            <option value="Aulas particulares">Aulas particulares</option>
                            <option value="Desenvolvimento / Projetos">Desenvolvimento / Projetos</option>
                            <option value="Parcerias">Parcerias</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Escreva sua mensagem aqui..." required></textarea>
                    </div>

                    <button type="submit" class="button button-primary" style="width: 100%; margin-top: 8px;">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>