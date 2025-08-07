<?php

/* @root/layouts/twig/pages/team.twig */
class __TwigTemplate_aefd167d8f524649437522108a2c32971f30c82666a418181741c168c03ffbb3 extends Twig_Template
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
        $context["classes"] = array("facebook" => "facebook", "twitter" => "twitter", "linkedin" => "linkedin", "url" => "globe", "email" => "envelope-o");
        // line 6
        try {
            $this->loadTemplate(array(0 => "@doclayout/team.twig", 1 => "@docpages/team.twig", 2 => "@layout/pages/team.twig"), "@root/layouts/twig/pages/team.twig", 6)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

    }

    public function getTemplateName()
    {
        return "@root/layouts/twig/pages/team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/layouts/twig/pages/team.twig", "/home/worldwid/public_html/c1s/php/front/layouts/twig/pages/team.twig");
    }
}
