<?php

/* @layout/pages/portfolio.twig */
class __TwigTemplate_82affd22798ee3756cdc918acd6c77acad2038cc9e33c00cef61fb501d53147b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'article' => array($this, 'block_article'),
            'article_header' => array($this, 'block_article_header'),
            'article_header_youtube' => array($this, 'block_article_header_youtube'),
            'article_header_image' => array($this, 'block_article_header_image'),
            'article_title' => array($this, 'block_article_title'),
            'article_contents' => array($this, 'block_article_contents'),
            'article_content' => array($this, 'block_article_content'),
            'article_hidden_section' => array($this, 'block_article_hidden_section'),
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
        echo "<section class=\"section portfolio\" id=\"portfolio";
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
        $this->displayBlock('content', $context, $blocks);
        // line 106
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

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t<div class=\"content\">
\t\t\t";
        // line 12
        echo "\t\t\t
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ports", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 14
            echo "
\t\t\t\t";
            // line 15
            $context["has_content"] = ((((($this->getAttribute($context["portfolio"], "title_text1", array()) || $this->getAttribute($context["portfolio"], "title_text2", array())) || $this->getAttribute($context["portfolio"], "title_text3", array())) || ($this->getAttribute($context["portfolio"], "text1", array()) && ($this->getAttribute($context["portfolio"], "text1", array()) != "<br>"))) || ($this->getAttribute($context["portfolio"], "text2", array()) && ($this->getAttribute($context["portfolio"], "text2", array()) != "<br>"))) || ($this->getAttribute($context["portfolio"], "text3", array()) && ($this->getAttribute($context["portfolio"], "text3", array()) != "<br>")));
            // line 16
            echo "\t\t\t\t
\t\t\t\t";
            // line 17
            $this->displayBlock('article', $context, $blocks);
            // line 97
            echo "\t\t\t\t
\t\t\t\t";
            // line 98
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 99
                echo "\t\t\t\t\t";
                echo call_user_func_array($this->env->getFunction('fn_clearfix')->getCallable(), array($this->getAttribute($context["loop"], "index", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "columns", array())));
                echo "
\t\t\t\t";
            }
            // line 101
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t";
    }

    // line 17
    public function block_article($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t\t\t<article class=\"col-md-";
        echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : null), "html", null, true);
        echo " col-sm-6 col-xs-12\">
\t\t\t\t\t\t<h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 21
        $this->displayBlock('article_header', $context, $blocks);
        // line 54
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 55
        $this->displayBlock('article_title', $context, $blocks);
        // line 63
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 64
        $this->displayBlock('article_contents', $context, $blocks);
        // line 95
        echo "\t\t\t\t\t</article>
\t\t\t\t";
    }

    // line 21
    public function block_article_header($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "id_youtube", array())) {
            // line 23
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_header_youtube', $context, $blocks);
            // line 30
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_header_image', $context, $blocks);
            // line 52
            echo "\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t";
    }

    // line 23
    public function block_article_header_youtube($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t\t\t\t\t\t\t<div class=\"article-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"embeddedvideo\" style=\"background:url('";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
        echo "://img.youtube.com/vi/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "id_youtube", array()), "html", null, true);
        echo "/mqdefault.jpg');background-size:cover;background-position:center center;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["youtube_src"]) ? $context["youtube_src"] : null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "id_youtube", array()), "html", null, true);
        echo "\" class=\"youtube_video\" style=\"background:url('/images/youtube-play.png') no-repeat center;\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
    }

    // line 31
    public function block_article_header_image($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t\t\t\t\t\t\t<div class=\"article-image\">
\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(        // line 44
(isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array())) ? ($this->getAttribute(        // line 45
(isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array())) : ((("/get_port/" . $this->getAttribute(        // line 46
(isset($context["portfolio"]) ? $context["portfolio"] : null), "id", array())) . ".html?lightbox%5Bwidth%5D=640&amp;lightbox%5Bheight%5D=75p"))), "html", null, true);
        // line 47
        echo "\"";
        echo (($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array())) ? (" target=\"_blank\"") : (""));
        echo " rel=\"nofollow\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "src_thumb", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
    }

    // line 55
    public function block_article_title($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t\t\t\t<h2>";
        echo (($this->getAttribute(        // line 57
(isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array())) ? ((((("<a href=\"" . $this->getAttribute(        // line 58
(isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array())) . "\" target=\"_blank\" rel=\"nofollow\">") . $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array())) . "</a>")) : ($this->getAttribute(        // line 59
(isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array())));
        // line 61
        echo "</h2>
\t\t\t\t\t\t";
    }

    // line 64
    public function block_article_contents($context, array $blocks = array())
    {
        // line 65
        echo "\t\t\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "html", array()) && ($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "html", array()) != "<br>")) && ($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "html", array()) != "<p>&nbsp;</p>"))) {
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_content', $context, $blocks);
            // line 69
            echo "\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 71
        if ((( !$this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "url", array()) &&  !$this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "id_youtube", array())) && ((isset($context["has_content"]) ? $context["has_content"] : null) || ($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "n_images", array()) > 1)))) {
            // line 72
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_hidden_section', $context, $blocks);
            // line 93
            echo "\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t";
    }

    // line 66
    public function block_article_content($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t\t\t\t\t\t\t";
        echo call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array((("<p>" . $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "html", array())) . "</p>"), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "regex", array()), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "replace", array())));
        echo "
\t\t\t\t\t\t\t\t";
    }

    // line 72
    public function block_article_hidden_section($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 74
        echo $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title", array());
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text1", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text1", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 78
        echo $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "text1", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text2", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text2", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 83
        echo $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "text2", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t<article class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text3", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "title_text3", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 88
        echo $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "text3", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/pages/portfolio.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 88,  336 => 87,  332 => 86,  326 => 83,  322 => 82,  318 => 81,  312 => 78,  308 => 77,  304 => 76,  299 => 74,  296 => 73,  293 => 72,  286 => 67,  283 => 66,  279 => 94,  276 => 93,  273 => 72,  271 => 71,  268 => 70,  265 => 69,  262 => 66,  259 => 65,  256 => 64,  251 => 61,  249 => 59,  248 => 58,  247 => 57,  245 => 56,  242 => 55,  232 => 48,  225 => 47,  223 => 46,  222 => 45,  221 => 44,  219 => 43,  216 => 32,  213 => 31,  203 => 26,  197 => 25,  194 => 24,  191 => 23,  187 => 53,  184 => 52,  181 => 31,  178 => 30,  175 => 23,  172 => 22,  169 => 21,  164 => 95,  162 => 64,  159 => 63,  157 => 55,  154 => 54,  152 => 21,  147 => 19,  142 => 18,  139 => 17,  132 => 102,  118 => 101,  112 => 99,  110 => 98,  107 => 97,  105 => 17,  102 => 16,  100 => 15,  97 => 14,  80 => 13,  77 => 12,  74 => 10,  71 => 9,  65 => 6,  60 => 5,  57 => 4,  52 => 106,  50 => 9,  47 => 8,  45 => 4,  41 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/portfolio.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/portfolio.twig");
    }
}
