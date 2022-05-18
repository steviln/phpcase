<div class="container">
    <h1>Post Question</h1>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="/index.php?action=Question&subaction=2" method="POST">
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
                    <div class="col-sm-6"><input type="submit" name="submit" value="Post Question" /></div>               
            </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>