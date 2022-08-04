<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';

if(isset($_SESSION) == false){
    header('Location:DIR_loginFuncp');
}

$nomeUsuario = $_SESSION['userName'];

include TEMPLATE_BASE.'/head.php';
?>

 <link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chat.css" alt="">
<?php
 include TEMPLATE_BASE.'/nav.php';
?>
</head>
<body>
<div class="divtotal row">
    <div class="ajustechat col l3 white">

    </div>
    <div class="ajustechat  col l6 blue darken-3" >
    <iframe src="./chat/src/index.php" id="iframes" ></iframe>
    </div>

<div class="ajustechat  col l3 red">

</div>
</div>
       
</body>