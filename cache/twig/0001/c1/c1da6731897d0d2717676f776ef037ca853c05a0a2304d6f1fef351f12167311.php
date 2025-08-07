<?php

/* @root/layouts/twig/pages/contact.twig */
class __TwigTemplate_5001cdbe6ba58447920374cb4d90dd9f00b2b64a973f11479a72a83d79a84596 extends Twig_Template
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
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()), "data", array()), "enabled", array())) {
            // line 3
            echo "\t";
            try {
                $this->loadTemplate(array(0 => (("@exts/data/layouts/" . twig_constant("LAYOUT_ID")) . "/pages/contact.twig"), 1 => "@exts/data/layouts/all/pages/contact.twig", 2 => "@doclayout/contact.twig", 3 => "@docpages/contact.twig", 4 => "@layout/pages/contact.twig"), "@root/layouts/twig/pages/contact.twig", 3)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        } else {
            // line 14
            echo "\t";
            // line 18
            echo "\t";
            try {
                $this->loadTemplate(array(0 => "@doclayout/contact.twig", 1 => "@docpages/contact.twig", 2 => "@layout/pages/contact.twig"), "@root/layouts/twig/pages/contact.twig", 18)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
    }

    public function getTemplateName()
    {
        return "@root/layouts/twig/pages/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 18,  30 => 14,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/layouts/twig/pages/contact.twig", "/home/worldwid/public_html/c1s/php/front/layouts/twig/pages/contact.twig");
    }
}
