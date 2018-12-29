<style type="text/css">
        .reply {
            border-left: inset;
            background-color: rgb(230, 235, 255);
            padding-bottom: 5px;
        }

        .reply:last-child {
            border-radius: 0px 0px 5px 5px;
        }

        .well {
            border-radius: 0px;
            background: none;
        }

        .jumbotron + .well {
            border-radius: 8px 8px 0px 0px;
        }

        .well:last-child {
            border-radius: 0 0 8px 8px;
        }

        button:first-child:hover {
            cursor: default;
        }
        .btn {
            padding: 15px 5px;
        }
</style>

<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<script>

    function detailsAdd(evt, name) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");

        
        
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(name).style.display = "block";
        evt.currentTarget.className += " active";
      

    }
</script>


<?php 
    if(Session::get('threadId')== true){
    foreach ($threadAnswer as $key => $value) {
    Session::set('answerId',$value['aid']);
    
 ?>

   <!--Answer Starts-->
    <div  id="answer_id" class="well well-sm">
        <div class="row">
    
            <div class="well well-sm answer">
                <i>
                    <b>
                        <a href=""><?php echo $value['name']; ?></a> answered
                    </b>
                </i>
                <br>
                <?php echo $value['answer']; ?>
            </div>

                    
                
                <?php 
                
                if($value['aid']==$value['answer_id']){
                Session::set('answerId',$value['answer_id']); 
                
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