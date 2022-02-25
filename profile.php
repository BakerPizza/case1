<?php require_once 'includes/header.php' ?>
<body>
    <div class="container-sm">
         <form>
        <div class="container-reg">
                               
  <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Сменить пароль</span>
                <input placeholder='Введите пароль от 8 символов' type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="passwordReg">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Подтвердить пароль</span>
                <input placeholder='Повторите пароль' type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="confirmPassword">
            </div>
                   <button class="btn btn-primary mb-4" id="buttonRegUser">Сменить</button>
             </form>
             
            <form>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Сменить e-mail</span>
                <input placeholder='Введите e-mail' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email">
            </div>
       <button class="btn btn-primary" id="buttonRegUser">Сменить</button>
    </form>
    </div>
</body>
