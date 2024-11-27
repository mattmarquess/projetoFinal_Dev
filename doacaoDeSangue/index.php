<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doe Sangue - Transforme Vidas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo"><img src="img/logo_doeSangue_white.png" alt="Logo Doe Sangue"></div>
            <ul class="nav-links">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#impacto">Impacto</a></li>
                <li><a href="#processo">Processo</a></li>
                <li><a href="#locais">Locais</a></li>
                <li><a href="#agendar" class="btn-nav">Doe Agora</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title" data-aos="fade-up">Doe sangue.<br>Salve vidas.</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">Uma única doação pode salvar até quatro vidas.</p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                    <a href="#agendar" class="btn-primary">Agende sua doação</a>
                    <a href="#processo" class="btn-secondary">Saiba como funciona</a>
                </div>
            </div>
            <div class="hero-scroll-indicator">
                <span class="scroll-text">Role para baixo</span>
                <div class="scroll-line"></div>
            </div>
        </section>

        <section id="impacto" class="impact-section">
            <div class="container">
                <div class="impact-grid">
                    <div class="impact-text" data-aos="fade-right">
                        <span class="section-tag">Impacto Social</span>
                        <h2>Cada gota conta na<br>transformação de vidas</h2>
                        <p>A doação de sangue é um ato de solidariedade que impacta diretamente a vida de milhares de pessoas. Nosso banco de sangue atende hospitais e clínicas, garantindo que tratamentos e cirurgias possam acontecer.</p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <span class="stat-number">4</span>
                                <span class="stat-label">Vidas salvas<br>por doação</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">15</span>
                                <span class="stat-label">Minutos para<br>doar</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">450</span>
                                <span class="stat-label">ml podem salvar<br>várias vidas</span>
                            </div>
                        </div>
                    </div>
                    <div class="impact-image" data-aos="fade-left">
                        <img src="img/impact-image.jpg" alt="Impacto da doação">
                    </div>
                </div>
            </div>
        </section>

        <section id="processo" class="process-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Como Funciona</span>
                    <h2>Processo simples e seguro</h2>
                </div>
                <div class="process-steps">
                    <div class="step" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number">01</div>
                        <h3>Cadastro</h3>
                        <p>Apresente um documento com foto e preencha um cadastro simples</p>
                    </div>
                    <div class="step" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number">02</div>
                        <h3>Triagem</h3>
                        <p>Avaliação rápida do seu estado de saúde e condições para doação</p>
                    </div>
                    <div class="step" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-number">03</div>
                        <h3>Doação</h3>
                        <p>O processo dura cerca de 15 minutos em ambiente confortável</p>
                    </div>
                    <div class="step" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-number">04</div>
                        <h3>Lanche</h3>
                        <p>Após a doação, oferecemos um lanche para sua recuperação</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="locais" class="locations-section">
            <div class="container">
                <div class="locations-grid">
                    <div class="locations-map" data-aos="fade-right">
                        <img src="img/map.jpg" alt="Mapa dos locais de doação">
                    </div>
                    <div class="locations-info" data-aos="fade-left">
                        <span class="section-tag">Onde Doar</span>
                        <h2>Encontre o local mais próximo</h2>
                        <p>Temos diversos pontos de coleta espalhados pela cidade para facilitar sua doação.</p>
                        <div class="location-list">
                            <div class="location-item">
                                <h4>Unidade Central</h4>
                                <p>Av. Principal, 1000<br>Segunda a Sábado: 7h às 18h</p>
                            </div>
                            <div class="location-item">
                                <h4>Unidade Norte</h4>
                                <p>Rua das Flores, 500<br>Segunda a Sexta: 8h às 17h</p>
                            </div>
                            <div class="location-item">
                                <h4>Unidade Sul</h4>
                                <p>Av. das Palmeiras, 250<br>Segunda a Sexta: 8h às 17h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="agendar" class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <span class="section-tag">Agende Sua Doação</span>
                    <h2>Pronto para fazer<br>a diferença?</h2>
                    <p>Escolha a unidade e horário mais conveniente para você.</p>
                    <a href="#" class="btn-primary">Agendar agora</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <img src="img/logo_doeSangue_white.png" alt="Logo Doe Sangue" class="footer-logo">
                    <p>Transformando vidas através da doação de sangue.</p>
                </div>
                <div class="footer-links">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="#inicio">Início</a></li>
                        <li><a href="#impacto">Impacto</a></li>
                        <li><a href="#processo">Processo</a></li>
                        <li><a href="#locais">Locais</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contato</h4>
                    <p>Central de Atendimento:<br>(11) 1234-5678</p>
                    <p>Email:<br>contato@doesangue.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Doe Sangue. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>