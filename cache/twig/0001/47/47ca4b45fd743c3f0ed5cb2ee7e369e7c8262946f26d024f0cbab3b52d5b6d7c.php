<?php

/* @layout/_index_backgrounds.twig */
class __TwigTemplate_698c7e8147861cebe624e87e7c5f85515d86cfad4895a45d671b5bb5a86cc9c7 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages_list"]) ? $context["pages_list"] : null));
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
            // line 2
            echo "\t";
            echo (($this->getAttribute($context["page"], "has_sub_pages", array())) ? (((((".section." . $this->getAttribute((isset($context["list"]) ? $context["list"] : null), ($this->getAttribute($context["page"], "group", array()) - 1), array(), "array")) . "[id^=\"") . $this->getAttribute((isset($context["list"]) ? $context["list"] : null), ($this->getAttribute($context["page"], "group", array()) - 1), array(), "array")) . "\"]")) : (("#" . $this->getAttribute((isset($context["list"]) ? $context["list"] : null), ($this->getAttribute($context["page"], "group", array()) - 1), array(), "array"))));
            echo "
\t{
\t\t";
            // line 4
            $context["b"] = $this->getAttribute((isset($context["backgrounds"]) ? $context["backgrounds"] : null), ($this->getAttribute($context["loop"], "index", array()) % 2 == 0), array(), "array");
            // line 5
            echo "\t\t
\t\tbackground: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
            echo " !important;
\t\t";
            // line 7
            if (($this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()) != $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()))) {
                // line 8
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["b"]) ? $context["b"] : null), "type", array()) == "0")) {
                    // line 9
                    echo "\t\t\t\tbackground: -moz-radial-gradient(center, ellipse cover,  ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo "), color-stop(100%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo ")) !important;
\t\t\t\tbackground: -webkit-radial-gradient(center, ellipse cover, ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -o-radial-gradient(center, ellipse cover, ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -ms-radial-gradient(center, ellipse cover, ";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: radial-gradient(ellipse at center, ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo "', endColorstr='";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo "', GradientType=1 ) !important;
\t\t\t";
                } elseif (($this->getAttribute(                // line 16
(isset($context["b"]) ? $context["b"] : null), "type", array()) == "1")) {
                    // line 17
                    echo "\t\t\t\tbackground: -moz-linear-gradient(top, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 0%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%, ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo "), color-stop(100%, ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo ")) !important;
\t\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 0%,";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 0%,";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 0%,";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo " 0%,";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo " 100%) !important;
\t\t\t\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "start", array()), "html", null, true);
                    echo "', endColorstr='";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : null), "end", array()), "html", null, true);
                    echo "', GradientType=0 ) !important;
\t\t\t";
                }
                // line 25
                echo "\t\t\tbackground-image-repeat: no-repeat;
\t\t";
            }
            // line 27
            echo "\t}
";
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
    }

    public function getTemplateName()
    {
        return "@layout/_index_backgrounds.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 27,  145 => 25,  138 => 23,  132 => 22,  126 => 21,  120 => 20,  114 => 19,  108 => 18,  101 => 17,  99 => 16,  93 => 15,  87 => 14,  81 => 13,  75 => 12,  69 => 11,  63 => 10,  56 => 9,  53 => 8,  51 => 7,  47 => 6,  44 => 5,  42 => 4,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/_index_backgrounds.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/_index_backgrounds.twig");
    }
}
