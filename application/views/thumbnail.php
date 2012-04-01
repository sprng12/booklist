<script type="text/javascript">
    $(function(){
        $("span[id^='stars-wrapper']").stars({ 
            cancelShow: false,
            disabled: true
    });
    $("#stars-wrapper<?php echo $stars.$book_id; ?>").stars("select", <?php echo $r = isset($rate) ? $rate : 0 ; ?>);
    })
</script>
<?php if($book_title != NULL) {?>
<div class="span4">
	<h2><?php echo $book_title; ?></h2>
        <h6>общий рейтинг:&nbsp;<?php echo $rate; ?></span></h6><span id="stars-wrapper<?php echo $stars.$book_id; ?>">
            <input type="radio" name="newrate" value="1" title="1" />
            <input type="radio" name="newrate" value="2" title="2" />
            <input type="radio" name="newrate" value="3" title="3" />
            <input type="radio" name="newrate" value="4" title="4" />
            <input type="radio" name="newrate" value="5" title="5" />
            <input type="radio" name="newrate" value="6" title="6" />
            <input type="radio" name="newrate" value="7" title="7" />
            <input type="radio" name="newrate" value="8" title="8" />
            <input type="radio" name="newrate" value="9" title="9" />
            <input type="radio" name="newrate" value="10" title="10" />
    
        </span>
        <br>
        <p><?php echo $book_description.'...'; ?></p>
	<p><a class="btn info" href="/catalog/book/<?php echo $book_id; ?>">Показать подробности <i class="icon white arrow-right"></i></a></p>
</div>
<?php } ?>