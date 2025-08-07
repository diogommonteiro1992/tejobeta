<?php

/* @layout/_index.twig */
class __TwigTemplate_4e4c4b50f118a24628dd6d0e33aff321705f4745c3a19a6f25108c91b77be460 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js";
        // line 2
        echo twig_escape_filter($this->env, (((twig_constant("EXT") && twig_constant("EXT_ENABLED"))) ? ((" in-ext in-" . twig_constant("EXT"))) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 4
        echo (isset($context["head"]) ? $context["head"] : null);
        echo "
\t</head>
\t<body data-spy=\"scroll\" data-target=\".navbar-fixed-top\" data-offset=\"";
        // line 6
        echo twig_escape_filter($this->env, (85 + (50 * (isset($context["high"]) ? $context["high"] : null))), "html", null, true);
        echo "\" id=\"page-top\" class=\"index\">
\t\t";
        // line 8
        echo "\t\t";
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@layout/_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 6,  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/_index.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/_index.twig");
    }
}
