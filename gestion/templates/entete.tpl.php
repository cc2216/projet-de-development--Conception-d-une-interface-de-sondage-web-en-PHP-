<script type="text/javascript">
history.go(1);
</script>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//session_start;
?>
<html>
	<head>
        <meta charset="utf-8" />
		<title>__TITLE__</title>
        <link  rel="stylesheet" type="text/css" href="cssfile\css\style.css"/>
        <link  rel="stylesheet" type="text/css" href="test\test1.css"/>
		__SCRIPTS__
	</head>
    <style>
    .center
    {
        margin:auto;
        text-align: center;
        width:70%;
    }
    h1{
        margin:auto;
        text-align: center;
        width:70%;
    }
    header{
        margin:auto;
        text-align: left; 
        font-size: 10pt;
        color: black;
        text-decoration: underline;
    }
    a:link {color:#FF0000;}    
    a:visited {color:#00FF00;} 
    html,body{margin:0;padding:0}
    body{
        font: 76% arial,sans-serif;
        text-align:center;
        position: relative;
        }
    .position{
        left: 50%;
        right:50%;
    }
    div{margin: 0 10px 10px;}
    p{margin:0 10px 10px; text-align:center}
    
    </style>
	<body>
        <header>
        <img src="image/logo_telecom_bretagne.jpg" alt="Ballade" width="120" height="120"/>
        </header>
		<h1 style="margin:auto;text-align: center; width:70%;">__TITLE_H1__</h1>
        <br />