<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1><?php echo $data['question']['header']; ?></h1>
            <i>posted by <?php echo $data['question']['username']; ?></i>
            <div><?php echo $data['question']['text']; ?></div>
        </div>
        <div class="col-sm-4"></div>
    </div>  
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <?php foreach($data['answers'] as $answer){ ?>
            <h4><?php echo $answer['header']; ?></h4>
            <i>posted by <?php echo $answer['username']; ?></i>
            <div><?php echo $answer['text']; ?></div>
            <?php } ?>
        </div>
        <div class="col-sm-4"></div>
    </div> 
    <?php if($data['holder']->getSession()->getLogged()){ ?>  
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1>Post Answer</h1>
            <form action="/index.php?action=Question&subaction=3" method="POST">
            <input type="hidden" name="parentID" value="<?php echo $data['question']['id']; ?>" />
            <div class="row">                
                    <div class="col-sm-6">Header</div>
                    <div class="col-sm-6"><input type="text" name="header" value="" /></div>               
            </div>
            <div class="row">                
                    <div class="col-sm-6">Text</div>
                    <div class="col-sm-6"><textarea name="content"></textarea></div>               
            </div>
            <div class="row">                
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"><input type="submit" name="submit" value="Post Answer" /></div>               
            </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <?php } ?>
</div>