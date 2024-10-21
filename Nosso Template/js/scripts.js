/*!
* Start Bootstrap - Business Frontpage v5.0.9 (https://startbootstrap.com/template/business-frontpage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-business-frontpage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
// Aguardando o carregamento completo do DOM
    
    // Adiciona o formulário ao final do body
    document.body.appendChild(form);

    // Mensagens de retorno
    const submitSuccessMessage = document.createElement('div');
    submitSuccessMessage.className = 'alert alert-success d-none';
    submitSuccessMessage.innerText = 'Mensagem enviada com sucesso!';
    document.body.appendChild(submitSuccessMessage);
    
    const submitErrorMessage = document.createElement('div');
    submitErrorMessage.className = 'alert alert-danger d-none';
    submitErrorMessage.innerText = 'Por favor, preencha todos os campos.';
    document.body.appendChild(submitErrorMessage);

    $(document).ready(function() {
        // Inicia o carrossel automaticamente
        $('#carouselExemple').carousel({
            interval: 5000 // Tempo em milissegundos entre transições (5000ms = 5s)
        });
    
        // Controle manual dos botões
        $('.carousel-control-prev').click(function() {
            $('#carouselExemple').carousel('prev');
        });
    
        $('.carousel-control-next').click(function() {
            $('#carouselExemple').carousel('next');
        });
    });
    

    // Validação e envio do formulário
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !phone || !message) {
            submitErrorMessage.classList.remove('d-none');
            submitSuccessMessage.classList.add('d-none');
            return;
        }

        submitSuccessMessage.classList.remove('d-none');
        submitErrorMessage.classList.add('d-none');
        form.reset();
    });

    // Navegação suave para âncoras
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Ativar item de navegação
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    // Selecionando o formulário e o botão de envio
    const form = document.getElementById('contactForm');
    const submitButton = document.getElementById('submitButton');
    const submitSuccessMessage = document.getElementById('submitSuccessMessage');
    const submitErrorMessage = document.getElementById('submitErrorMessage');

    // Função para validar o formulário
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar envio padrão

        // Validando os campos do formulário
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !phone || !message) {
            // Exibir mensagem de erro se algum campo estiver vazio
            submitErrorMessage.classList.remove('d-none');
            submitSuccessMessage.classList.add('d-none');
            return;
        }

        // Simulação de envio bem-sucedido
        submitSuccessMessage.classList.remove('d-none');
        submitErrorMessage.classList.add('d-none');
        submitButton.classList.add('disabled'); // Desativar botão após envio
        form.reset(); // Limpar o formulário

        // Opcional: Você pode adicionar uma chamada para a API para enviar os dados do formulário aqui
    });
});
