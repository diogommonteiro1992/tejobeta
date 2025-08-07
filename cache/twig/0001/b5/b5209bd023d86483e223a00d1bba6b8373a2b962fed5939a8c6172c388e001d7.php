<?php

/* @layout/pages/news.twig */
class __TwigTemplate_106652ce42128af5f6ca25d9ad2f96c0a68db1a49118e79e068218767cb01319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'title' => array($this, 'block_title'),
            'filter' => array($this, 'block_filter'),
            'filter_category' => array($this, 'block_filter_category'),
            'content' => array($this, 'block_content'),
            'article' => array($this, 'block_article'),
            'article_header' => array($this, 'block_article_header'),
            'article_header_youtube' => array($this, 'block_article_header_youtube'),
            'article_header_image' => array($this, 'block_article_header_image'),
            'article_title' => array($this, 'block_article_title'),
            '_ext_store_news_articles_price' => array($this, 'block__ext_store_news_articles_price'),
            'article_contents' => array($this, 'block_article_contents'),
            'article_content' => array($this, 'block_article_content'),
            'article_doc' => array($this, 'block_article_doc'),
            'article_read_more' => array($this, 'block_article_read_more'),
            'article_hidden_section' => array($this, 'block_article_hidden_section'),
            'article_hidden_slideshow' => array($this, 'block_article_hidden_slideshow'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('page', $context, $blocks);
    }

    public function block_page($context, array $blocks = array())
    {
        // line 2
        echo "<section class=\"section news";
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "store_enabled", array())) ? (" has-store") : (""));
        echo "\" id=\"news";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array())) ? (("_sub_" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()))) : ("")), "html", null, true);
        echo "\">
\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t
\t";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter", array())) {
            // line 10
            echo "\t\t";
            $this->displayBlock('filter', $context, $blocks);
            // line 63
            echo "\t";
        }
        // line 64
        echo "\t
\t";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "</section>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<h2 class=\"header-text\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h2>
\t\t<h3 class=\"text-center\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "desc", array()), "html", null, true);
        echo "</h3>
