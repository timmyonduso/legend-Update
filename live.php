<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    #contact{
        background: linear-gradient(140deg, #ff7f50 0%, #ff7f50 30%, #7f7fff 30%, #7f7fff 100%););

    }

    .contactUs{
        position: relative;
        width: 100%;
        padding: 40px 100px;
        height: 0;
    }

    .contactUs .title{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
    }

    .contactUs .title h2{
        color: #ffffff;
        font-weight: 500;
    }

    .form{
        grid-area: form;
    }
    .info{
        grid-area: info;
    }
    .map{
        grid-area: map;
    }

    .contact{
        padding: 40px;
        background: #ffffff;
        box-shadow: 0 5px 35px rgba(0,0,0,0.15);
    }
    .box{
        position: relative;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-template-rows: 5fr 4fr;
        grid-template-areas:
    "form info"
    "form map";
        grid-gap: 20px;
        margin-top: 20px;
    }

    .contact h3{
        color: #0e3959;
        font-weight: 500;
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    /*Form*/
    .formBox{
        position: relative;
        width: 100%;
    }
    .formBox .row50{
        display: flex;
        gap: 20px;
    }
    .inputBox{
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        width: 50%;
    }
    .formBox .row100 .inputBox{
        width: 100%;
    }
    .inputBox span{
        color: #18b7ff;
        margin-top: 10px;
        margin-bottom: 5px;
        font-weight: 500;
    }
    .inputBox input{
        padding: 10px;
        font-size: 1.1em;
        outline: none;
        border: 1px solid #333333;
    }
    .inputBox textarea{
        padding: 10px;
        font-size: 1.1em;
        outline: none;
        border: 1px solid #333333;
        resize: none;
        min-height: 220px;
        margin-bottom: 10px;
    }
    .inputBox input[type="submit"]{
        background: #03a9f5;
        color: #ffffff;
        border: none;
        font-size: 1.1em;
        max-width: 120px;
        font-weight: 500;
        cursor: pointer;
        padding: 14px 15px;
    }
    .inputBox input[type="submit"]:hover{
        background: #ff578b;
        color: #ffffff;
        border: none;
        font-size: 1.1em;
        max-width: 120px;
        font-weight: 500;
        cursor: pointer;
        padding: 14px 15px;
    }
    .inputBox ::placeholder{
        color: #3ac162;
    }

    /*info*/
    .info{
        background: #0e3959;
    }
    .info h3{
        color: #ffffff;
    }
    .info.infoBox div{
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .info.infoBox div span{
        min-width: 40px;
        height: 40px;
        color: #ffffff;
        background: #18b7ff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5em;
        border-radius: 50%;
        margin-right: 15px;
    }
    .info .infoBox div p{
        color: #ffffff;
        font-size: 1.1em;
    }
    .info .infoBox div a{
        color: #ffffff;
        text-decoration: none;
        font-size: 1.1em;

    }
    .sci{
        margin-top: 40px;
        display: flex;
    }
    .sci li{
        list-style: none;
        margin-right: 15px;
    }
    .sci li a{
        font-size: 2em;
        color: #cccc;
    }
    .sci li a:hover{
        color: #ecd448;
    }
    .map{
        padding: 0;
    }
    .map iframe{
        width: 100%;
        height: 100%;
    }

    /*Responsive design*/
    @media (max-width: 991px){
        body{
            background: #03a9f5;
        }
        .contactUs{
            padding: 20px;
        }
        .box{
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
    "form"
    "info"
    "map";
        }
        .map{
            min-height: 300px;
            padding: 0;
        }
        .formBox .row50{
            display: flex;
            gap: 0;
            flex-direction: column;
        }
        .inputBox{
            display: flex;
            width: 100%;
        }
        .contact{
            padding: 30px;
        }
    }

</style>

<body id="contact">


<div class="contactUs">
    <div class="title">
        <h2>Send us a message</h2>
    </div>
    <div class="box">
        <div class="contact form">
            <h3>Write your message</h3>
            <form action="talk.php" method="post">
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <label for="name">
                                <input type="text" value="<?= $inputs['name']?? ''?>" name="name" id="name" placeholder="Lahm">
                                <small><?= $errors['name'] ?? '' ?></small>
                            </label>
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>
                            <label>
                                <input type="text" placeholder="Balolo" value="<?= $inputs['name']?? ''?>">
                                <small><?= $errors['name'] ?? '' ?></small>
                            </label>
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <label>
                                <input type="text" placeholder="lahmbalolo@gmail.com" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>">
                                <small><?= $errors['email'] ?? '' ?></small>
                            </label>
                        </div>

                    </div>

                    <div class="row100" >
                        <div class="inputBox" >
                            <span>Message</span>
                            <label>
                                <textarea style="width: 100%" placeholder="Write your message" <?= $inputs['message'] ?? '' ?>></textarea>
                                <small><?= $errors['message'] ?? '' ?></small>
                            </label>
                        </div>
                    </div>

                    <label style="display: none;" for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
                        <input  type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
                    </label>

                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <!--            Info box-->
        <div class="contact info">
            <h3>Contact information</h3>
            <div class="infoBox">
                <div>
                    <span><ion-icon name="location"></ion-icon></span>
                    <p>Afya Center, Naitobi <br>Kenya</p>
                </div>
                <div>
                    <span><ion-icon name="mail"></ion-icon></span>
                    <a href="mailto:director@chaspotinternational.org">director@chaspotinternational.org</a>
                </div>
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="tel:+254723224830">+254723224830</a>
                </div>
                <!--                    Social Media links-->
                <ul class="sci">
                    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
            </div>
        </div>

        <!--            Map-->
        <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8105058792353!2d36.825890950018845!3d-1.2878358359857325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11262da332f5%3A0xa7ea505f9c803a15!2sAfya%20Centre%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1680289563482!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


</body>
</html>
