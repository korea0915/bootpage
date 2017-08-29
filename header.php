<? require_once("lib/session.php") ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTf-8">
<meta name="viewport" content="width=divice-width", initial-scale="1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<style type="text/css">
.jumbotron {
    background-image: url('img/main.jpg');
    background-size: cover;
    text-shadow:black 0.2em 0.2em 0.2em;
    color: white;
}
</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">영광 홈피</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">소개<span class="sr-only"></span></a></li>
                <li class="dropdown">
                    <a href="#" class"dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Study List<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">C++</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">BootStrap</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="put in keyword.">
                </div>
                <button type="submit" class="btn btn-default">serch</button>
            </form>
           <? require_once("nav-right.php") ?>
        </div>
    </div>
</nav>