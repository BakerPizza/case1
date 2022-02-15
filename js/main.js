

//Person register
$("#buttonRegUser").on('click', function (e){

e.preventDefault();

    $(`input`).removeClass('error');

var msgReg = document.getElementById('msgReg');

let login = document.getElementById('loginReg').value,
    password = document.getElementById('passwordReg').value,
    confirmPassword = document.getElementById('confirmPassword').value,
    email = document.getElementById('email').value,
    name = document.getElementById('name').value,
    lastname = document.getElementById('lastname').value,
    patronymic = document.getElementById('patronymic').value;




$.ajax({
    method: "POST",
    url: "../controllers/registerUsers.php",
    dataType: 'json',
    data:{login:login,password:password,confirmPassword:confirmPassword,email:email,name:name,lastname:lastname,patronymic:patronymic},
    success: function (data){

        if(data.status){
            document.location.href = "../index.php";
        }
        else {
            if(data.type === 1){ //error validation
                msgReg.textContent = data.massage;
                data.fields.forEach(function (field) {
                    $(`input[id = "${field}"]`).addClass('error');
                });
            }
            else if(data.type === 2){ //Password mismatch
                msgReg.textContent = data.massage;
                $(`input[id = "confirmPassword"]`).addClass('error');
            }
            else if(data.type === 3){ //login busy
                msgReg.textContent = data.massage;
                $(`input[id = "loginReg"]`).addClass('error');
            }

        }
    }
});
});


//Person entrance
$("#buttonEntrance").on('click' , function (e){

    e.preventDefault();

    var msgEntrance = document.getElementById('msgEntrance');

    let login = document.getElementById('login').value,
        password = document.getElementById('password').value;

    $.ajax({
        method: "POST",
        url: "../controllers/entranceUsers.php",
        dataType: 'json',
        data: {login:login, password: password},
        success:function (data){
            if(data.status){
                document.location.href = '/index.php';
            }
           if(data.type === 4){
               msgEntrance.textContent = data.massage;
               $(`input[id = "login"]`).addClass('error');
               $(`input[id = "password"]`).addClass('error');
           }

        }

    })


});