<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Facebook</title>
    </head>
    <body>
        <h1>Abra uma conta</h1>
        <h4>É gratuito e sempre será</h4>
        
            <form action="dadosface.php" method="POST">
            <input placeholder="Nome" type="text" name="nome_user">
            <input placeholder="Sobrenome" type="text" name="sobrenome_user">
            <br><br><input placeholder="E-mail ou numero do celular" type="text" name="email_cel">
            <br><br><input placeholder="Insira novamente o email ou o celular" type="text" name="repetir_email">
            <br><br><input placeholder="Nova senha" type="password" name="senha">
         
            <br><h3>Aniversário</h3>
            
            <select name="day">
                <option>Dia</option>
                <?php for($j=1; $j<=31; $j++){?>
                    <option><?php echo $j; ?></option>
                <?php } ?>
            </select>
            
            <select name="month">
                <option>Mês</option>
                <option>Jan</option>
                <option>Fev</option>
                <option>Mar</option>
                <option>Abr</option>
                <option>Mai</option>
                <option>Jun</option>
                <option>Jul</option>
                <option>Ago</option>
                <option>Set</option>
                <option>Out</option>
                <option>Nov</option>
                <option>Dez</option>
            </select>
            
            <select name="year"> 
                <option>Ano</option>
                <?php for ($k=2016; $k>=1905; $k--){ ?>
                    <option><?php echo $k; ?></option>
                <?php } ?>
            </select>
            <p>Por que preciso informar <br> minha data de nascimento?</p>
            <input type="radio" name="sexo" value="F">Feminino
            <input type="radio" name="sexo" value="M">Masculino
            
            <p>Ao clicar em Abrir uma conta, você concorda com os nossos <br>
            Termos e que leu nossa Política de Dados.Incluindo o nosso <br>
            Uso de Cookies</p>
            
            <button type="submit">Abrir uma conta</button>
            </form>
        </body>
</html>



