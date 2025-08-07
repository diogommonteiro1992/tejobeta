<?php

/* @root/layouts/twig/pages/news.twig */
class __TwigTemplate_23fd3783fcabf9b6e1ec34e58cd6611366613f9ae0188f0a76f73e6d5c51d0b4 extends Twig_Template
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
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "list_categories", array()) && ($this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "t", array()) != "full_page"))) {
            // line 4
            echo "\t";
            // line 8
            echo "\t";
            $this->loadTemplate(array(0 => "@doclayout/news_categories_list.twig", 1 => "@docpages/news_categories_list.twig", 2 => "@layout/pages/news_categories_list.twig"), "@root/layouts/twig/pages/news.twig", 8)->display($context);
        } elseif ($this->getAttribute(        // line 15
(isset($context["data"]) ? $context["data"] : null), "store_enabled", array())) {
            // line 16
            echo "\t";
            $this->loadTemplate(array(0 => (("@exts/store/layouts/" . twig_constant("LAYOUT_ID")) . "/pages/news.twig"), 1 => "@exts/store/layouts/all/pages/news.twig", 2 => "@doclayout/news.twig", 3 => "@docpages/news.twig", 4 => "@layout/pages/news.twig"), "@root/layouts/twig/pages/news.twig", 16)->display($context);
        } else {
            // line 27
            echo "\t";
            // line 31
            echo "\t";
            try {
                $this->loadTemplate(array(0 => "@doclayout/news.twig", 1 => "@docpages/news.twig", 2 => "@layout/pages/news.twig"), "@root/layouts/twig/pages/news.twig", 31)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
    }

    public function getTemplateName()
    {
        return "@root/layouts/twig/pages/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 31,  32 => 27,  28 => 16,  26 => 15,  23 => 8,  21 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/layouts/twig/pages/news.twig", "/home/worldwid/public_html/c1s/php/front/layouts/twig/pages/news.twig");
    }
}