\t";
    }

    // line 10
    public function block_filter($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<div class=\"content\">
\t\t\t";
        // line 13
        echo "\t\t\t
\t\t\t<script>
\t\t\t\t(function(\$){
\t\t\t\t\t
\t\t\t\t\t\$(function(){
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t\tvar \$news=\$('#news";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array())) ? (("_sub_" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()))) : ("")), "html", null, true);
        echo " .content + .content');
\t\t\t\t\t\t
\t\t\t\t\t\t\$news.shuffle({
\t\t\t\t\t\t\titemSelector: 'article'
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#store_shuffle_";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo ",#store_shuffle_cat_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo " input').on('keyup change',function(){
\t\t\t\t\t\t\tvar v=document.getElementById('store_shuffle_";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo "').value.toLowerCase(),
\t\t\t\t\t\t\t\tc=\$('#store_shuffle_cat_";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo " input:checked').val();
\t\t\t\t\t\t\t\$news.shuffle('shuffle',function(\$item,i){
\t\t\t\t\t\t\t\treturn (!c||this.getAttribute('data-cat')==c)&&(!v||\$item.find('h1').text().toLowerCase().indexOf(v)!=-1);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t})(jQuery);
\t\t\t\t</script>
\t\t\t\t<div class=\"shuffle_filter\">
\t\t\t\t\t<input type=\"text\" id=\"store_shuffle_";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "store", array()), "search", array()), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 40
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "categories", array())) {
            // line 41
            echo "\t\t\t\t\t\t<ul id=\"store_shuffle_cat_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"store_shuffle_cat_";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
            echo "_0\" name=\"store_shuffle_cat_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
            echo "\" checked=\"checked\" value=\"\">
\t\t\t\t\t\t\t\t<label for=\"store_shuffle_cat_";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
            echo "_0\" class=\"submit-btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "store", array()), "all", array()), "html", null, true);
            echo "</label>&nbsp;
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                // line 48
                $this->displayBlock('filter_category', $context, $blocks);
                // line 52
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t<li class=\"clearfix\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t
\t\t</div>
\t\t";
    }

    // line 48
    public function block_filter_category($context, array $blocks = array())
    {
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"store_shuffle_cat_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id_category", array()), "html", null, true);
        echo "\" name=\"store_shuffle_cat_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id_category", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t&nbsp;<label for=\"store_shuffle_cat_";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id_category", array()), "html", null, true);
        echo "\" class=\"submit-btn\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "desc", array()), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "\t\t<div class=\"content\">
\t\t\t";
        // line 68
        echo "\t\t\t
\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "news", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 70
            echo "\t\t\t\t";
            $context["title"] = (((($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "show_news_categories", array()) && $this->getAttribute($context["news"], "category", array()))) ? (($this->getAttribute($context["news"], "category", array()) . " - ")) : ("")) . $this->getAttribute($context["news"], "title", array()));
            // line 71
            echo "\t\t\t\t
\t\t\t\t";
            // line 72
            $context["has_content"] = ((((($this->getAttribute($context["news"], "title_text1", array()) || $this->getAttribute($context["news"], "title_text2", array())) || $this->getAttribute($context["news"], "title_text3", array())) || ($this->getAttribute($context["news"], "text1", array()) && ($this->getAttribute($context["news"], "text1", array()) != "<br>"))) || ($this->getAttribute($context["news"], "text2", array()) && ($this->getAttribute($context["news"], "text2", array()) != "<br>"))) || ($this->getAttribute($context["news"], "text3", array()) && ($this->getAttribute($context["news"], "text3", array()) != "<br>")));
            // line 73
            echo "\t\t\t\t
\t\t\t\t";
            // line 74
            $this->displayBlock('article', $context, $blocks);
            // line 165
            echo "\t\t\t\t
\t\t\t\t";
            // line 166
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 167
                echo "\t\t\t\t\t";
                echo call_user_func_array($this->env->getFunction('fn_clearfix')->getCallable(), array($this->getAttribute($context["loop"], "index", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "columns", array())));
                echo "
\t\t\t\t";
            }
            // line 169
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t";
    }

    // line 74
    public function block_article($context, array $blocks = array())
    {
        // line 75
        echo "\t\t\t\t\t<article id=\"news_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "id_n", array()), "html", null, true);
        echo "\" class=\"col-md-";
        echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : null), "html", null, true);
        echo " col-sm-6 col-xs-12\" data-cat=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "id_news_categories", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<h1>";
        // line 76
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 78
        $this->displayBlock('article_header', $context, $blocks);
        // line 95
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 96
        $this->displayBlock('article_title', $context, $blocks);
        // line 101
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 102
        $this->displayBlock('article_contents', $context, $blocks);
        // line 124
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 126
        $this->displayBlock('article_hidden_section', $context, $blocks);
        // line 161
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</article>
\t\t\t\t";
    }

    // line 78
    public function block_article_header($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t\t\t\t\t<div class=\"article-image\">
\t\t\t\t\t\t\t\t";
        // line 80
        if ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "youtube", array())) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_header_youtube', $context, $blocks);
            // line 86
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_header_image', $context, $blocks);
            // line 92
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 81
    public function block_article_header_youtube($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"embeddedvideo\" style=\"background:url('";
        echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
        echo "://img.youtube.com/vi/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "youtube", array()), "html", null, true);
        echo "/0.jpg');background-size:cover;background-position:center center;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["youtube_src"]) ? $context["youtube_src"] : null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "youtube", array()), "html", null, true);
        echo "\" class=\"youtube_video\" style=\"background:url('/images/youtube-play.png') no-repeat center;\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    // line 87
    public function block_article_header_image($context, array $blocks = array())
    {
        // line 88
        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "store_enabled", array())) ? ("/store") : (""));
        echo "/get/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "id_n", array()), "html", null, true);
        echo ".html?lightbox%5Bwidth%5D=640&amp;lightbox%5Bheight%5D=75p\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "src_thumb", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
    }

    // line 96
    public function block_article_title($context, array $blocks = array())
    {
        // line 97
        echo "\t\t\t\t\t\t\t<h2>";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<h3 class=\"calendar\"><i class=\"fa fa-calendar la-lg\"></i> <time datetime=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "html5_date", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "date", array()), "html", null, true);
        echo "</time></h3>
\t\t\t\t\t\t\t";
        // line 99
        $this->displayBlock('_ext_store_news_articles_price', $context, $blocks);
        // line 100
        echo "\t\t\t\t\t\t";
    }

    // line 99
    public function block__ext_store_news_articles_price($context, array $blocks = array())
    {
    }

    // line 102
    public function block_article_contents($context, array $blocks = array())
    {
        // line 103
        echo "\t\t\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "html", array()) && ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "html", array()) != "<br>")) && ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "html", array()) != "<p>&nbsp;</p>"))) {
            // line 104
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_content', $context, $blocks);
            // line 107
            echo "\t\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "doc_list", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_doc', $context, $blocks);
            // line 115
            echo "\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 117
        if ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "url", array())) {
            // line 118
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_read_more', $context, $blocks);
            // line 121
            echo "\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
    }

    // line 104
    public function block_article_content($context, array $blocks = array())
    {
        // line 105
        echo "\t\t\t\t\t\t\t\t\t";
        echo call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array((("<p>" . $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "html", array())) . "</p>"), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "regex", array()), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "replace", array())));
        echo "
