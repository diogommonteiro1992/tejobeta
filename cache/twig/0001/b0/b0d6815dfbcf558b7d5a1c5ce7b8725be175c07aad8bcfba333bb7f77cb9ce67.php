<?php

/* @root/layouts/twig/pages/home.twig */
class __TwigTemplate_9a4bd35503d24e4a2c16c5b1c21bf2dde25949c41f3d0ceb78321cc430ed29e2 extends Twig_Template
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
        // line 5
        try {
            $this->loadTemplate(array(0 => "@doclayout/home.twig", 1 => "@docpages/home.twig", 2 => "@layout/pages/home.twig"), "@root/layouts/twig/pages/home.twig", 5)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

    }

    public function getTemplateName()
    {
        return "@root/layouts/twig/pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/layouts/twig/pages/home.twig", "/home/worldwid/public_html/c1s/php/front/layouts/twig/pages/home.twig");
    }
}
