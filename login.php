<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
 <?php include_once "header.php"; ?>

<main class="container">
     <section class="row">
         <div class="col-md-6">
         <form action="logarUsuario.php" method="post" enctype= "multipart/form-data">

        <!-- E-mail do Usuário -->
        <div class="form-group">
            <label for="emailUsuario">E-mail do Usuario</label>
            <input type="email" class="form-control" id="emailUsuario" placeholder="Email do usuário" name="emailUsuario">
        </div>
        <!-- Senha do Usuário -->
        <div class="form-group">
            <label for="senhaUsuario">Senha</label>
           <input type="password" class="form-control" id="senhaUsuario" placeholder="Senha do usuário" name="senhaUsuario">
        </div>
       
       



        <button class="btn btn-success" type="submit">Logar</button>
                <!-- <p>ou</p> -->
        <a class="btn btn-primary" href="cadastroUsuario.php">Criar cadastro </a>

        </form>
         </div>
     </section>
 </main>
 
 
</body>
</html>