\t\t\t\t\t\t\t\t";
    }

    // line 110
    public function block_article_doc($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\t\t\t\t\t\t<a href=\"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "src", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-pdf-o\"></i>&nbsp;";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</a>&nbsp;
\t\t\t\t\t\t\t\t";
    }

    // line 118
    public function block_article_read_more($context, array $blocks = array())
    {
        // line 119
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "url", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\" rel=\"nofollow\"><i class=\"fa fa-link\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "read_more", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t";
    }

    // line 126
    public function block_article_hidden_section($context, array $blocks = array())
    {
        // line 127
        echo "\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h1>";
        // line 128
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>
\t\t\t\t\t\t\t\t<h2>";
        // line 129
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 131
        if ((($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "n_images", array()) > 1) && $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "lightbox_news_thumbs", array()))) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_hidden_slideshow', $context, $blocks);
            // line 139
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 141
        if ((isset($context["has_content"]) ? $context["has_content"] : null)) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text1", array()), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text1", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 145
            echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "text1", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text2", array()), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text2", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 150
            echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "text2", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text3", array()), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title_text3", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 155
            echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "text3", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t";
    }

    // line 132
    public function block_article_hidden_slideshow($context, array $blocks = array())
    {
        // line 133
        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "src_thumb", array()), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:128px;border:3px solid #FFF\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/pages/news.twig";
    }

    public function getDebugInfo()
    {
        return array (  631 => 135,  627 => 133,  624 => 132,  619 => 159,  612 => 155,  608 => 154,  604 => 153,  598 => 150,  594 => 149,  590 => 148,  584 => 145,  580 => 144,  576 => 143,  573 => 142,  571 => 141,  568 => 140,  565 => 139,  562 => 132,  560 => 131,  555 => 129,  551 => 128,  548 => 127,  545 => 126,  536 => 119,  533 => 118,  526 => 112,  521 => 111,  518 => 110,  511 => 105,  508 => 104,  503 => 122,  500 => 121,  497 => 118,  495 => 117,  492 => 116,  478 => 115,  475 => 110,  458 => 109,  455 => 108,  452 => 107,  449 => 104,  446 => 103,  443 => 102,  438 => 99,  434 => 100,  432 => 99,  426 => 98,  421 => 97,  418 => 96,  409 => 89,  402 => 88,  399 => 87,  388 => 83,  381 => 82,  378 => 81,  373 => 93,  370 => 92,  367 => 87,  364 => 86,  361 => 81,  359 => 80,  356 => 79,  353 => 78,  346 => 161,  344 => 126,  340 => 124,  338 => 102,  335 => 101,  333 => 96,  330 => 95,  328 => 78,  323 => 76,  314 => 75,  311 => 74,  304 => 170,  290 => 169,  284 => 167,  282 => 166,  279 => 165,  277 => 74,  274 => 73,  272 => 72,  269 => 71,  266 => 70,  249 => 69,  246 => 68,  243 => 66,  240 => 65,  230 => 50,  219 => 49,  216 => 48,  207 => 57,  202 => 54,  187 => 52,  185 => 48,  182 => 47,  165 => 46,  158 => 44,  152 => 43,  146 => 41,  144 => 40,  138 => 39,  124 => 28,  120 => 27,  114 => 26,  104 => 20,  96 => 13,  93 => 11,  90 => 10,  84 => 6,  79 => 5,  76 => 4,  71 => 174,  69 => 65,  66 => 64,  63 => 63,  60 => 10,  58 => 9,  55 => 8,  53 => 4,  49 => 3,  42 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/news.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/news.twig");
    }
}
