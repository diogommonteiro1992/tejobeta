<?php

/* @root/layouts/twig/rights.twig */
class __TwigTemplate_fe3e6c784fd73c8559599505481ff98bbed671aacb01c5ebe81c300ddc974722 extends Twig_Template
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
        // line 6
        try {
            $this->loadTemplate(array(0 => "@doclayout/rights.twig", 1 => "@doclayout/footer.twig", 2 => "@docpages/rights.twig", 3 => "@docpages/footer.twig", 4 => "@docroot/rights.twig", 5 => "@layout/rights.twig"), "@root/layouts/twig/rights.twig", 6)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

    }

    public function getTemplateName()
    {
        return "@root/layouts/twig/rights.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/layouts/twig/rights.twig", "/home/worldwid/public_html/c1s/php/front/layouts/twig/rights.twig");
    }
}
