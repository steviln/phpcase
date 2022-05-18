<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?php if($data['holder']->getSession()->getLogged()){ ?>
                <div><a href="/index.php?action=Question&subaction=1">Post Question</a></div>              
            <?php } ?>
            <?php 

            foreach($data['questions'] as $question){ ?>
                <div><a href="/index.php?action=Question&id=<?php echo $question['id']; ?>"><?php echo $question['header']; ?></a></div>
            <?php  }    ?>

        </div>
        <div class="col-sm-4"></div>
    </div>
</div>