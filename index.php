<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
    <script type="text/javascript" src="jquery.js"></script>

    <title>Таблица заказов</title>

    <!-- Bootstrap 4 CSS and custom CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="custom.css" />
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class=" bg-white fixed-top">
    <h1 class="card-header  text-center " style="font-size:60px;">Выдача заказов физических лиц</h1>
    <div class="page-php fixed-top" style="font-size:80px;">
        <p align="left" style="font-size:60px;"><?

            $arr = [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ];

            // Поскольку от 1 до 12, а в массиве, как мы знаем, отсчет идет от нуля (0 до 11),
            // то вычитаем 1 чтоб правильно выбрать уже из нашего массива.

            $month = date('n') - 1;
            echo $arr[$month] . ' ' . date('d, Y'); ?>. </p>
    </div>
    <h1 class="card-header" style="font-size:55px;">Номер заказа &nbsp; &nbsp;
    <a style="font-size:55px;">Статус заказа</a></h1>


</div>



<div id="content"></div>
<div id="content1"></div>

<div class="body-content">




</div>


<!-- jQuery & Bootstrap 4 JavaScript libraries -->
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<h1></h1>
<div> &nbsp;


    <script>
    function show()
    {

        $.ajax({
            url: "script.php",
            cache: false,
            success: function(html){
                $("#content").html(html);

            }
        });
    }

    $(document).ready(function(){
        show();
        setInterval('show()',60000);
    });

        $("html, body").animate({ scrollTop: $(document).height() }, 20000);
        setInterval(function() {
            $('html, body').animate({scrollTop:0}, 4000);
        },24000);
        var scrolltopbottom =  setInterval(function(){
            // 4000 - it will take 4 secound in total from the top of the page to the bottom
            $("html, body").animate({ scrollTop: $(document).height() }, 20000);
            setInterval(function() {
                $('html, body').animate({scrollTop:0}, 4000);
            },24000);

        },28000);
</script>
</div>
</html>