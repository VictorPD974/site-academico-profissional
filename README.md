# site-academico-profissional
# 🌐 Portfólio Pessoal & Acadêmico — Victor Destefane

Repositório oficial do meu site pessoal e profissional. Esta plataforma serve como um ecossistema centralizado para a divulgação de projetos de desenvolvimento de software, artigos científicos, recursos pedagógicos e serviços de aulas particulares.

---

## 🎯 Proposta do Projeto

O site foi idealizado para funcionar como uma montra digital multifacetada, unindo a vertente acadêmica (Matemática, Física e Estatística) à engenharia de software e desenvolvimento web. O objetivo é oferecer uma experiência de navegação fluida, rápida e responsiva para potenciais clientes, empregadores, alunos e parceiros académicos, facilitando o acesso a materiais de estudo, portfólio técnico e formas de contato direto.

---

## 🛠️ Tecnologias e Ferramentas Utilizadas

### **Frontend**
* **HTML5 / CSS3:** Estruturação semântica e estilização avançada com foco em Design Responsivo (Grid e Flexbox).
* **JavaScript:** Interatividade dinâmica (como carrosséis, menus responsivos e efeitos visuais).
* **CDNs Externas:** Integração de bibliotecas e frameworks de ícones e fontes para suporte visual.

### **Backend & Base de Dados**
* **PHP:** Motor dinâmico responsável pela modularização de componentes (`include`/`require`) e processamento de formulários.
* **PDO (PHP Data Objects):** Abstração segura para a conexão e manipulação de bases de dados relacionais (MySQL / Oracle SQL).
* **MySQL / Oracle:** Armazenamento estruturado de dados de projetos e conteúdos dinâmicos.

### **Ambiente e Ferramentas de Desenvolvimento**
* **Controlo de Versões:** Git & GitHub.
* **Servidor Local:** Apache (via XAMPP/WAMP) para testes e homologação local.
* **Editores de Código:** Ambiente de desenvolvimento otimizado para web.

---

## 🔒 Critérios e Medidas de Segurança

A segurança e a integridade da aplicação foram priorizadas através de várias camadas de configuração e boas práticas no código:

1. **Configurações de Servidor (`.htaccess`):**
   * **Forçamento de HTTPS:** Redirecionamento automático de tráfego HTTP para conexões seguras.
   * **Proteção de Ficheiros Sensíveis:** Bloqueio de acesso externo direto a ficheiros de configuração e de sistema (como `.htaccess`, logs e credenciais).
   * **Prevenção de *Directory Listing*:** Desativação da listagem automática de diretórios do servidor.

2. **Segurança na Base de Dados:**
   * Utilização de **PDO com Prepared Statements** (declarações preparadas) para mitigar na totalidade vulnerabilidades de *SQL Injection*.
   * Separação de credenciais de acesso num ficheiro isolado de configuração (`conexao.php`), mantendo os dados sensíveis fora do código principal de negócio.

3. **Validação e Tratamento de Dados:**
   * Sanitização e escape de dados inseridos por utilizadores (com `htmlspecialchars` e validações nativas em PHP) para evitar ataques de *Cross-Site Scripting* (XSS).

---

## 📂 Estrutura de Diretórios

```text
├── assets/
│   ├── css/          # Folhas de estilo customizadas e responsivas
│   └── js/           # Scripts de interatividade e comportamento
├── includes/         # Componentes modulares reutilizáveis (cabeçalho, rodapé)
├── Imagens/          # Recursos visuais, ícones e fotografias de perfil
├── pdf/              # Documentos académicos, artigos e materiais para download
├── .htaccess         # Regras de reescrita de URL e cabeçalhos de segurança
├── artigos.php       # Página de ensaios e publicações científicas
├── aulas.php         # Apresentação de serviços educacionais e depoimentos
├── conexao.php       # Camada de ligação segura à base de dados (PDO)
├── contato.php       # Gestão de contactos e redes sociais
├── desenvolvedor.php # Apresentação de competências técnicas e linguagens
├── index.php         # Página principal (Hero section, biografia e destaques)
├── parcerias.php     # Recomendações bibliográficas e parcerias
└── portfolio.php     # Montra de projetos de software e dados
