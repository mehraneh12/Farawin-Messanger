
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            form,input,button{
                border: 1px solid brown;
                border-radius: 10px;
                padding: 5px;
                margin: 10px;
                direction:rtl;
              
            }
            form,lable,button{
                width: 50%;
           
            }
            
            form{margin-left: 25%;}
            button,lable{margin-right: 25%;}
        </style>
    </head>
    <body>
        
   
       <form action="register/insert_data" method="post" enctype="">
        <lable >نام کاربری  :
        <input type="text" name="username" ></lable><br>
        <lable>رمز عبور  :
        <input type="password" name="password"></lable><br>
        <lable>تکرار رمز عبور :
        <input type="password" name="rpassword"></lable><br>
        <button type="submit"> ارسال</button>
    </form>

        <script src="" async defer></script>
    </body>
</html> 
