<?php

/* @layout/_index_content.twig */
class __TwigTemplate_8a912ed4f69c91f5078ba18e51be4b30acf9f88e8b5eff68f2f35c0c852ec90c extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>

<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</h1>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_analytics", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array()), "js"), "html", null, true);
        echo "');
  ga('send', 'pageview');
</script>
\t\t
<div id=\"mask\"></div>
<table class=\"loader\">
\t<tr>
\t\t<td><img src=\"/images/loading.gif\" alt=\"Loading, please wait...\" /></td>
\t</tr>
</table>

";
        // line 22
        if (((((isset($context["CONTEXT"]) ? $context["CONTEXT"] : null) != "preview") && $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "show_cookies_warning", array())) &&  !$this->getAttribute((isset($context["COOKIE"]) ? $context["COOKIE"] : null), "warning_shown", array()))) {
            // line 23
            echo "\t";
            $this->loadTemplate("@layout/cookies.twig", "@layout/_index_content.twig", 23)->display($context);
        }
        // line 25
        echo "
<header class=\"navbar navbar-default navbar-fixed-top\">
\t";
        // line 28
        echo "\t";
        try {
            $this->loadTemplate(array(0 => "@docpages/header.twig", 1 => "@doclayout/header.twig", 2 => "@layout/header.twig"), "@layout/_index_content.twig", 28)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 34
        echo "</header>

<div id=\"alertMessage\"></div>

";
        // line 38
        echo (isset($context["html_pages"]) ? $context["html_pages"] : null);
    }

    public function getTemplateName()
    {
        return "@layout/_index_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 38,  68 => 34,  60 => 28,  56 => 25,  52 => 23,  50 => 22,  34 => 11,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/_index_content.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/_index_content.twig");
    }
}
