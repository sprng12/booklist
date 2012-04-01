<script type="text/javascript">
    
var total_count = <?php echo $genres[$current_tab - 1]['books_count']; ?>;
var count = 6;

function more_books(){
    if(total_count <= count)
        {
            
        $("#more").css('display', 'none');
        return false;
        }

$.ajax({
                            type: "POST",
                            data: {offset:count, genre_id:<?php echo $current_tab; ?>},
                            url: "http://booklist.loc/ajax/more_books",
                            success: function(msg)
                            {
                                //$("#append").append(<hr>);
                                $("#append").append(msg);
                            },
                            error: function(){
                                 alert("Ошибка");
                              }
                        })
                        count+=2;
                        return false;
}
$(function(){
    $("#more").bind('click', more_books)
});

</script>
<div class="row">
    <ul class="nav tabs">
        <?php for($i=0; $i<count($genres); $i++) { ?>
                <li<?php if($current_tab == $genres[$i]['genre_id']) {?> class="active"<?php }?>
                 ><a href="/catalog/<?php echo $genres[$i]['genre_id']; ?>">
                <?php echo $genres[$i]['genre_title']; ?>(<?php echo $genres[$i]['books_count']; ?>)
                </a></li>
        <?php } ?>
    </ul>			
</div>
<?php
    echo View::factory('bookrow')->set('books', array_slice($books, 0, 2));
?>
<hr>
<?php
    echo View::factory('bookrow')->set('books', array_slice($books, 2, 2));
?>
<hr>
<?php
    echo View::factory('bookrow')->set('books', array_slice($books, 4, 2));
?>
<div id="append">
</div>
<div class="form-actions">
    <a class="btn " href="#" id="more"><i class="icon black arrow-down"></i> Показать еще</a>
</div>		

      