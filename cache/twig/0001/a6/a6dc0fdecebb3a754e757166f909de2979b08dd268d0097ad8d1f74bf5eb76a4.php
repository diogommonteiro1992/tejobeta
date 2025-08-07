<?php

/* @layout/head.twig */
class __TwigTemplate_bc8534e4f7293e71fec71b15337a916e4128c6579cbd317da7015787a25f3b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<link href=\"/files/css/";
        // line 3
        echo twig_join_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "css", array()), ",");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"//fonts.googleapis.com/css?family=Oswald:400,700\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"/js/lightbox/themes/classic/jquery.lightbox.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"/js/validationEngine/validationEngine.jquery.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"/css/sizes.css.php?t=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "time", array()), "html", null, true);
        echo (((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) == "preview") && $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "layout", array()))) ? (("&layout=" . $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "layout", array()))) : (""));
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<link href=\"/js/jquery-ui-1.11.2/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\">

<script asd=\"asd\"></script>
<script type=\"text/javascript\" src=\"/js/jquery-1.9.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery-ui-1.11.2/jquery-ui.js\"></script>

<script type=\"text/javascript\" src=\"/files/js/";
        // line 16
        echo twig_join_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "js", array()), ",");
        echo "\"></script>

";
        // line 18
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "active_activity", array())) {
            // line 19
            echo "<script src=\"/js/raphael.js\" type=\"text/javascript\"></script>
";
        }
        // line 21
        echo "
<script type=\"text/javascript\" src=\"/js/script.js.php?l=";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG_ID"), "html", null, true);
        echo "&amp;d=";
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
        echo (((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) == "preview") && $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "layout", array()))) ? (("&layout=" . $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "layout", array()))) : (""));
        echo "\"></script>
<!-- ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "layout", array()), "html", null, true);
        echo " -->
";
        // line 24
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "recruit_active", array())) {
            // line 25
            echo "<script src=\"/php/back/components/uploadify/swfobject.js\"></script>
<script src=\"/php/back/components/uploadify/uploadify.js\"></script>
";
        }
        // line 28
        echo "
";
        // line 29
        $this->loadTemplate("@root/general/head.twig", "@layout/head.twig", 29)->display($context);
        // line 30
        echo "
<script>
\t(function(\$){
\t\t\$(function(){
\t\t\t";
        // line 35
        echo "\t\t\t\$('a').not('[target]').each(function(){/%[\\dA-F]{2}/.test(this.href)&&(this.href=window.decodeURIComponent(this.href));});

\t\t\t\$('#myCarousel').carousel();
\t\t\t
\t\t\t\$('.portfolio .article-image a:not([target]),.news a.img-responsive:not([target]), a.lightbox').lightbox({live: true});
\t\t\tvar a=\$('.section.news article').has('a[href*=\"/get/\"]'),p=\$('.section.portfolio article').has('a[href*=\"/get_port/\"]');
\t\t\t
\t\t\tvar get_lightbox_size = function(image_width, image_height, section){
\t\t\t\t
\t\t\t\tvar width = window.innerWidth > image_width ? image_width : window.innerWidth - 36;
\t\t\t\tvar slideshow_height = (width * (image_height / image_width)) + 6;
\t\t\t\t
\t\t\t\tvar height = (slideshow_height + section.offsetHeight) > (window.innerHeight * 0.9)? '98p' : Math.ceil(slideshow_height + section.offsetHeight);
\t\t\t\t
\t\t\t\t
\t\t\t\treturn '?lightbox[width]=' + Math.ceil(width) + '&lightbox[height]=' + height;
\t\t\t};
\t\t\t\$(window).resize(function(){
\t\t\t\ta.each(function(){
\t\t\t\t\tvar section=(this.getElementsByTagName('section')[0]||{offsetHeight:0}),link=this.getElementsByTagName('a')[0];
\t\t\t\t\tvar slideshow=\$('#home a.lightbox[href*=\"'+link.href.replace(/^.*((?:\\/?store)?\\/get\\/\\d+\\.html).*\$/,'\$1')+'\"]');
\t\t\t\t\t
\t\t\t\t\tlink.href=link.href.split('?')[0] + get_lightbox_size(";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "news", array()), "full", array()), "width", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "news", array()), "full", array()), "height", array()), "html", null, true);
        echo ", section);
\t\t\t\t\t
\t\t\t\t\tslideshow.each(function(){
\t\t\t\t\t\tthis.href=link.href;
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\tp.each(function(){
\t\t\t\t\tvar section=(this.getElementsByTagName('section')[0]||{offsetHeight:0}),link=this.getElementsByTagName('a')[0];
\t\t\t\t\t
\t\t\t\t\tvar slideshow=\$('#home a.lightbox[href*=\"'+link.href.replace(/^.*(\\/get_port\\/\\d+\\.html).*\$/,'\$1')+'\"]');
\t\t\t\t\t
\t\t\t\t\tlink.href=link.href.split('?')[0] + get_lightbox_size(";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "portfolio", array()), "full", array()), "width", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "portfolio", array()), "full", array()), "height", array()), "html", null, true);
        echo ", section);
\t\t\t\t\t
\t\t\t\t\tslideshow.each(function(){
\t\t\t\t\t\tthis.href=link.href;
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}).resize();
\t\t\t
\t\t\t\$(document).on('click','.jquery-lightbox-button-close,.jquery-lightbox-overlay',function(){
\t\t\t\t\$(document).validationEngine('hideAll');
\t\t\t\t";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()), "store", array()), "enabled", array())) {
            // line 79
            echo "\t\t\t\t\$('#ext_store').css({zIndex:1});
\t\t\t\t";
        }
        // line 81
        echo "\t\t\t});
\t\t\t
\t\t});
\t})(jQuery);
</script>";
    }

    public function getTemplateName()
    {
        return "@layout/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 81,  143 => 79,  141 => 78,  126 => 68,  110 => 57,  86 => 35,  80 => 30,  78 => 29,  75 => 28,  70 => 25,  68 => 24,  64 => 23,  57 => 22,  54 => 21,  50 => 19,  48 => 18,  43 => 16,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/head.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/head.twig");
    }
}
