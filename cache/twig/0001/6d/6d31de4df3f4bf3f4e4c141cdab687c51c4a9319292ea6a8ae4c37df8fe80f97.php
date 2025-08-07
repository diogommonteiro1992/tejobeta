<?php

/* @layout/rights.twig */
class __TwigTemplate_0d4eff1a43791f9ca5fb49d5642b8d6e1f39c1ceec961e200a3cca4577633f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
            'site_name' => array($this, 'block_site_name'),
            '_ext_store_vat_footer' => array($this, 'block__ext_store_vat_footer'),
            'footer_social' => array($this, 'block_footer_social'),
            'social' => array($this, 'block_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["show_logo"] = ( !preg_match("~^(?:www.)?cr1site.pt~", $this->getAttribute((isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array())) && $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo_footer", array()));
        // line 2
        $context["classes"] = array("facebook" => "facebook-f", "twitter" => "twitter", "tripadvisor" => "tripadvisor", "pinterest" => "pinterest-p", "instagram" => "instagram", "youtube" => "youtube");
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "<footer id=\"footer\" class=\"footer content\">
\t";
        // line 13
        $this->displayBlock('site_name', $context, $blocks);
        // line 29
        echo "\t
\t";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()), "store", array()), "enabled", array())) {
            // line 31
            echo "\t\t";
            $this->displayBlock('_ext_store_vat_footer', $context, $blocks);
            // line 42
            echo "\t";
        }
        // line 43
        echo "\t
\t";
        // line 44
        $this->displayBlock('footer_social', $context, $blocks);
        // line 81
        echo "</footer>
";
    }

    // line 13
    public function block_site_name($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<div class=\"footer_logo text-center\">
\t\t\t&copy; ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "
\t\t\t";
        // line 17
        echo "\t\t\t";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
(isset($context["general"]) ? $context["general"] : null), "exts", array()), "store", array()), "enabled", array())) ? (((((" - <a href=\"/store/terms/" . twig_constant("SITE_LANG")) . ".html?lightbox[height]=60p&lightbox[width]=50p&page=website\" class=\"lightbox\" rel=\"nofollow\">") . $this->getAttribute($this->getAttribute(        // line 19
(isset($context["text"]) ? $context["text"] : null), "footer", array()), "terms_and_conditions", array())) . "</a>")) : ((($this->getAttribute(        // line 21
(isset($context["site"]) ? $context["site"] : null), "footer_show_terms", array())) ? (((" - <a href=\"/terms.html?lightbox[height]=60p&lightbox[width]=50p&page=website\" class=\"lightbox\" rel=\"nofollow\">" . $this->getAttribute($this->getAttribute(        // line 22
(isset($context["text"]) ? $context["text"] : null), "footer", array()), "terms_and_conditions", array())) . "</a>")) : (""))));
        // line 25
        echo "
\t\t\t";
        // line 26
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()), "data", array()), "enabled", array())) ? (((" - <a href=\"/terms.html?lightbox[height]=60p&lightbox[width]=50p&page=gdpr\" class=\"lightbox\" rel=\"nofollow\">" . $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "footer", array()), "gdpr", array())) . "</a>")) : (""));
        echo "
\t\t</div>
\t";
    }

    // line 31
    public function block__ext_store_vat_footer($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t<p id=\"ext_store_footer_vat\" class=\"text-center\">
\t\t\t\t";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()), "store", array()), "settings", array()), "vat_exempt_art_53", array())) {
            // line 34
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "ext", array()), "store", array()), "vat_exempt_art_53", array()), "html", null, true);
            echo "
\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 35
(isset($context["general"]) ? $context["general"] : null), "exts", array()), "store", array()), "settings", array()), "vat_show", array())) {
            // line 36
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "ext", array()), "store", array()), "vat_shown", array()), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "ext", array()), "store", array()), "vat_not_shown", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</p>
\t\t";
    }

    // line 44
    public function block_footer_social($context, array $blocks = array())
    {
        // line 45
        echo "\t\t<div id=\"footer_social\" class=\"social_contact\">
\t\t\t<ul>
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "twitter", 1 => "facebook", 2 => "tripadvisor", 3 => "pinterest", 4 => "instagram", 5 => "youtube"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 48
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), $context["class"], array(), "array")) {
                // line 49
                echo "\t\t\t\t\t\t";
                $this->displayBlock('social', $context, $blocks);
                // line 56
                echo "\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t
\t\t\t\t";
        // line 59
        if ((isset($context["show_logo"]) ? $context["show_logo"] : null)) {
            // line 60
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "footer", array()), "c1s", array()), "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "footer", array()), "c1s", array()), "title", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_contact_c1s\"></a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t
\t\t\t\t";
        // line 65
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "show_consumer_complaints_resolution", array())) {
            // line 66
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/terms.html?lightbox[height]=40p&lightbox[width]=40p&page=ca\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "footer", array()), "ca", array()), "title", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_contact_ca lightbox\"></a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t
\t\t\t\t";
        // line 71
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "show_complaints_book", array())) {
            // line 72
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.livroreclamacoes.pt/inicio\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "footer", array()), "cb", array()), "title", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_contact_cb\" rel=\"nofollow\"></a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t
\t\t\t\t<li class=\"clearfix\"></li>
\t\t\t</ul>
\t\t</div>
\t";
    }

    // line 49
    public function block_social($context, array $blocks = array())
    {
        // line 50
        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), (isset($context["class"]) ? $context["class"] : null), array(), "array"), "html", null, true);
        echo "\" target=\"_blank\" class=\"social_contact_";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" rel=\"me\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classes"]) ? $context["classes"] : null), (isset($context["class"]) ? $context["class"] : null), array(), "array"), "html", null, true);
        echo "\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@layout/rights.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 52,  229 => 51,  226 => 50,  223 => 49,  215 => 76,  209 => 73,  206 => 72,  204 => 71,  201 => 70,  195 => 67,  192 => 66,  190 => 65,  187 => 64,  179 => 61,  176 => 60,  174 => 59,  171 => 58,  157 => 57,  154 => 56,  151 => 49,  148 => 48,  131 => 47,  127 => 45,  124 => 44,  119 => 40,  113 => 38,  107 => 36,  105 => 35,  100 => 34,  98 => 33,  95 => 32,  92 => 31,  85 => 26,  82 => 25,  80 => 22,  79 => 21,  78 => 19,  77 => 18,  75 => 17,  69 => 15,  66 => 14,  63 => 13,  58 => 81,  56 => 44,  53 => 43,  50 => 42,  47 => 31,  45 => 30,  42 => 29,  40 => 13,  37 => 12,  31 => 11,  28 => 10,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/rights.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/rights.twig");
    }
}
