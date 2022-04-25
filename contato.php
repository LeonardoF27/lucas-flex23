<?php require "inc/cabecalho.php"; ?>

<main id="fundo">

<article id="contato">

                <section>                
                    
                <h2 id="tituloCPT">Fale conosco</h2>
                    
<div id="TextoForm">

                <p>Por favor, preencha o formulário abaixo para que possamos entrar em contato o mais breve possível. Se preferir, entre em contato conosco através do whatsapp.</p>

</div>

                    
<div id="Formulario">

                <form action="https://formspree.io/f/myyojrja" method="POST">

                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </p>

                <p>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required>
                </p>

                <p>
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone" data-mask-reverse="true" >
                </p>

                <p>
                    <label for="assunto">Assunto:</label>
                    <input type="text" name="assunto" id="assunto">
                </p>

                <p>
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" id="mensagem" cols="40" rows="6"></textarea>
                </p>

                <div id="Enviar">
                    <button type="submit" name="enviar" id="enviar">Enviar</button>
                </div>

                </form>

</div>

</article>

</main>

<?php require "inc/rodape.php"; ?>