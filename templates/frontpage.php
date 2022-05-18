<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?php if($data['holder']->getSession()->getLogged()){ ?>
                <div><a href="/index.php?action=Logout">Log out</a></div>              
            <?php }else{  ?>
            <div><a href="/index.php?action=Login">Login</a></div>
            <div><a href="/index.php?action=Register">register</a></div>
            <?php } ?>
            <div><a href="/index.php?action=Questions">Questions</a></div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>