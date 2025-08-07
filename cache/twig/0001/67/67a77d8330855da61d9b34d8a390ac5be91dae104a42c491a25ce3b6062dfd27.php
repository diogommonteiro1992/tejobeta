<?php

/* @layout/_index_pages.twig */
class __TwigTemplate_f7df1dc8df174f53ce5112af0106b85087575c8b7700a119347094fc722047f8 extends Twig_Template
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
        echo "<div id=\"page\"";
        echo ((twig_constant("EXT")) ? (((" class=\"ext has-" . twig_constant("EXT")) . "\"")) : (""));
        echo ">";
        echo (isset($context["html"]) ? $context["html"] : null);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@layout/_index_pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/_index_pages.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/_index_pages.twig");
    }
}
