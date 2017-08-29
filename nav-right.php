 <ul class="nav navbar-nav navbar-right">
     <?
     if($_SESSION['is_login'] == true){?>
       <li class="dropdown">
                    <a href="#" class"dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <? echo $_SESSION['ses_userid']."님 안녕하세요"; ?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="btn btn-default" href ="logout.php">Logout</a></li>
                        <li><a class="btn btn-default" data-toggle="modal" data-target="#RegisterModal">Modify</a></li>
                    </ul>
       </li>
    <?} else { ?>
       <li class="dropdown">
                    <a href="#" class"dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="btn btn-default" data-toggle="modal" data-target="#LoginModal">Login</a></li>
                        <li><a class="btn btn-default" data-toggle="modal" data-target="#RegisterModal">Register</a></li>
                    </ul>
       </li>      
       
       
       <?}?>

</ul>
