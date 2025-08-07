<style>

form div.section > label {
    width: 150px !important;
}

form div.section > div {
    margin-left: 200px !important;
}

form div.section.last > div {
    margin-left: 35% !important;
}

</style>

<script>
    (function($){
        $(function(){
            $('#policy').keydown(function(e){
                if (e.which == 9) {
                    e.preventDefault();
                    var start = this.selectionStart;
                    this.value = this.value.substr(0, start) + '\t' + this.value.substr(this.selectionEnd, this.value.length);
                    this.selectionEnd = this.selectionStart = start + 1;
                }
            });
        });
    })(jQuery);
</script>

<form method="post" action="?p=edit_privacy_policy">
    <div class="widget">
        <div class="header"><span><span class="ico gray window"></span><?=$text['privacy_policy']['title']?></span></div>
        <div class="content">
            <?php foreach ($linguas['list'] as &$lang) { ?>
                <div class="section">
                    <label> <?php printf($text['privacy_policy']['desc'], $text['privacy_policy']['lang'][$lang['name']])?> </label>
                    <div>
                        <textarea name="policy[<?=$lang['name']?>]" id="policy_<?=$lang['name']?>" class="editor">
                            <?php
                            $file = $_SERVER['DOCUMENT_ROOT'] . '/privacy/privacy_' . $lang['name'] . '.html';
                            if (isset($_POST['policy'][$lang['name']])) {
                                $_POST['policy'][$lang['name']] = stripslashes($_POST['policy'][$lang['name']]);
                                if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/privacy')) {
                                    // dir doesn't exist, make it
                                    mkdir($_SERVER['DOCUMENT_ROOT'] . '/privacy');
                                }
                                file_put_contents($file, $_POST['policy'][$lang['name']]);
                                echo $_POST['policy'][$lang['name']];
                            } elseif (@is_file($file)) {
                                echo file_get_contents($file);
                            }
                            ?>
                        </textarea>
                    </div>
                </div>
            <?php } ?>
            <div class="section last">
                <div>
                    <button type="submit" class="uibutton loading submit" title="Guardar" name="save" value="Guardar ficheiro"><?=$text['privacy_policy']['save']?></button>
                    <a href="?p=site" class="uibutton loading submit" title="Go back" name="go back" value="Voltar"><?=$text['privacy_policy']['go_back']?></a>
                </div>
            </div>
        </div>
    </div>
</form>
