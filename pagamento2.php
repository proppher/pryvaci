<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Plus - Oferta Relâmpago</title>
    <style>
        :root {
            --primary-color: #000000;
            --secondary-color: #333333;
            --dark-color: #222222;
            --light-color: #F9FAFB;
            --gray-color: #666666;
            --danger-color: #E74C3C;
            --success-color: #2ECC71;
            --star-color: #FFD700;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #F3F4F6;
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        
        .header {
            width: 100%;
            padding: 30px 0;
            text-align: center;
        }
        
        .header h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            width: 100%;
        }
        
        .form-section {
            flex: 1;
            min-width: 300px;
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .testimonials {
            flex: 1;
            min-width: 300px;
        }
        
        .section-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--gray-color);
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #DDDDDD;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.2s;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(0,0,0,0.1);
        }
        
        .plan-info {
            background-color: #F9F9F9;
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
            border: 1px solid #EEEEEE;
        }
        
        .plan-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .plan-description {
            color: var(--gray-color);
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .price-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #EEEEEE;
        }
        
        .price-row.total {
            font-weight: 600;
            border-bottom: none;
            margin-top: 10px;
            font-size: 1.1rem;
        }
        
        .divider {
            height: 1px;
            background-color: #EEEEEE;
            margin: 20px 0;
        }
        
        .payment-methods {
            margin-top: 30px;
        }
        
        .payment-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .payment-option {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #DDDDDD;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .payment-option:hover {
            border-color: var(--primary-color);
        }
        
        .payment-option input {
            margin-right: 15px;
        }
        
        .payment-note {
            color: var(--gray-color);
            font-size: 0.9rem;
            margin-top: 10px;
        }
        
        .btn-pix {
            width: 100%;
            padding: 16px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 20px;
        }
        
        .btn-pix:hover {
            background-color: #222222;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border: 1px solid #EEEEEE;
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #EEEEEE;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .testimonial-stars {
            color: var(--star-color);
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }
        
        .testimonial-text {
            color: var(--gray-color);
            font-style: italic;
            font-size: 0.95rem;
            padding-left: 65px;
        }
        
        .countdown {
            background-color: var(--danger-color);
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        /* Modal PIX */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        
        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            position: relative;
            text-align: center;
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            color: var(--gray-color);
            font-size: 24px;
            cursor: pointer;
        }
        
        .modal-content h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .pix-qrcode {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin: 20px auto;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #EEEEEE;
        }
        
        .pix-key {
            background-color: #F9F9F9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            word-break: break-all;
            position: relative;
            border: 1px solid #DDDDDD;
        }
        
        .copy-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s;
        }
        
        .copy-btn:hover {
            background-color: #222222;
        }
        
        .payment-status {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #FFF3CD;
            color: #856404;
            display: none;
            animation: pulse 2s infinite;
        }
        
        .copy-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: var(--success-color);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            opacity: 0;
            transition: all 0.3s;
            z-index: 1001;
        }
        
        .copy-notification.active {
            opacity: 1;
        }
        
        @keyframes pulse {
            0% { opacity: 0.8; }
            50% { opacity: 1; }
            100% { opacity: 0.8; }
        }
        
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
           <img src="capa.png" width="880" height="800">
        </div>
        
        <div class="content">
            <div class="form-section">
                <div class="countdown">
                    <span id="timer">Oferta relâmpago acaba em 03:00</span>
                </div>
                
                <h2 class="section-title">Dados cadastrais</h2>
                
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="name">Nome completo</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="plan-info">
                    <div class="plan-title">
                        <span>Simaria Mendes | Privacy </span>  <img src="https://osegredo.com.br/wp-content/uploads/2023/10/1-Privacy-como-funciona-a-OnlyFans-brasileira.jpg.webp" width="20" height="20">
                        <span>1 m.</span>
                    </div>
                    <p class="plan-description">Seu acesso está a um passo de ser concluído, após o pagamento você receberá o acesso imediato no seu e-mail.</p>
                    
                    <div class="price-row">
                        <span>Subtotal</span>
                        <span>R$ 32,60 (trimestral)</span>
                    </div>1
                    
                    <div class="price-row total">
                        <span>Total</span>
                        <span>R$ 32,60</span>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <div class="payment-methods">
                    <h3 class="payment-title">Dados de pagamento</h3>
                    
                    <div class="payment-option">
                        <img src="https://th.bing.com/th/id/R.3b4112239e1ea6bd7f47663a49f60893?rik=alF587thh9T5ow&pid=ImgRaw&r=0&sres=1&sresct=1" width="20" height="20">
                        <label for="pix">PIX</label>
                    </div>
                    
                    <p class="payment-note">Ao selecionar o PIX, você será encaminhado para um ambiente seguro.</p>
                    
                    <button type="button" class="btn-pix" id="generatePix">GERAR PIX</button>
                </div>
            </div>
            
            <div class="testimonials">
                <h2 class="section-title">Depoimentos</h2>
                
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Sergio Augusto" class="testimonial-avatar">
                        <div>
                            <div class="testimonial-author">Sergio Augusto</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                    <p class="testimonial-text">Sensacional, que mulher maravilhosa conteúdo nota 10</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Tulfo Ramos" class="testimonial-avatar">
                        <div>
                            <div class="testimonial-author">Tulfo Ramos</div>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                    </div>
                    <p class="testimonial-text">Não basta ser uma linda cantora ela cria os melhores conteúdos!</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Maurício Jorge" class="testimonial-avatar">
                        <div>
                            <div class="testimonial-author">Maurício Jorge</div>
                            <div class="testimonial-stars">★★★★☆</div>
                        </div>
                    </div>
                    <p class="testimonial-text">Nossas aquelas lives privada que você faz no banho me deixam louco, vale apenas pagar assinar!</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal PIX -->
    <div class="modal-overlay" id="pixModal">
        <div class="modal-content">
            <button class="close-modal" id="closeModal">&times;</button>
            <h2>Pagamento via PIX</h2>
            
            <p>Escaneie o QR Code ou copie a chave PIX abaixo</p>
            
            <div class="pix-qrcode">
                <!-- QR Code simulado - substitua por um QR Code real -->
               
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=00020101021226840014BR.GOV.BCB.PIX013694d21e05-8d2d-45e4-9d3c-4458efdfe34d0222Pagamento servicosnero520400005303986540532.605802BR5922Aelson de jesus novaes6007MARACAS62290525QRCCDOTHjXEI67psho2iRH1ia630438B0" alt="QR Code PIX">
        </div>
        
        <div class="pix-key" id="pixKey">
            00020101021226840014BR.GOV.BCB.PIX013694d21e05-8d2d-45e4-9d3c-4458efdfe34d0222Pagamento servicosnero520400005303986540532.605802BR5922Aelson de jesus novaes6007MARACAS62290525QRCCDOTHjXEI67psho2iRH1ia630438B0
        </div>
            
            <button class="copy-btn" id="copyBtn">Copiar Chave PIX</button>
            
            <div class="payment-status" id="paymentStatus">
                AGUARDANDO PAGAMENTO...
            </div>
        </div>
    </div>
    
    <!-- Notificação de cópia -->
    <div class="copy-notification" id="copyNotification">
        Chave PIX copiada com sucesso!
    </div>
    
    <script>
        // Contador regressivo
        function startTimer(duration, display) {
            let timer = duration, minutes, seconds;
            const interval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = "Oferta relâmpago acaba em " + minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(interval);
                    display.textContent = "Oferta expirada!";
                }
            }, 1000);
        }

        // Modal PIX
        document.getElementById('generatePix').addEventListener('click', function() {
            const email = document.getElementById('email').value;
            const name = document.getElementById('name').value;
            
            if (email && name) {
                document.getElementById('pixModal').classList.add('active');
            } else {
                alert('Por favor, preencha todos os campos antes de prosseguir.');
            }
        });
        
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('pixModal').classList.remove('active');
        });
        
        // Função para copiar a chave PIX - VERSÃO FINAL CORRIGIDA
        document.getElementById('copyBtn').addEventListener('click', async function() {
            const pixKey = document.getElementById('pixKey').textContent;
            const copyNotification = document.getElementById('copyNotification');
            const paymentStatus = document.getElementById('paymentStatus');
            
            try {
                // Tenta usar a API moderna primeiro
                if (navigator.clipboard) {
                    await navigator.clipboard.writeText(pixKey);
                } else {
                    // Fallback para navegadores mais antigos
                    const textarea = document.createElement('textarea');
                    textarea.value = pixKey;
                    textarea.style.position = 'fixed';
                    document.body.appendChild(textarea);
                    textarea.select();
                    
                    if (!document.execCommand('copy')) {
                        throw new Error('Falha ao copiar');
                    }
                    
                    document.body.removeChild(textarea);
                }
                
                // Mostrar notificações
                copyNotification.classList.add('active');
                paymentStatus.style.display = 'block';
                
                // Esconder notificação após 3 segundos
                setTimeout(() => {
                    copyNotification.classList.remove('active');
                }, 5000);
                
                // Simular confirmação de pagamento (remover em produção)
                setTimeout(() => {
                    paymentStatus.textContent = "PAGAMENTO CONFIRMADO!";
                    paymentStatus.style.backgroundColor = "#D4EDDA";
                    paymentStatus.style.color = "#155724";
                    paymentStatus.style.animation = 'none';
                }, 100000);
                
            } catch (err) {
                alert('Não foi possível copiar automaticamente. Por favor, selecione e copie manualmente: ' + pixKey);
            }
        });
        
        // Fechar modal ao clicar fora
        document.getElementById('pixModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        });

        window.onload = function () {
            const threeMinutes = 60 * 3,
                display = document.querySelector('#timer');
            startTimer(threeMinutes, display);
        };
    </script>
</body>
</html>