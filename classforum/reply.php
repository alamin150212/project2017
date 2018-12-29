
<?php 


 
    foreach ($replies as $key => $value) {
    

    ?>
    <small v-for="reply in answer.replies" class="well well-sm reply">
        
        <div class="col-xs-10">
            <i>
                <b>
                    <a href=""><?php echo $value['name']; ?></a>
                    replied
                </b>
            </i>
             <?php echo $value['reply']; ?>
        </div>
    </small>

        
        <!--Reply Ends-->
  
    <?php } ?>
    <form method="POST" class="interact well well-lg" action="<?php echo BASE_URL?>/Thread/showThreadReply/<?php echo $value['aid'];?>" >
        <div class="form-group row">
                <label for="reply">Reply</label>
                <input type="text" id="reply" name="reply" class="form-control" placeholder="Type your Reply" required> 
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-default">Reply</button>
            </div>
        </div>
    </form>

    </div>
</div>
   
    <!--Answer Ends-->
<?php } } ?> 

