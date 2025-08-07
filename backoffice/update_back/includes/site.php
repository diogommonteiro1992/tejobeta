<?
if($_SESSION['adm_lvl']>=3)
{
    $color=$site['color'];
    $layout = current(mysql_fetch_row(mysql_query('select layout from settings where id=1')));
    ?>
    <script>
    $(document).ready(function(){
        $("#commentForm").validationEngine();
        $("#send_site").bind('click', function(){
            if($("#commentForm").validationEngine('validate'))
            {
                $.post("ajax/site_change.php",$('input,textarea,input[type=checkbox]:checked,#site_style,#bg_type,#form_subscribe_template').serialize(),
                    function(data){
                        if(data==1)
                        {
                            showSuccess('<?=$misc['js']['messages']['success']['settings_saved']?>', 2000);
                        }
                        else
                        {
                            showError('<?=$misc['js']['messages']['error']['connection']?>',2000);
                        }
                    }
                );
            }
        });
        
        function hex(c){
            var m = /rgba?\((\d+), (\d+), (\d+)/.exec(c);
            return m?'#'+(m[1]<<16|m[2]<<8|m[3]).toString(16):c;
        };
        
        $('.color').each(function(){
            var div=$(this).find('div');
            $(this).ColorPicker({
                color:hex(div.css('background-color')),
                onShow: function(o){
                    $(o).fadeIn(500);
                    return false;
                },
                onHide: function(o){
                    $(o).fadeOut(500);
                    return false;
                },
                onChange: function(hsb, hex, rgb){
                    div.css('backgroundColor', '#' + hex);
                    var to=div.parent('div').attr('to-input');
                    $((('#.'.indexOf(to[0])!=-1)?to:"[name='"+to+"']")).val('#'+hex);
                    
                }
            });
        });
        
        // upload
        $("input.fileupload").filestyle();
        
        /*$('#upload_image_start').live('click',function(){
            $('#upload_image').uploadifyUpload();
        })*/
        /*$('#upload_logo').uploadify({
            'uploader'  	: 'components/uploadify/uploadify.swf',
            'script'    	: 'components/uploadify/uploadify.php',
            'cancelImg' 	: 'components/uploadify/cancel.png',
            'scriptData'	: {type: 'logo'},
            'folder'    	: 'uploads',
            'method'		: 'POST',
            'multi'			: false,
            'auto'			: true,
            'fileExt'		: '*.jpg;*.jpeg;*.gif;*.png|*.jpg;*.jpeg|*.gif|*.png|*.*',
            'fileDesc'		: '<?=$misc['js']['uploadify']['files']?>',
            'queueID'		: 'custom_queue_images',
            'wmode'			: 'transparent',
            'width'			: 190,'height': 30,
            'display'		: 'both',
            'hideButton'	: true,
            'onClearQueue' 	: function(event) {
                $('#upload_c').removeClass('special').addClass('disable');
                $('#uploadFile').removeClass('uploadFile confirm ').addClass('disable');	 
                $('#status-message').html(' ');
            },
            'onSelectOnce'   : function(event,data) {
                $('#upload_c').removeClass('disable').addClass('special');
                $('#uploadButtondisable').css({'display':'none'});
                $('#uploadFile').removeClass('disable').addClass('uploadFile confirm ');	 
                $('#status-message').html('Ready');
            },
            'onComplete'  : function(event,data) {
                if(data.errors){
                    showError('<?=$misc['js']['uploadify']['error']?>',7000);
                }else{
                    showSuccess('<?=$misc['js']['uploadify']['success']?>',7000);
                }
                var t='/images/logo.png?t='+Math.random().toString(36).substring(7);
                $('ul#main_menu').css('backgroundImage',"url("+t+")");
                $('img#logo').attr('src',t);
                unloading();
            }
        });*/
        
        $('#upload_logo').change(function(){
            var DATA = {
                type: 'logo',
            };
            
            var file = this.files[0];
            var $this = $(this);
            
            if(!file)
            {
                return;
            }
            
            if(!/^image\/(?:jpeg|png|bmp|gif)$/.test(file.type))
            {
                showError('<?=$misc['js']['jcrop']['error']['invalid']?>', 7000);
                return;
            }
            
            var timeout = null;

            var form = new FormData();

            for(var k in DATA)
            {
                form.append(k, DATA[k]);
            }
            form.append('Filedata', file);

            var started_at = window.performance ? performance.now() : Date.now();

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    if(xhr.upload)
                    {
                        timeout = setTimeout(function(){
                            timeout = null;
                            
                            loading('<div><span id="upload_progress" style="white-space:nowrap;margin-left:-10px"></span><?=$misc['js']['jcrop']['loading']?></div>', true);
                            
                            var $span = $('#upload_progress');
                            xhr.upload.addEventListener('progress', function(event){
                                if (event.lengthComputable){
                                    var loaded = event.loaded;
                                    var total = event.total;
                                    var progressValue = Math.round( ( loaded / total ) * 100 );

                                    var seconds_elapsed = ( (window.performance ? performance.now() : Date.now()) - started_at ) / 1000;
                                    var bytes_per_second = seconds_elapsed ? loaded / seconds_elapsed : 0 ;
                                    var remaining_bytes = total - loaded;
                                    var seconds_remaining = seconds_elapsed ? remaining_bytes / bytes_per_second : 'Calculating' ;
                                    
                                    $span.html(progressValue+ '% ');
                                }
                            }, false);
                        }, 500);
                    }

                    return xhr;
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                dataType: 'text',
                method: 'POST',
                type: 'POST',
                global: false,
                url: 'components/uploadify/uploadify.php',
                success: function(data){
                    showSuccess('<?=$misc['js']['uploadify']['success']?>', 7000);
                    var t = '/images/logo.png?t=' + Math.random().toString(36).substring(7);
                    $('img#logo').attr('src',t);
                    unloading();
                },
                error: function(_, reason){
                    unloading();
                    showError('<?=$misc['js']['uploadify']['error']?>', 7000);
                },
                complete: function(){
                    if(timeout)
                    {
                        clearTimeout(timeout);
                        timeout = null;
                    }
                    $this.val('');
                }
            });
        });
        
        
        
        /*$('#upload_logoBACKOFFICE').uploadify({
            'uploader'  	: 'components/uploadify/uploadify.swf',
            'script'    	: 'components/uploadify/uploadify.php',
            'cancelImg' 	: 'components/uploadify/cancel.png',
            'scriptData'	: {type: 'logo_BACK'},
            'folder'    	: 'uploads',
            'method'		: 'POST',
            'multi'			: false,
            'auto'			: true,
            'fileExt'		: '*.jpg;*.jpeg;*.gif;*.png|*.jpg;*.jpeg|*.gif|*.png|*.*',
            'fileDesc'		: '<?=$misc['js']['uploadify']['files']?>',
            'queueID'		: 'custom_queue_images_BACKOFFICE',
            'wmode'			: 'transparent',
            'width'			: 190,'height': 30,
            'display'		: 'both',
            'hideButton'	: true,
            'onClearQueue' 	: function(event) {
                $('#upload_c').removeClass('special').addClass('disable');
                $('#uploadFile').removeClass('uploadFile confirm ').addClass('disable');	 
                $('#status-message').html(' ');
            },
            'onSelectOnce'   : function(event,data) {
                $('#upload_c').removeClass('disable').addClass('special');
                $('#uploadButtondisable').css({'display':'none'});
                $('#uploadFile').removeClass('disable').addClass('uploadFile confirm ');	 
                $('#status-message').html('Ready');
            },
            'onComplete'  : function(event,data) {
                if(data.errors){
                    showError('<?=$misc['js']['uploadify']['error']?>',7000);
                }else{
                    showSuccess('<?=$misc['js']['uploadify']['success']?>',7000);
                }
                var ta='images/logo_backoffice.png?ta='+Math.random().toString(36).substring(7);
                $('ul#main_menu').css('backgroundImage',"url("+ta+")");
                $('img#logo_BACKOFFICE').attr('src',ta);
                unloading();
            }
        });*/

        $('#upload_logoBACKOFFICE').change(function(){
            var DATA = {
                type: 'logo_BACK',
            };
            
            var file = this.files[0];
            var $this = $(this);
            
            if(!file)
            {
                return;
            }
            
            if(!/^image\/(?:jpeg|png|bmp|gif)$/.test(file.type))
            {
                showError('<?=$misc['js']['jcrop']['error']['invalid']?>', 7000);
                return;
            }
            
            var timeout = null;

            var form = new FormData();

            for(var k in DATA)
            {
                form.append(k, DATA[k]);
            }
            form.append('Filedata', file);

            var started_at = window.performance ? performance.now() : Date.now();

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    if(xhr.upload)
                    {
                        timeout = setTimeout(function(){
                            timeout = null;
                            
                            loading('<div><span id="upload_progress" style="white-space:nowrap;margin-left:-10px"></span><?=$misc['js']['jcrop']['loading']?></div>', true);
                            
                            var $span = $('#upload_progress');
                            xhr.upload.addEventListener('progress', function(event){
                                if (event.lengthComputable){
                                    var loaded = event.loaded;
                                    var total = event.total;
                                    var progressValue = Math.round( ( loaded / total ) * 100 );

                                    var seconds_elapsed = ( (window.performance ? performance.now() : Date.now()) - started_at ) / 1000;
                                    var bytes_per_second = seconds_elapsed ? loaded / seconds_elapsed : 0 ;
                                    var remaining_bytes = total - loaded;
                                    var seconds_remaining = seconds_elapsed ? remaining_bytes / bytes_per_second : 'Calculating' ;
                                    
                                    $span.html(progressValue+ '% ');
                                }
                            }, false);
                        }, 500);
                    }

                    return xhr;
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                dataType: 'text',
                method: 'POST',
                type: 'POST',
                global: false,
                url: 'components/uploadify/uploadify.php',
                success: function(data){
                    showSuccess('<?=$misc['js']['uploadify']['success']?>', 7000);
                    var t = 'images/logo_backoffice.png?t=' + Math.random().toString(36).substring(7);
                    $('#link > img').attr('src', t);
                    $('img#logo_BACKOFFICE').attr('src', t);
                    unloading();
                },
                error: function(_, reason){
                    unloading();
                    showError('<?=$misc['js']['uploadify']['error']?>', 7000);
                },
                complete: function(){
                    if(timeout)
                    {
                        clearTimeout(timeout);
                        timeout = null;
                    }
                    $this.val('');
                }
            });
        });
        
        
        /*$('#divider').uploadify({
            'uploader'  	: 'components/uploadify/uploadify.swf',
            'script'    	: 'components/uploadify/uploadify.php',
            'cancelImg' 	: 'components/uploadify/cancel.png',
            'scriptData'	: {type: 'divider'},
            'folder'    	: 'uploads',
            'method'		: 'POST',
            'multi'			: false,
            'auto'			: true,
            'fileExt'		: '*.jpg;*.jpeg;*.gif;*.png|*.jpg;*.jpeg|*.gif|*.png|*.*',
            'fileDesc'		: '<?=$misc['js']['uploadify']['files']?>',
            'queueID'		: 'custom_queue_images_divider',
            'wmode'			: 'transparent',
            'width'			: 190,'height': 30,
            'display'		: 'both',
            'hideButton'	: true,
            'onClearQueue' 	: function(event) {
                $('#upload_c').removeClass('special').addClass('disable');
                $('#uploadFile').removeClass('uploadFile confirm ').addClass('disable');	 
                $('#status-message').html(' ');
            },
            'onSelectOnce'   : function(event,data) {
                $('#upload_c').removeClass('disable').addClass('special');
                $('#uploadButtondisable').css({'display':'none'});
                $('#uploadFile').removeClass('disable').addClass('uploadFile confirm ');	 
                $('#status-message').html('Ready');
            },
            'onComplete'  : function(event,data) {
                if(data.errors){
                    showError('<?=$misc['js']['uploadify']['error']?>',7000);
                }else{
                    showSuccess('<?=$misc['js']['uploadify']['success']?>',7000);
                }
                var ta='/images/divider.png?ta='+Math.random().toString(36).substring(7);
                $('ul#main_menu').css('backgroundImage',"url("+ta+")");
                $('img#divider_img').attr('src',ta);
                unloading();
            }
        });*/
        
        $('#divider').change(function(){
            var DATA = {
                type: 'divider',
            };
            
            var file = this.files[0];
            var $this = $(this);
            
            if(!file)
            {
                return;
            }
            
            if(!/^image\/(?:jpeg|png|gif)$/.test(file.type))
            {
                showError('<?=$misc['js']['jcrop']['error']['invalid']?>', 7000);
                return;
            }
            
            var timeout = null;

            var form = new FormData();

            for(var k in DATA)
            {
                form.append(k, DATA[k]);
            }
            form.append('Filedata', file);

            var started_at = window.performance ? performance.now() : Date.now();

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    if(xhr.upload)
                    {
                        timeout = setTimeout(function(){
                            timeout = null;
                            
                            loading('<div><span id="upload_progress" style="white-space:nowrap;margin-left:-10px"></span><?=$misc['js']['jcrop']['loading']?></div>', true);
                            
                            var $span = $('#upload_progress');
                            xhr.upload.addEventListener('progress', function(event){
                                if (event.lengthComputable){
                                    var loaded = event.loaded;
                                    var total = event.total;
                                    var progressValue = Math.round( ( loaded / total ) * 100 );

                                    var seconds_elapsed = ( (window.performance ? performance.now() : Date.now()) - started_at ) / 1000;
                                    var bytes_per_second = seconds_elapsed ? loaded / seconds_elapsed : 0 ;
                                    var remaining_bytes = total - loaded;
                                    var seconds_remaining = seconds_elapsed ? remaining_bytes / bytes_per_second : 'Calculating' ;
                                    
                                    $span.html(progressValue+ '% ');
                                }
                            }, false);
                        }, 500);
                    }

                    return xhr;
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                dataType: 'text',
                method: 'POST',
                type: 'POST',
                global: false,
                url: 'components/uploadify/uploadify.php',
                success: function(data){
                    showSuccess('<?=$misc['js']['uploadify']['success']?>', 7000);
                    var t = '/images/divider.png?t=' + Math.random().toString(36).substring(7);
                    $('img#divider_img').attr('src', t);
                    unloading();
                },
                error: function(_, reason){
                    unloading();
                    showError('<?=$misc['js']['uploadify']['error']?>', 7000);
                },
                complete: function(){
                    if(timeout)
                    {
                        clearTimeout(timeout);
                        timeout = null;
                    }
                    $this.val('');
                    unloading();
                }
            });
        });
        
        
        
        /*$('#favicon').uploadify({
            'uploader'  	: 'components/uploadify/uploadify.swf',
            'script'    	: 'components/uploadify/uploadify.php',
            'cancelImg' 	: 'components/uploadify/cancel.png',
            'scriptData'	: {type: 'favicon'},
            'folder'    	: 'uploads',
            'method'		: 'POST',
            'multi'			: false,
            'auto'			: true,
            'fileExt'		: '*.jpg;*.jpeg;*.gif;*.png;*.ico|*.jpg;*.jpeg|*.gif|*.png|*.ico|*.*',
            'fileDesc'		: '<?=$misc['js']['uploadify']['files']?>',
            'queueID'		: 'custom_queue_images_favicon',
            'wmode'			: 'transparent',
            'width'			: 190,'height': 30,
            'display'		: 'both',
            'hideButton'	: true,
            'onClearQueue' 	: function(event) {
                $('#upload_c').removeClass('special').addClass('disable');
                $('#uploadFile').removeClass('uploadFile confirm ').addClass('disable');	 
                $('#status-message').html(' ');
            },
            'onSelectOnce'   : function(event,data) {
                $('#upload_c').removeClass('disable').addClass('special');
                $('#uploadButtondisable').css({'display':'none'});
                $('#uploadFile').removeClass('disable').addClass('uploadFile confirm ');	 
                $('#status-message').html('Ready');
            },
            'onAllComplete'  : function(event,data) {
                if(data.errors){
                    showError('<?=$misc['js']['uploadify']['error']?>',7000);
                }else{
                    showSuccess('<?=$misc['js']['uploadify']['success']?>',7000);
                }
                //document.getelementById('favicon_img').src='/images/favicon.ico?ta='+Math.random().toString(36).substring(7);
                $('#favicon_img').attr('src','/images/favicon.ico?ta='+Math.random().toString(36).substring(7));
                unloading();
            }
        });*/
        
        $('#favicon').change(function(){
            var DATA = {
                type: 'favicon',
            };
            
            var file = this.files[0];
            var $this = $(this);
            
            if(!file)
            {
                return;
            }
            
            if(!/^image\/(?:jpeg|png|bmp|gif|vnd.microsoft.icon|x-icon)$/.test(file.type))
            {
                showError('<?=$misc['js']['jcrop']['error']['invalid']?>', 7000);
                return;
            }
            
            var timeout = null;

            var form = new FormData();

            for(var k in DATA)
            {
                form.append(k, DATA[k]);
            }
            form.append('Filedata', file);

            var started_at = window.performance ? performance.now() : Date.now();

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    if(xhr.upload)
                    {
                        timeout = setTimeout(function(){
                            timeout = null;
                            
                            loading('<div><span id="upload_progress" style="white-space:nowrap;margin-left:-10px"></span><?=$misc['js']['jcrop']['loading']?></div>', true);
                            
                            var $span = $('#upload_progress');
                            xhr.upload.addEventListener('progress', function(event){
                                if (event.lengthComputable){
                                    var loaded = event.loaded;
                                    var total = event.total;
                                    var progressValue = Math.round( ( loaded / total ) * 100 );

                                    var seconds_elapsed = ( (window.performance ? performance.now() : Date.now()) - started_at ) / 1000;
                                    var bytes_per_second = seconds_elapsed ? loaded / seconds_elapsed : 0 ;
                                    var remaining_bytes = total - loaded;
                                    var seconds_remaining = seconds_elapsed ? remaining_bytes / bytes_per_second : 'Calculating' ;
                                    
                                    $span.html(progressValue+ '% ');
                                }
                            }, false);
                        }, 500);
                    }

                    return xhr;
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                dataType: 'text',
                method: 'POST',
                type: 'POST',
                global: false,
                url: 'components/uploadify/uploadify.php',
                success: function(data){
                    showSuccess('<?=$misc['js']['uploadify']['success']?>', 7000);
                    $('#favicon_img').attr('src','/images/favicon.ico?t='+Math.random().toString(36).substring(7));
                    unloading();
                },
                error: function(_, reason){
                    unloading();
                    showError('<?=$misc['js']['uploadify']['error']?>', 7000);
                },
                complete: function(){
                    if(timeout)
                    {
                        clearTimeout(timeout);
                        timeout = null;
                    }
                    $this.val('');
                }
            });
        });
        
        
        $('#edit_templates').click(function(){
            $.confirm({
                'title': '<?=$text['site']['fields']['subscribe_template_title']?>',
                'message':
                    '</p><form id="news_templates">'+
                        '<div class="content" style="padding:13px;">'+
                            <?
                                $templates=json_decode(file_get_contents('/home/worldwid/public_html/c1s/subscribe_templates.json'),true);
                                
                                $pages_r=mysql_query('select * from pages where `group`=5 and lang='.$lingua['id'].' order by pos ');
                                while($pages = mysql_fetch_assoc($pages_r))
                                {
                                    echo '\'<div class="section">\'+';
                                        echo '\'<label>\'+';
                                            echo '\'',addslashes($pages['name']),'\'+';
                                        echo '\'</label>\'+';
                                        echo '\'<div style="margin-left:0px;">\'+';
                                            echo '\'<select name="sub_group_template[',$pages['sub_group'],']">\'+';
                                            foreach($templates as $k=>$v)
                                            {
                                                echo '\'<option value="',$k,'"',$k==$pages['form_subscribe_template']?' selected="selected"':'','>',$v[$lingua['name']],'</option>\'+';
                                            }
                                            echo '\'</select>\'+';
                                        echo '\'</div>\'+';
                                    echo '\'</div>\'+';
                                    
                                }
                            ?>
                        '</div>'+
                    '</form><p>',
                'buttons': {
                    '<?=$misc['save']?>': {
                        'class': '',
                        'action': function(){
                            $.post('ajax/pages_change_template.php', 
                                $('#news_templates').serialize(),
                                function(data){
                                    if(data == 1)
                                    {
                                        showSuccess('<?=$text['site']['fields']['subscribe_template_saved']?>', 1000);
                                        location.reload();
                                    }
                                    else
                                    {
                                        showError('<?=$misc['js']['messages']['error']['connection']?>', 2000);
                                    }
                                }
                            ).error(function(){showError('<?=$misc['js']['messages']['error']['connection']?>', 2000);});
                        }
                    },
                    '<?=$misc['cancel']?>':{'class':'special'}
                }
            });
        });
        
        $('.color[title]').tipsy({gravity:'s'});
        
    });
    </script>

    <style>
        #confirmBox p{display:none;}
        .ui-selectmenu-menu.ui-widget.ui-widget-content.ui-corner-bottom.ui-selectmenu-menu-dropdown.ui-selectmenu-open{z-index:999999999;}
    </style>

    <h1><?=$text['site']['title']?></h1>
    <form id='commentForm'>
        <?$general=mysql_fetch_assoc(mysql_query('select * from settings where id=1'));?>
        <div class="widget">
            <div class="header"><span><?=$text['site']['header']['general']?></span></div>
            <div class="content">
                <div class="oneTwo">
                    <?php if ($_SESSION['adm_lvl']>=5) { ?>
                        <div class="section">
                            <label><?=$text['site']['fields']['c1s_logo_footer']?></label>
                            <div>
                                <input type="checkbox" name="logo_footer" id="logo_footer" class="on_off_checkbox" value="1"<?=$general['logo_footer']?' checked="checked"':''?>>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="section">
                        <label><?=$text['site']['fields']['cookie_warning']?></label>
                        <div>
                            <input type="checkbox" name="show_cookies_warning" id="show_cookies_warning" class="on_off_checkbox" value="1"<?=$general['show_cookies_warning']?' checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['privacy_policy']?></label>
                        <div>
                            <input type="checkbox" name="show_privacy_policy" id="show_privacy_policy" class="on_off_checkbox" value="1"<?=$general['show_privacy_policy']?' checked="checked"':''?>>
                        </div>
                        <div>
                            <a href="?p=edit_privacy_policy" class="uibutton icon edit"><?=$text['site']['fields']['edit_privacy_policy']?></a>
                        </div>
                    </div>

                    <div class="section">
                        <label><?=$text['site']['fields']['show_consumer_complaints_resolution']?></label>
                        <div>
                            <input type="checkbox" name="show_consumer_complaints_resolution" id="show_consumer_complaints_resolution" class="on_off_checkbox" value="1"<?=$general['show_consumer_complaints_resolution']?' checked="checked"':''?>>
                        </div>
                    </div>
                    
                    <? if($site['version_number_n'] >= 190617) { ?>
                        <div class="section">
                            <label><?=$text['site']['fields']['show_complaints_book']?></label>
                            <div>
                                <input type="checkbox" name="show_complaints_book" id="show_complaints_book" class="on_off_checkbox" value="1"<?=$general['show_complaints_book']?' checked="checked"':''?>>
                            </div>
                        </div>
                    <? } ?>
                    
                    <?if($site['version_number_n'] < 210415){?>
                        <div class="section">
                            <label><?=$text['site']['fields']['show_news_categories']?></label>
                            <div>
                                <input type="checkbox" name="show_news_categories" id="show_news_categories" class="on_off_checkbox" value="1"<?=$general['show_news_categories']?' checked="checked"':''?>>
                            </div>
                        </div>
                    <? } ?>
                    
                    
                    <?if($_SESSION['adm_lvl']>=5){?>
                    <div class="section">
                        <label><?=$text['site']['fields']['ga']?></label>
                        <div>
                            <input type="text" name="google_analytics" id="google_analytics" class="full validate[custom[GA]]" value="<?=$general['google_analytics']?>">
                            <span class="f_help"><?=$misc['chars']['required']?>:<?=$misc['chars']['ga']?> </span>
                        </div>
                    </div>
                    <?}?>
                    <div class="section">
                        <label><?=$text['site']['fields']['image_resolutions']?></label>
                        <div>
                            <a href="?p=site_image_resolutions" class="uibutton icon edit"><?=$text['site']['fields']['image_resolutions_edit']?></a>
                        </div>
                    </div>
                    <?if($_SESSION['adm_lvl']>=5){?>
                    <div class="section">
                        <label><?=$text['site']['fields']['css_fix']?></label>
                        <div>
                            <a href="?p=site_css_fix" class="uibutton icon edit"><?=$text['site']['fields']['css_fix_edit']?></a>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['lang_manage']?></label>
                        <div>
                            <a href="?p=site_languages" class="uibutton icon edit"><?=$text['site']['fields']['lang_manage_edit']?></a>
                        </div>
                    </div>
                    <?}?>
                </div>
                <div class="oneTwo">
                    <div class="section">
                        <label><?=$text['site']['fields']['subscribe_form']?></label>
                        <div>
                            <input type="checkbox" name="form_subscribe" id="form_subscribe" class="on_off_checkbox" value="1"<?=$general['form_subscribe']?' checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['subscribe_captcha']?></label>
                        <div>
                            <input type="checkbox" name="form_subscribe_captcha" id="form_subscribe_captcha" class="on_off_checkbox" value="1"<?=$general['form_subscribe_captcha']?' checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['reviews']?></label>
                        <div>
                            <input type="checkbox" name="review_active" id="review_active" class="on_off_checkbox" value="1"<?=$general['review_active']?' checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['captcha_contact_form']?></label>
                        <div>
                            <input type="checkbox" name="contact_captcha" id="contact_captcha" class="on_off_checkbox" value="1"<?=$general['contact_captcha']?' checked="checked"':''?>>
                        </div>
                    </div>
                    <?
                        $strtoupper='strtoupper';
                        foreach($linguas['list']as$v)
                        {
                            $value=current(mysql_fetch_row(mysql_query('select form_subscribe_text from site where lang='.$v['id'].' order by (select pos from lang where site.lang=lang.id)')));
                            echo <<<HTML
                    <div class="section">
                        <label>{$text['site']['fields']['subscribe_button']}<small>{$strtoupper($v['name'])}</small></label>
                        <div>
                            <input type="text" name="form_subscribe_text_$v[name]" id="form_subscribe_text_$v[name]" class="validate[required,custom[seo]]" value="$value">
                        </div>
                    </div>
HTML;
                        }
                    ?>
                    <div class="section">
                        <label><?=$text['site']['fields']['subscribe_template']?></label>
                        <div>
                            <!--<select id="form_subscribe_template" name="form_subscribe_template">
                                <?
                                    foreach(json_decode(file_get_contents('/home/worldwid/public_html/c1s/subscribe_templates.json'),true)as$k=>$v)
                                    {
                                        echo '<option value="',$k,'"',$k==$general['form_subscribe_template']?' selected="selected"':'','>',$v[$lingua['name']],'</option>';
                                    }
                                ?>
                            </select>-->
                            <div>
                                <a href="#" id="edit_templates" class="uibutton icon edit"><?=$text['site']['fields']['subscribe_template_edit']?></a>
                            </div>
                        </div>
                    </div>
                    <?if($_SESSION['adm_lvl']>=5){?>
                    <div class="section">
                        <label><?=$text['site']['fields']['layout']?></label>
                        <div>
                            <a href="?p=site_layout" class="uibutton icon edit"><?=$text['site']['fields']['layout_edit']?></a>
                        </div>
                    </div>
                    <?}?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        <?if($site['version_number_n'] >= 210415){?>
            <div class="widget" id="categories">
                <div class="header"><span><?=$text['site']['header']['news_categories']?></span></div>
                <div class="content">
                    <div class="oneThree">
                        <div class="section">
                            <label><?=$text['site']['fields']['show_news_categories']?></label>
                            <div>
                                <input type="checkbox" name="show_news_categories" id="show_news_categories" class="on_off_checkbox" value="1"<?=$general['show_news_categories']?' checked="checked"':''?>>
                            </div>
                        </div>
                    </div>
                    <div class="oneThree">
                        <div class="section">
                            <label><?=$text['site']['fields']['show_news_categories_list']?></label>
                            <div>
                                <input type="checkbox" name="show_news_categories_list" id="show_news_categories_list" class="on_off_checkbox" value="1"<?=$general['show_news_categories_list']?' checked="checked"':''?>>
                            </div>
                        </div>
                    </div>
                    <div class="oneThree">
                        <div class="section">
                            <label><?=$text['site']['fields']['show_news_categories_images']?></label>
                            <div>
                                <input type="checkbox" name="show_news_categories_images" id="show_news_categories_images" class="on_off_checkbox" value="1"<?=$general['show_news_categories_images']?' checked="checked"':''?>>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?}?>
        
        <div class="widget" id="recruit">
            <div class="header"><span><?=$text['site']['header']['recruit']?></span></div>
            <div class="content">
                <div class="section">
                    <label><?=$text['site']['fields']['recruit_active']?></label>
                    <div>
                        <input type="checkbox" name="recruit_active" id="recruit_active" class="on_off_checkbox" value="1"<?=$general['recruit_active']?' checked="checked"':''?>>
                    </div>
                </div>
            </div>
            <div class="content">
                <?
                    $strtoupper='strtoupper';
                    foreach($linguas['list']as$v)
                    {
                    
                        $recruit=@mysql_fetch_assoc(mysql_query('select recruit_title,recruit_desc from site where lang="'.$v['id'].'"'));
                    
                        echo <<<HTML
                    
                <div class="oneTwo">
                    <div class="header"><span>{$text['site']['header']['recruit_lang']}{$strtoupper($v['name'])}</span></div>
                    <div class="content">
                        <div class="section">
                            <label>{$text['site']['fields']['title']}</label>
                            <div>
                                <input type="text" name="recruit_title_$v[name]" id="recruit_title_$v[name]" class="full validate[custom[seo]]" value="$recruit[recruit_title]">
                                <span class="f_help"></span>
                            </div>
                        </div>
                        <div class="section">
                            <label>{$text['site']['fields']['desc']}</label>
                            <div>
                                <input type="text" name="recruit_desc_$v[name]" id="recruit_desc_$v[name]" class="full validate[custom[seo]]" value="$recruit[recruit_desc]">
                                <span class="f_help"></span>
                            </div>
                        </div>
                    </div>
                </div>
HTML;
                    }
                ?>
            </div>
            <?/*<!--
            <div class="oneTwo">
                <?if($_SESSION['adm_lvl']>=5){?>
                <?}?>
                <div class="section">
                    <label>Captcha no formul�rio de contacto</label>
                    <div>
                        <input type="checkbox" name="contact_captcha" id="contact_captcha" class="on_off_checkbox" value="1"<?=$general['contact_captcha']?' checked="checked"':''?>>
                    </div>
                </div>
                <?if($_SESSION['adm_lvl']>=5){?>
                <div class="section">
                    <label>ID do Google</label>
                    <div>
                        <input type="text" name="google_analytics" id="google_analytics" class="full validate[custom[GA]]" value="<?=$general['google_analytics']?>">
                        <span class="f_help">Obrigat�rio, Caracteres permitidos: UA-xxxxxxx-y (x representa um n�mero e y um n�mero maior que 1)</span>
                    </div>
                </div>
                <div class="section">
                    <label>Resolu��es Imagens</label>
                    <div>
                        <a href="?p=site_image_resolution" class="uibutton icon edit">Editar Resolu��es</a>
                    </div>
                </div>
                <?}?>
                <?if($_SESSION['adm_lvl']>=4){?>
                <div class="section">
                    <label>Ficheiro de Fix de CSS</label>
                    <div>
                        <a href="?p=site_css_fix" class="uibutton icon edit">Editar ficheiro</a>
                    </div>
                </div>
                <?}?>
            </div>
            <div class="oneTwo">
                <div class="section">
                    <label>Formul�rio de inscri��o activo</label>
                    <div>
                        <input type="checkbox" name="form_subscribe" id="form_subscribe" class="on_off_checkbox" value="1"<?=$general['form_subscribe']?' checked="checked"':''?>>
                    </div>
                </div>
                <div class="section">
                    <label>Captcha no formul�rio de inscri��o</label>
                    <div>
                        <input type="checkbox" name="form_subscribe_captcha" id="form_subscribe_captcha" class="on_off_checkbox" value="1"<?=$general['form_subscribe_captcha']?' checked="checked"':''?>>
                    </div>
                </div>
                <?foreach($linguas['list']as$v){?>
                <div class="section">
                    <label>Nome do bot�o<small><?=strtoupper($v['name'])?></small></label>
                    <div>
                        <input type="text" name="form_subscribe_text_<?=$v['nome']?>" id="form_subscribe_text_<?=$v['nome']?>" class="validate[required,custom[seo]]" value="<?=$general['form_subscribe_text_'.$v['nome']]?>">
                    </div>
                </div>
                <?}?>
            </div>
            <div class="clear"></div>-->*/?>
            <div class="clear"></div>
        </div>
        <?
            unset($general);
            
            $i=0;
            $site_r = mysql_query("SELECT site.*,active from site,lang where site.lang=lang.id order by pos");
            $strtoupper='strtoupper';
            foreach((($_SESSION[adm_lvl]>=5)?$linguas['all']['list']:$linguas['list']) as $k=>$v)
            {
                $site=mysql_fetch_assoc($site_r);
                if(++$i>1 && $_SESSION[adm_lvl]>=5)
                {
                
                    $a="
                    <label>{$text['site']['fields']['language_active']}</label>
                    <div>
                        <input type=\"checkbox\" name=\"site[$v[id]][activo]\" id=\"activo_$v[name]\" class=\"on_off_checkbox\" value=\"1\"".(($v['active'])?' checked="checked"':'')."/>
                    </div>";
                }
                $site['maintenance']=(($site['maintenance'])?' checked="checked"':'');
                echo <<<EOH
            <div class="widget">
                <div class="header"><span><span class="ico gray window"></span>{$text['site']['header']['settings']} ({$strtoupper($v['name'])})</span></div>
                <div class="content">
                    <div class="oneTwo">
                        <div class="header"><span>{$text['site']['header']['publish']}</span></div>
                        <div class="content">
                            <div class="section">
                                <label>{$text['site']['fields']['name']}</label>
                                <div>
                                    <input class="full validate[required,custom[seo]]" type="text" name="site[$v[id]][nome]" id="nome_$v[name]" value="$site[name]">
                                    <span class="f_help">{$misc['chars']['required_accents']}: $permitidos[seo]</span>
                                </div>
                                <label>{$misc['fields']['title']}</label>
                                <div>
                                    <input type="text" name="site[$v[id]][titulo]" id="titulo_$v[name]" class="full validate[required,custom[seo]]" value="$site[title]">
                                    <span class="f_help">{$misc['chars']['required_accents']}: $permitidos[seo]</span>
                                </div>
                                $a
                                <label>{$text['site']['fields']['maintenance']}</label>
                                <div>
                                    <input type="checkbox" name="site[$v[id]][manutencao]" id="manutencao_$v[name]" class="on_off_checkbox" value="1"$site[maintenance]/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oneTwo">
                        <div class="header"><span>{$text['site']['header']['seo']}</span></div>
                        <div class="content">
                            <div class="section">
                                <label>{$text['site']['fields']['desc']}</label>
                                <div>
                                    <input type="text" name="site[$v[id]][seo_desc]" id="seo_desc_$v[name]" class="full validate[required,custom[seo]]" value="$site[seo_desc]">
                                    <span class="f_help">{$misc['chars']['required_accents']}: $permitidos[seo]</span>
                                </div>
                            </div>
                            <div class="section">
                                <label>{$text['site']['fields']['keywords']}</label>
                                <div>
                                    <textarea class="full validate[required,custom[seo]]" name="site[$v[id]][seo_key]" id="seo_key_$v[name]">$site[seo_key]</textarea>
                                    <span class="f_help">{$misc['chars']['required_accents']}: $permitidos[seo]</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
EOH;
            }
        ?>
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span><?=$text['site']['header']['style']?></span></div>
            <div class="content">
                <div class="oneTwo">
                    <div class="section">
                        <label><?=$text['site']['fields']['high_style']?><small></small></label>
                        <div>
                            <input type="checkbox" name="logo_high" id="logo_high" class="on_off_checkbox" value="1"<?=@is_file($_SERVER['DOCUMENT_ROOT'].'/high.style')?' checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['logo']?><small><?=$text['site']['size']?>: 180x<?=60+(@is_file($_SERVER['DOCUMENT_ROOT'].'/high.style')*50)?></small></label>
                        <div>
                            <div>
                                <input type="file" id="upload_logo" class="fileupload">
                            </div>
                            <img src="/images/logo.png" alt="logo" id="logo">
                            <div id="custom_queue_images"></div>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['background']['odd']?></label>
                        <div>
                            <?$back=mysql_fetch_array(mysql_query("select * from background where id='1'"));?>
                            <div class="color" to-input="bg_even_start" title="<?=$text['site']['start_bg_color']?>">
                                <div style="background-color:<?=$back['start']?>"></div>
                            </div>
                            <input type="hidden" name="bg_even_start" id="bg_even_start" class="small validate[required,custom[css_color]]" value="<?=$back['start']?>">
                            <div class="color" to-input="bg_even_end" title="<?=$text['site']['end_bg_color']?>">
                                <div style="background-color:<?=$back['end']?>"></div>
                            </div>
                            <input type="hidden" name="bg_even_end" id="bg_even_end" class="small validate[required,custom[css_color]]" value="<?=$back['end']?>">
                            <div class="clear"></div>
                        </div>
                    </div>
                    <?$back=mysql_fetch_array(mysql_query("select * from background where id='2'"));?>
                    <div class="section" >
                        <label><?=$text['site']['fields']['background']['even']?></label>
                        <div>
                            <div class="color" to-input="bg_odd_start" title="<?=$text['site']['start_bg_color']?>">
                                <div style="background-color:<?=$back['start']?>"></div>
                            </div>
                            <input type="hidden" name="bg_odd_start" id="bg_odd_start" class="small validate[required,custom[css_color]]" value="<?=$back['start']?>">
                            <div class="color" to-input="bg_odd_end" title="<?=$text['site']['end_bg_color']?>">
                                <div style="background-color:<?=$back['end']?>"></div>
                            </div>
                            <input type="hidden" name="bg_odd_end" id="bg_odd_end" class="small validate[required,custom[css_color]]" value="<?=$back['end']?>">
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="section">
                        <label><?=$text['site']['fields']['gradient']?></label>
                        <div>
                            <select id="bg_type" name="bg_type">
                                <option value="0">Radial</option>
                                <option value="1"<?=$back['type']?' selected="selected"':''?>>Linear</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="oneTwo">
                    <div class="section">
                    <a name="favicon"></a>
                        <label><?=$text['site']['fields']['favicon']?><small><?=$text['site']['size']?>: 32x32</small></label>
                        <div>
                            <div>
                                <div>
                                    <input type="file" id="favicon" class="fileupload">
                                </div>
                                <img src="/images/favicon.ico" alt="favicon" id="favicon_img">
                                <div id="custom_queue_images_favicon"></div>
                            </div>
                        </div>
                    </div>
                    <?if($_SESSION[adm_lvl]>=5){?>
                    <div class="section">
                        <label><?=$text['site']['fields']['logo_back']?><small><?=$text['site']['size']?>: 200x70</small></label>
                        <div>
                            <div>
                                <input type="file" id="upload_logoBACKOFFICE" class="fileupload">
                            </div>
                            <img src="./images/logo_backoffice.png" alt="logo" id="logo_BACKOFFICE">
                            <div id="custom_queue_images_BACKOFFICE"></div>
                        </div>
                    </div>
                    <?}?>
                    <div class="section">
                        <label><?=$text['site']['fields']['divisor']?><small><?=$text['site']['size']?>: 600x60</small></label>
                        <div>
                            <div>
                                <div>
                                    <input type="file" id="divider" class="fileupload">
                                </div>
                                    <img src="/images/divider.png" alt="logo" id="divider_img" style="max-width:100%;">
                                <div id="custom_queue_images_divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <script>
                (function($){
                    $(function(){
                        document.getElementById('site_style').onchange=function(){
                            // document.getElementById('preview_style').src='preview.php?c='+this.value+'&l=<?=$layout?>';
                            document.getElementById('preview_style').src='preview.php?color=' + this.value;
                        };
                    });
                })(jQuery);
            </script>
            <div class="widget">
                <div class="header"><span><span class="ico gray window"></span><?=$text['site']['header']['colors']?></span></div>
                <div class="content">
                    <div class="oneTwo">
                        <div class="content">
                            <div class="section">
                                <label><?=$text['site']['fields']['choose_color']?></label>
                                <div>
                                    <select id="site_style" name="cor" class="chzn-select">
                                        <?
                                            $colors = json_decode(file_get_contents('/home/worldwid/public_html/c1s/colors.json'),true);
                                            foreach($colors[$layout] as $k=>$v)echo '<option value="',$k,'"',$color==$k?' selected="selected"':'','>',ucfirst($k),'</option>';
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oneTwo">
                        <div class="content">
                            <div class="section">
                                <iframe src="preview.php?color=<?=$color?>" frameborder="0" scrolling="no" id="preview_style" style="width:100%;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="content">
                <div class="section last">
                    <div>
                        <a class="uibutton submit loading" id="send_site" title="<?=$misc['save']?>" rel="1" name="alterar"><?=$misc['save']?></a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </form><?
}
else
{
	echo $misc['access_error'];
}