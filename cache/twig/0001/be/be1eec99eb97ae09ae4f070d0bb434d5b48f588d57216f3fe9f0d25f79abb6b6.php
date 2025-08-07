<?php

/* @layout/header.twig */
class __TwigTemplate_c67c3ee02c6edd7fcb9c7bbd50141ea5b477573697e282d617f179fc804cdbfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'hamburger' => array($this, 'block_hamburger'),
            'logo' => array($this, 'block_logo'),
            'langs' => array($this, 'block_langs'),
            'lang' => array($this, 'block_lang'),
            'nav' => array($this, 'block_nav'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'nav_menu_items' => array($this, 'block_nav_menu_items'),
            'nav_menu_item' => array($this, 'block_nav_menu_item'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"content\">
\t<div class=\"navbar-header nav-main\">
\t\t
\t\t";
        // line 5
        if (( !twig_constant("EXT") &&  !twig_constant("EXT_ENABLED"))) {
            // line 6
            echo "\t\t\t";
            $this->displayBlock('hamburger', $context, $blocks);
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "\t\t
\t\t";
        // line 15
        $this->displayBlock('logo', $context, $blocks);
        // line 20
        echo "\t\t
\t\t";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["linguas"]) ? $context["linguas"] : null), "list", array())) > 1)) {
            // line 22
            echo "\t\t\t";
            $this->displayBlock('langs', $context, $blocks);
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t\t
\t</div>
\t
\t";
        // line 68
        if (( !twig_constant("EXT") &&  !twig_constant("EXT_ENABLED"))) {
            // line 69
            echo "\t\t";
            $this->displayBlock('nav', $context, $blocks);
            // line 91
            echo "\t";
        }
        // line 92
        echo "</div>
";
    }

    // line 6
    public function block_hamburger($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t";
    }

    // line 15
    public function block_logo($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, (((twig_constant("EXT") && twig_constant("EXT_ENABLED"))) ? (("/" . twig_constant("SITE_LANG"))) : ("#home")), "html", null, true);
        echo "\" class=\"navbar-brand page-scroll\">
\t\t\t\t<img id=\"logo\" class=\"img-responsive\" src=\"/images/logo.png\" alt=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "\">
\t\t\t</a>
\t\t";
    }

    // line 22
    public function block_langs($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t<ul id=\"lang\" class=\"";
        echo (((twig_length_filter($this->env, $this->getAttribute((isset($context["linguas"]) ? $context["linguas"] : null), "list", array())) > 2)) ? (" multi") : (""));
        echo "\">
\t\t\t\t";
        // line 25
        echo "\t\t\t\t";
        // line 26
        echo "\t\t\t\t
\t\t\t\t";
        // line 27
        if (((isset($context["links_lang"]) ? $context["links_lang"] : null) && twig_length_filter($this->env, (isset($context["links_lang"]) ? $context["links_lang"] : null)))) {
            // line 28
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["linguas"]) ? $context["linguas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 29
                echo "\t\t\t\t\t\t";
                if ((((                // line 30
$context["lang"] && $this->getAttribute(                // line 31
$context["lang"], "name", array())) &&  !($this->getAttribute(                // line 32
$context["lang"], "id", array()) == twig_constant("SITE_LANG_ID"))) && $this->getAttribute(                // line 33
(isset($context["links_lang"]) ? $context["links_lang"] : null), $this->getAttribute($context["lang"], "name", array()), array(), "array"))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview")) ? ($this->getAttribute((isset($context["links_lang"]) ? $context["links_lang"] : null), $this->getAttribute($context["lang"], "name", array()), array(), "array")) : ("javascript:;")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["lang"], "name", array())), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["linguas"]) ? $context["linguas"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 40
                echo "\t\t\t\t\t\t";
                if ((((                // line 41
$context["lang"] && $this->getAttribute(                // line 42
$context["lang"], "name", array())) &&  !($this->getAttribute(                // line 43
$context["lang"], "id", array()) == twig_constant("SITE_LANG_ID"))) && ( !$this->getAttribute($this->getAttribute(                // line 45
(isset($context["site_all"]) ? $context["site_all"] : null), $this->getAttribute($context["lang"], "id", array()), array(), "array"), "maintenance", array()) || ($this->getAttribute($this->getAttribute(                // line 47
(isset($context["site_all"]) ? $context["site_all"] : null), $this->getAttribute($context["lang"], "id", array()), array(), "array"), "maintenance", array()) && $this->getAttribute(                // line 48
(isset($context["SESSION"]) ? $context["SESSION"] : null), "id_user", array()))))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t";
                    $this->displayBlock('lang', $context, $blocks);
                    // line 59
                    echo "\t\t\t\t\t\t";
                }
                // line 60
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t";
        }
        // line 62
        echo "\t\t\t</ul>
\t\t\t";
    }

    // line 52
    public function block_lang($context, array $blocks = array())
    {
        // line 53
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "t", array()) == "full_page")) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, ((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview")) ? (((((("/" . twig_lower_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "name", array()))) . "/") . $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "p", array())) . (($this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "id", array())) ? (("/" . $this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "id", array()))) : (""))) . ".html")) : ("javascript:;")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "name", array())), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, ((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview")) ? ((("/" . twig_lower_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "name", array()))) . twig_constant("EXT_URL"))) : ("javascript:;")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "name", array())), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t";
    }

    // line 69
    public function block_nav($context, array $blocks = array())
    {
        // line 70
        echo "\t\t<nav class=\"navbar-collapse collapse\">
\t\t\t<h1>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 72
        $this->displayBlock('nav_menu', $context, $blocks);
        // line 89
        echo "\t\t</nav>
\t\t";
    }

    // line 72
    public function block_nav_menu($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t<ul itemscope itemtype=\"http://www.schema.org/SiteNavigationElement\" class=\"nav navbar-nav navbar-right\">
\t\t\t\t";
        // line 74
        $this->displayBlock('nav_menu_items', $context, $blocks);
        // line 87
        echo "\t\t\t</ul>
\t\t\t";
    }

    // line 74
    public function block_nav_menu_items($context, array $blocks = array())
    {
        // line 75
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 76
            echo "\t\t\t\t\t";
            if (($context["page"] &&  !$this->getAttribute($context["page"], "hide", array()))) {
                // line 77
                echo "\t\t\t\t\t";
                $this->displayBlock('nav_menu_item', $context, $blocks);
                // line 84
                echo "\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t";
    }

    // line 77
    public function block_nav_menu_item($context, array $blocks = array())
    {
        // line 78
        echo "\t\t\t\t\t\t<li itemprop=\"name\">
\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"page-scroll\" href=\"#";
        // line 79
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["list"]) ? $context["list"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "group", array()), array(), "array") . (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array())) ? (("_sub_" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()))) : (""))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "icon", array()), "html", null, true);
        echo "\"></i><br /><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  321 => 80,  317 => 79,  314 => 78,  311 => 77,  307 => 86,  293 => 85,  290 => 84,  287 => 77,  284 => 76,  266 => 75,  263 => 74,  258 => 87,  256 => 74,  253 => 73,  250 => 72,  245 => 89,  243 => 72,  239 => 71,  236 => 70,  233 => 69,  229 => 58,  221 => 56,  213 => 54,  210 => 53,  207 => 52,  202 => 62,  199 => 61,  185 => 60,  182 => 59,  179 => 52,  177 => 48,  176 => 47,  175 => 45,  174 => 43,  173 => 42,  172 => 41,  170 => 40,  152 => 39,  149 => 38,  143 => 37,  135 => 35,  133 => 33,  132 => 32,  131 => 31,  130 => 30,  128 => 29,  123 => 28,  121 => 27,  118 => 26,  116 => 25,  111 => 23,  108 => 22,  101 => 17,  96 => 16,  93 => 15,  84 => 7,  81 => 6,  76 => 92,  73 => 91,  70 => 69,  68 => 68,  63 => 65,  60 => 64,  57 => 22,  55 => 21,  52 => 20,  50 => 15,  47 => 14,  44 => 13,  41 => 6,  39 => 5,  34 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/header.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/header.twig");
    }
}
