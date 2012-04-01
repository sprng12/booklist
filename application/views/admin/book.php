
                <div class="control-group">
                    <div class="controls">
                        <input class="input-xlarge"  type="text" name="book_title" Placeholder="Название">
                    </div>
                </div>  
                <div class="control-group">
                    <div class="controls">
                        <input class="input span1"  type="text" name="year" Placeholder="Год">
                    </div>
                </div> 
                <div class="control-group">
                    <div class="controls">
                        <input class="input"  type="text" name="pages" Placeholder="Количество страниц">
                    </div>
                </div>
               
                <div class="control-group">
                    <div class="controls">
                        <textarea class="xxlarge" id="textarea2" name="description" rows="3" placeholder="Описание" ></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <select  name="lang" id="normalSelect">
                            <?php foreach($languages as $lang) {?>
                                <option value="<?php  echo $lang['lang_id']; ?>"><?php  echo $lang['lang_title']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <select size="6" multiple="multipled" name="author[]" id="normalSelect">
                            <?php foreach($authors as $author) {?>
                                <option value="<?php  echo $author['author_id']; ?>"><?php  echo $author['name']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                    <div class="control-group">
                    <div class="controls">
                        <select size="6" multiple="multipled" name="genre[]" id="normalSelect">
                            <?php foreach($genres as $genre) {?>
                                <option value="<?php  echo $genre['genre_id']; ?>"><?php  echo $genre['genre_title']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                    
                <div class="control-group">
                    <label for="fileInput">Обложка:</label>
                    <div class="controls"> 
                        <input class="input-file" id="fileInput" name="image" type="file" />
                    </div>
                </div>     
