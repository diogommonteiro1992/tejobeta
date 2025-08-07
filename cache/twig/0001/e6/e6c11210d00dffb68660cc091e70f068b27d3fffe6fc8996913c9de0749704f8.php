<?php

/* @layout/pages/home.twig */
class __TwigTemplate_40bbc648cc555d6d353f24c6ecbec138a48f24442557c47c4b5e3c924230e086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'contents' => array($this, 'block_contents'),
            'slideshow' => array($this, 'block_slideshow'),
            'youtube' => array($this, 'block_youtube'),
            'slide' => array($this, 'block_slide'),
            'slide_contents' => array($this, 'block_slide_contents'),
            'slide_content_holder' => array($this, 'block_slide_content_holder'),
            'slide_content' => array($this, 'block_slide_content'),
            'slide_doc_content' => array($this, 'block_slide_doc_content'),
            'slideshow_controls' => array($this, 'block_slideshow_controls'),
            'highlights' => array($this, 'block_highlights'),
            'highlight' => array($this, 'block_highlight'),
            'highlight_icon' => array($this, 'block_highlight_icon'),
            'highlight_title' => array($this, 'block_highlight_title'),
            'highlight_content' => array($this, 'block_highlight_content'),
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
        echo "<section class=\"section first-section home\" id=\"home\">
\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "page", array()), "name", array()), "html", null, true);
        echo "</h1>
\t
\t";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 88
        echo "\t
\t";
        // line 89
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "highlights_top_active", array())) {
            // line 90
            echo "\t\t<div class=\"content\">
\t\t\t";
            // line 92
            echo "\t\t\t";
            $this->displayBlock('highlights', $context, $blocks);
            // line 118
            echo "\t\t</div>
\t";
        }
        // line 120
        echo "</section>
";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<div class=\"content\">
\t\t\t<div id=\"myCarousel\" class=\"carousel slide";
        // line 7
        echo ((((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "slides", array())) < 2) || $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slideshow_youtube_id", array()))) ? (" hide-arrows") : (""));
        echo "\">
\t\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "slideshow_active", array())) {
            // line 9
            echo "\t\t\t\t\t";
            // line 10
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 11
            $this->displayBlock('slideshow', $context, $blocks);
            // line 84
            echo "\t\t\t\t";
        }
        // line 85
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    // line 11
    public function block_slideshow($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t";
        // line 13
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slideshow_youtube_id", array())) {
            // line 14
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('youtube', $context, $blocks);
            // line 21
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "slides", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 23
                echo "\t\t\t\t\t\t\t\t\t";
                $context["has_desc"] = (($this->getAttribute($context["slide"], "desc", array()) &&  !($this->getAttribute($context["slide"], "desc", array()) == "<br>")) &&  !($this->getAttribute($context["slide"], "desc", array()) == "<p>&nbsp;</p>"));
                // line 24
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 25
                $this->displayBlock('slide', $context, $blocks);
                // line 66
                echo "\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 70
        $this->displayBlock('slideshow_controls', $context, $blocks);
        // line 78
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 79
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slideshow_youtube_id", array())) {
            // line 80
            echo "\t\t\t\t\t\t\t<div class=\"carousel-caption-area carousel-caption\"></div>
\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 14
    public function block_youtube($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t\t\t\t\t\t\t<div class=\"item active\" style=\"background:url('";
        echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
        echo "://i.ytimg.com/vi/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slideshow_youtube_id", array()), "html", null, true);
        echo "/sddefault.jpg');background-size:cover;background-position:center center;line-height:0px;\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["youtube_src"]) ? $context["youtube_src"] : null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slideshow_youtube_id", array()), "html", null, true);
        echo "\" class=\"youtube_video\" style=\"background:url('/images/youtube-play.png') no-repeat center;\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
    }

    // line 25
    public function block_slide($context, array $blocks = array())
    {
        // line 26
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item ";
        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) ? (" active") : (""));
        echo "\" id=\"slide_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        if ((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview") &&  !$this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "doc", array()))) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url_ext", array())) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url_ext", array()), "html", null, true);
                echo "\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 31
(isset($context["slide"]) ? $context["slide"] : null), "url_ext", array())) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url_ext", array()), "html", null, true);
                echo "\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 33
