<?php

/* @layout/pages/team.twig */
class __TwigTemplate_b7853301c6b609430405bc62e53c194039b70ab97973dc741bede8a4914a8cd3 extends Twig_Template
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
            'article_image' => array($this, 'block_article_image'),
            'article_title' => array($this, 'block_article_title'),
            'article_content' => array($this, 'block_article_content'),
            'article_social' => array($this, 'block_article_social'),
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
        echo "<section class=\"section team\" id=\"team";
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
        // line 62
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
        echo "\t\t\t";
        // line 13
        echo "\t\t\t
\t\t\t";
        // line 14
        $context["classes"] = array("facebook" => "facebook", "twitter" => "twitter", "linkedin" => "linkedin", "url" => "globe", "email" => "envelope-o");
        // line 15
        echo "
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "members", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 17
            echo "\t\t\t\t";
            $this->displayBlock('article', $context, $blocks);
            // line 53
            echo "\t\t\t\t
\t\t\t\t";
            // line 54
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 55
                echo "\t\t\t\t\t";
                echo call_user_func_array($this->env->getFunction('fn_clearfix')->getCallable(), array($this->getAttribute($context["loop"], "index", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "columns", array())));
                echo "
\t\t\t\t";
            }
            // line 57
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 21
        $this->displayBlock('article_image', $context, $blocks);
        // line 24
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 25
        $this->displayBlock('article_title', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 30
        $context["social_html"] = "";
        // line 31
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "facebook", 1 => "twitter", 2 => "linkedin", 3 => "url", 4 => "email"));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 32
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), $context["social"], array(), "array")) {
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                $context["social_html"] = ((((((((isset($context["social_html"]) ? $context["social_html"] : null) . "<li><a href=\"") . ((($context["social"] == "email")) ? (("mailto:" . $this->getAttribute((isset($context["member"]) ? $context["member"] : null), $context["social"], array(), "array"))) : (((("/l.php?l=" . $context["social"]) . "&amp;id=") . $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id_team", array()))))) . "\" target=\"_blank\" class=\"fa fa-") . $this->getAttribute((isset($context["classes"]) ? $context["classes"] : null), $context["social"], array(), "array")) . "\"") . ((($context["social"] == "url")) ? (((" title=\"" . $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "link_externo", array())) . "\"")) : (""))) . " rel=\"nofollow\"></a></li>");
                // line 34
                echo "\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 37
        $this->displayBlock('article_content', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t</article>
\t\t\t\t";
    }

    // line 21
    public function block_article_image($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "src", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t\t";
    }

    // line 25
    public function block_article_title($context, array $blocks = array())
    {
        // line 26
        echo "\t\t\t\t\t\t\t<h2 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<div class=\"text-center\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "job", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t";
    }

    // line 37
    public function block_article_content($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["social_html"]) ? $context["social_html"] : null)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('article_social', $context, $blocks);
            // line 47
            echo "\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 49
        echo call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array((("<p>" . $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "desc", array())) . "</p>"), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "regex", array()), $this->getAttribute($this->getAttribute((isset($context["cleaner"]) ? $context["cleaner"] : null), "p", array()), "replace", array())));
        echo "
\t\t\t\t\t\t";
    }

    // line 39
    public function block_article_social($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo (isset($context["social_html"]) ? $context["social_html"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/pages/team.twig";
    }

    public function getDebugInfo()
    {
        return array (  245 => 42,  241 => 40,  238 => 39,  232 => 49,  229 => 48,  226 => 47,  223 => 39,  220 => 38,  217 => 37,  211 => 27,  206 => 26,  203 => 25,  194 => 22,  191 => 21,  186 => 51,  184 => 37,  181 => 36,  175 => 35,  172 => 34,  169 => 33,  166 => 32,  161 => 31,  159 => 30,  156 => 29,  154 => 25,  151 => 24,  149 => 21,  144 => 19,  139 => 18,  136 => 17,  129 => 58,  115 => 57,  109 => 55,  107 => 54,  104 => 53,  101 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  71 => 10,  68 => 9,  62 => 6,  57 => 5,  54 => 4,  49 => 62,  47 => 9,  44 => 8,  42 => 4,  38 => 3,  33 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/team.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/team.twig");
    }
}
