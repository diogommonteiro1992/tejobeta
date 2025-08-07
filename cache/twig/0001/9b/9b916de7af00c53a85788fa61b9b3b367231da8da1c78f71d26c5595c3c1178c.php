<?php

/* @layout/pages/about.twig */
class __TwigTemplate_4613eac751cda9d1221f541c1500c1b2512c0430b8afa085b85b0712c206ac7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'contents' => array($this, 'block_contents'),
            'activities' => array($this, 'block_activities'),
            'activity' => array($this, 'block_activity'),
            'highlights' => array($this, 'block_highlights'),
            'recruit' => array($this, 'block_recruit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('page', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "recruit_active", array())) {
            // line 87
            echo "\t";
            $this->displayBlock('recruit', $context, $blocks);
        }
    }

    // line 1
    public function block_page($context, array $blocks = array())
    {
        // line 2
        echo "\t<section class=\"section about\" id=\"about";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array())) ? (("_sub_" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_group", array()))) : ("")), "html", null, true);
        echo "\">
\t\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "\t</section>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "<h2 class=\"header-text\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h2>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t";
        $this->displayBlock('contents', $context, $blocks);
        // line 20
        echo "\t\t\t
\t\t\t";
        // line 21
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "active_activity", array())) {
            // line 22
            echo "\t\t\t\t";
            $this->displayBlock('activities', $context, $blocks);
            // line 49
            echo "\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t";
            // line 51
            echo "\t\t\t\t<div class=\"clearfix\">&nbsp;</div>
\t\t\t";
        }
        // line 53
        echo "\t\t\t
\t\t\t";
        // line 54
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "highlights_bottom_active", array())) {
            // line 55
            echo "\t\t\t\t";
            $this->displayBlock('highlights', $context, $blocks);
            // line 81
            echo "\t\t\t";
        }
        // line 82
        echo "\t\t";
    }

    // line 6
    public function block_contents($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t<div class=\"content text-center\">
\t\t\t\t\t<h3 class=\"caption text-center\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "desc", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 text-left\">
\t\t\t\t\t\t<h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 1, array(), "array"), "title", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t";
        // line 11
        echo call_user_func_array($this->env->getFilter('cleaner_tag')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 1, array(), "array"), "desc", array())));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 text-left\">
\t\t\t\t\t\t<h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 2, array(), "array"), "title", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t";
        // line 15
        echo call_user_func_array($this->env->getFilter('cleaner_tag')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 2, array(), "array"), "desc", array())));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 22
    public function block_activities($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t";
        // line 25
        echo "\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12\">
\t\t\t\t\t\t\t<div id=\"diagram\"></div>
\t\t\t\t\t\t\t<div class=\"get\">
\t\t\t\t\t\t\t\t";
        // line 28
        $context["dots"] = "";
        // line 29
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "activities", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('activity', $context, $blocks);
            // line 37
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 38
            $context["dots"] = ((((isset($context["dots"]) ? $context["dots"] : null) . "<p><i class=\"fa fa-arrow-right\"></i> ") . $this->getAttribute($context["activity"], "name", array())) . "</p>");
            // line 39
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t<h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_activity", array()), "html", null, true);
        echo ":</h3>
\t\t\t\t\t\t\t";
        // line 44
        echo (isset($context["dots"]) ? $context["dots"] : null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 30
    public function block_activity($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"arc\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "name", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"percent\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "value", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"color\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "color", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    // line 55
    public function block_highlights($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<!-- icons -->
\t\t\t\t\t\t<div id=\"about_highlights\" class=\"icon_about text-center\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-heart fa-5x\"></i></span>
\t\t\t\t\t\t\t\t\t<h2>";
        // line 62
        echo stripslashes($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 3, array(), "array"), "title", array()));
        echo "</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-road fa-5x\"></i></span>
\t\t\t\t\t\t\t\t\t<h2>";
        // line 68
        echo stripslashes($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 4, array(), "array"), "title", array()));
        echo "</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-dashboard fa-5x\"></i></span>
\t\t\t\t\t\t\t\t\t<h2>";
        // line 74
        echo stripslashes($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "about", array()), 5, array(), "array"), "title", array()));
        echo "</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 87
    public function block_recruit($context, array $blocks = array())
    {
        // line 88
        echo "\t\t<section class=\"section testimonials\" id=\"testimonials\">
\t\t\t<h1>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "recruit_title", array()), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"content text-center\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"/recruit.html?lightbox%5Bwidth%5D=320&amp;lightbox%5Bheight%5D=650\" class=\"lightbox\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "recruit_title", array()), "html", null, true);
        echo "</a>
\t\t\t\t</h2>
\t\t\t\t<h5>
\t\t\t\t\t<a href=\"/recruit.html?lightbox%5Bwidth%5D=320&amp;lightbox%5Bheight%5D=650\" class=\"lightbox\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "recruit_desc", array()), "html", null, true);
        echo "</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "@layout/pages/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 95,  286 => 92,  280 => 89,  277 => 88,  274 => 87,  263 => 74,  254 => 68,  245 => 62,  237 => 56,  234 => 55,  227 => 34,  223 => 33,  219 => 32,  216 => 31,  213 => 30,  204 => 44,  200 => 43,  195 => 40,  181 => 39,  179 => 38,  176 => 37,  173 => 30,  155 => 29,  153 => 28,  148 => 25,  145 => 23,  142 => 22,  133 => 15,  129 => 14,  123 => 11,  119 => 10,  114 => 8,  111 => 7,  108 => 6,  104 => 82,  101 => 81,  98 => 55,  96 => 54,  93 => 53,  89 => 51,  87 => 50,  84 => 49,  81 => 22,  79 => 21,  76 => 20,  73 => 6,  70 => 5,  62 => 4,  57 => 83,  54 => 5,  52 => 4,  48 => 3,  43 => 2,  40 => 1,  34 => 87,  32 => 86,  29 => 85,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/about.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/about.twig");
    }
}