(isset($context["slide"]) ? $context["slide"] : null), "url", array())) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url", array()), "html", null, true);
                echo "\" class=\"lightbox\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        $this->displayBlock('slide_contents', $context, $blocks);
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 60
        if (((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview") &&  !$this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "doc", array())) && ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url_ext", array()) || $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "url", array())))) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    // line 38
    public function block_slide_contents($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "src", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "alt", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        if (($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "alt", array()) || $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "desc", array()))) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('slide_content_holder', $context, $blocks);
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 41
    public function block_slide_content_holder($context, array $blocks = array())
    {
        // line 42
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption ";
        echo (((isset($context["has_desc"]) ? $context["has_desc"] : null)) ? ("") : (" no-caption"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        $this->displayBlock('slide_content', $context, $blocks);
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "doc", array())) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "doc", array()));
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
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $this->displayBlock('slide_doc_content', $context, $blocks);
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 43
    public function block_slide_content($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "alt", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo (((isset($context["has_desc"]) ? $context["has_desc"] : null)) ? ((("<h3>" . $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "desc", array())) . "</h3>")) : (""));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 50
    public function block_slide_doc_content($context, array $blocks = array())
    {
        // line 51
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "src", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "title", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 70
    public function block_slideshow_controls($context, array $blocks = array())
    {
        // line 71
        echo "\t\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<span class=\"icon-prev\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<span class=\"icon-next\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
    }

    // line 92
    public function block_highlights($context, array $blocks = array())
    {
        // line 93
        echo "\t\t\t\t<div id=\"highlights\" class=\"content text-center\">
\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "highlights", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["highlight"]) {
            // line 95
            echo "\t\t\t\t\t\t";
            $this->displayBlock('highlight', $context, $blocks);
            // line 114
            echo "\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 95
    public function block_highlight($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t\t\t\t\t<div class=\"col-md-";
        echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : null), "html", null, true);
        echo " col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 97
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "highlights_hide_icons", array())) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('highlight_icon', $context, $blocks);
            // line 103
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 105
        $this->displayBlock('highlight_title', $context, $blocks);
        // line 108
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 109
        $this->displayBlock('highlight_content', $context, $blocks);
        // line 112
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 98
    public function block_highlight_icon($context, array $blocks = array())
    {
        // line 99
        echo "\t\t\t\t\t\t\t\t\t<span class=\"circle-back ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highlight"]) ? $context["highlight"] : null), "icon_class", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highlight"]) ? $context["highlight"] : null), "icon_class", array()), "html", null, true);
        echo " icons\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
    }

    // line 105
    public function block_highlight_title($context, array $blocks = array())
    {
        // line 106
        echo "\t\t\t\t\t\t\t\t\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highlight"]) ? $context["highlight"] : null), "title", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t";
    }

    // line 109
    public function block_highlight_content($context, array $blocks = array())
    {
        // line 110
        echo "\t\t\t\t\t\t\t\t\t<p>";
        echo $this->getAttribute((isset($context["highlight"]) ? $context["highlight"] : null), "desc", array());
        echo "</p>
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/pages/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  479 => 110,  476 => 109,  469 => 106,  466 => 105,  459 => 100,  454 => 99,  451 => 98,  446 => 112,  444 => 109,  441 => 108,  439 => 105,  436 => 104,  433 => 103,  430 => 98,  428 => 97,  423 => 96,  420 => 95,  414 => 115,  400 => 114,  397 => 95,  380 => 94,  377 => 93,  374 => 92,  364 => 71,  361 => 70,  352 => 51,  349 => 50,  343 => 45,  338 => 44,  335 => 43,  330 => 55,  327 => 54,  313 => 53,  310 => 50,  292 => 49,  290 => 48,  287 => 47,  285 => 43,  280 => 42,  277 => 41,  273 => 58,  270 => 57,  267 => 41,  265 => 40,  258 => 39,  255 => 38,  249 => 63,  245 => 61,  243 => 60,  240 => 59,  238 => 38,  235 => 37,  232 => 36,  226 => 34,  224 => 33,  219 => 32,  217 => 31,  212 => 30,  209 => 29,  207 => 28,  199 => 26,  196 => 25,  186 => 17,  178 => 15,  175 => 14,  170 => 82,  166 => 80,  164 => 79,  161 => 78,  159 => 70,  155 => 68,  152 => 67,  138 => 66,  136 => 25,  133 => 24,  130 => 23,  112 => 22,  109 => 21,  106 => 14,  104 => 13,  101 => 12,  98 => 11,  92 => 85,  89 => 84,  87 => 11,  84 => 10,  82 => 9,  80 => 8,  76 => 7,  73 => 6,  70 => 5,  65 => 120,  61 => 118,  58 => 92,  55 => 90,  53 => 89,  50 => 88,  48 => 5,  43 => 3,  40 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/home.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/home.twig");
    }
}
