<script type="text/javascript">
     $(function(){
        $("#stars").stars({
            cancelShow: false,
            captionEl: $("#stars-cap"),
            callback: function(ui, type, value){
       
                        var user_id = "<?php echo $user_id; ?>";
                        var book_id = "<?php echo $book_id; ?>";
                        var rate = value; 
                        $.ajax({
                            type: "POST",
                            data: {user_id: user_id, book_id: book_id, rate: rate},
                            url: "http://booklist.loc/ajax/add_rate",
                            success: function()
                            {
                                alert('Данные успешно отправлены!');
                            },
                            error: function(){
                                 alert("Ошибка");
                              }
                        })
                    }
        });
        
        $("#total-stars").stars({
            cancelShow: false,
            captionEl: $("#total-stars-cap"),
            disabled: true
        });
        $("#total-stars").stars("select", <?php echo $p = isset($avg_rate) ? $avg_rate : '0' ?>);
        $("#stars").stars("select", <?php echo $p = isset($pers_rate) ? $pers_rate : '0' ; ?>);

  
    })
</script>
<div class="row">
    <div class="span4">
        <h1><?php echo $book_title; ?></h1>
    </div>
    <div class="span4">
        <?php if(isset($user_id)) { ?>
        <form>
            <h6>Ваша оценка: <span id="stars-cap"></span></h6>
            <div id="stars">
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
            </div>
        </form>
        <?php } ?>
    </div>
    <div class="span4">
        <form>
            <h6>Общий рейтинг: <span id="total-stars-cap"></span></h6>
            <div id="total-stars">
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
            </div>
        </form>
    </div>
</div>
<hr>
<div class="row">
    <div class="span4">
        <img src="/img/<?php echo $book_id; ?>.jpg" class="cover">
    </div>    
    <div class="span8">
        <table class="table">
            <tr><th>автор</th><td><?php echo $author; ?></td></tr>
            <tr><th>жанр</th><td><?php echo $genres; ?></td></tr>
            <tr><th>год</th><td><?php echo $year; ?></td></tr>
            <tr><th>язык</th><td><?php echo $lang; ?></td></tr>
            <tr><th>страниц</th><td><?php echo $pages; ?></td></tr>            
        </table>
    </div>
</div>
<div class="row">
    <div class="span8 offset4">
        <h3>Описание:</h3>
        <p><?php echo $description; ?></p>        
    </div>
</div>
<hr>
<?php if(isset($rec_books)) {?>
<div class="row">
    <div class="span12">
        
        <h1>К этой книге рекомендуют:</h1>
        <?php
            echo View::factory('bookrow')->set('books', $rec_books)
                ->set('stars', 'rec');
        ?>
        
     </div>
</div>
<?php } ?>
<?php if(isset($author_books)) { ?>
<hr>
<div class="row">
    <div class="span12">
        <h1>От этого автора:</h1>
        <?php
            echo View::factory('bookrow')->set('books', $author_books)
                ->set('stars', 'author');
        ?>
     </div>
</div>
<?php } ?>           


