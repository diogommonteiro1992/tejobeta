<?php

/* @root/general/head.twig */
class __TwigTemplate_28292c15dce21241a491d5aba625c1bebe9ed46b3cebba70d885d8141c4aeef4 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array()) == "boatcharteralgarve.com")) {
            // line 2
            echo "<meta name=\"google-site-verification\" content=\"sLX8wwKfuHSyBrQSWLFv7CV8zsvpF3xs6S1P755aABE\" />
";
        }
        // line 4
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_desc", array()), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_key", array()), "html", null, true);
        echo "\">


";
        // line 13
        echo "<meta property=\"og:url\" content=\"";
        echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
        echo "://";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) ? ($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) : (twig_constant("SERVER_NAME"))), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
        echo "\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "\"/>
<meta property=\"og:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_desc", array()), "html", null, true);
        echo "\"/>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 18
            echo "\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
            echo "://";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) ? ($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) : (twig_constant("SERVER_NAME"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $context["slide"], "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

";
        // line 22
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array())) {
            // line 23
            echo "<meta name=\"geo.position\" content=\"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "ll", array()), array("," => ";")), "html", null, true);
            echo "\" />
<meta name=\"ICBM\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "ll", array()), array("," => ", ")), "html", null, true);
            echo "\" />
";
        }
        // line 26
        echo "
";
        // line 31
        echo "<script>
\tthis.top.location.host !== this.location.host && (this.top.location = this.location.href = \"//www.worldwidedesign.org\");
</script>

<link rel=\"shortcut icon\" href=\"/images/favicon.ico\" type=\"image/x-icon\">
<link rel=\"canonical\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_constant("ROOT_URL_SCHEME"), "html", null, true);
        echo "://";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) ? ($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "site", array()), "site", array())) : (twig_constant("SERVER_NAME"))), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
        echo "\">

";
        // line 39
        if (($this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "debug", array()) && ($this->getAttribute((isset($context["SESSION"]) ? $context["SESSION"] : null), "adm_lvl", array()) >= 4))) {
            // line 40
            echo "<script type=\"text/javascript\" src=\"//getfirebug.com/firebug-lite.js#startOpened=";
            echo (($this->getAttribute((isset($context["REQUEST"]) ? $context["REQUEST"] : null), "opened", array())) ? ("true") : ("false"));
            echo "\"></script>
<script>
\twindow.addEventListener && window.addEventListener('error', function(e){
\t\tconsole.log && console.log(e);
\t\tvar loader = document.getElementsByClassName('loader')[0];
\t\tif(loader)
\t\t{
\t\t\tloader.parentNode.removeChild(loader);
\t\t}
\t});
\tconsole.log && console.log({
\t\t'navigator': window.navigator,
\t\t'screen': window.screen,
\t\t'performance': window.performance
\t});
</script>
";
        }
        // line 57
        echo "
";
        // line 58
        if (preg_match("~^(?:www.)?criar1site.pt\$~", $this->getAttribute((isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array()))) {
            // line 60
            echo "<script type=\"text/javascript\">
_atrk_opts = { atrk_acct:\"CAqBl1agWBr1Cs\", domain:\"criar1site.pt\",dynamic: true};
(function() { var as = documenwindow.addEventListener('error',t.createElement('script')); as.type = 'text/javascript'; as.async = true; as.src = \"https://d31qbv1cthcecs.cloudfront.net/atrk.js\"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src=\"https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=CAqBl1agWBr1Cs\" style=\"display:none\" height=\"1\" width=\"1\" alt=\"\" /></noscript>
";
            // line 67
            echo "<script>
\t(function(h,o,t,j,a,r){
\t\th.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
\t\th._hjSettings={hjid:62962,hjsv:5};
\t\ta=o.getElementsByTagName('head')[0];
\t\tr=o.createElement('script');r.async=1;
\t\tr.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
\t\ta.appendChild(r);
\t})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
";
        } elseif (preg_match("~^(?:www.)?worldwidedesign.pt\$~", $this->getAttribute(        // line 77
(isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array()))) {
            // line 79
            echo "<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:62910,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script> 
";
        } elseif (preg_match("~^(?:www.)?peadvogados.pt\$~", $this->getAttribute(        // line 89
(isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array()))) {
            // line 90
            echo "<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'ea5b83f5-1c7f-4c9c-a12b-fea3014235af', f: true }); done = true; } }; })();</script>
";
        } elseif (preg_match("~^(?:www.)?dareu.pt\$~", $this->getAttribute(        // line 91
(isset($context["SERVER"]) ? $context["SERVER"] : null), "SERVER_NAME", array()))) {
            // line 92
            echo "<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'f0eb19dc-a2dd-423c-b36e-d43693f97b17', f: true }); done = true; } }; })();</script>
";
        }
        // line 94
        echo "
";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "exts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            if ($this->getAttribute($context["ext"], "enabled", array())) {
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => ("/layouts/" . twig_constant("LAYOUT_ID"))));
                foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
                    // line 98
                    $context["path"] = (($this->getAttribute($context["ext"], "ext_name", array()) . $context["dir"]) . "/style.css");
                    // line 99
                    if (file_exists(((twig_constant("ROOT_FRONT") . "extensions/") . (isset($context["path"]) ? $context["path"] : null)))) {
                        // line 100
                        echo "<style>";
                        echo call_user_func_array($this->env->getFilter('minify_css')->getCallable(), array(twig_source($this->env, ("@exts/" . (isset($context["path"]) ? $context["path"] : null)), true)));
                        echo "</style>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        try {
            $this->loadTemplate(array(0 => "@docroot/general/head.twig", 1 => "@doclayout/head.twig", 2 => "@docpages/head.twig"), "@root/general/head.twig", 121)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 127
        echo "
";
        // line 129
        if (((twig_constant("EXT") && twig_constant("EXT_FILE")) && twig_constant("EXT_ENABLED"))) {
            // line 130
            echo "\t";
            try {
                $this->loadTemplate(array(0 => "@extlayout/head.twig", 1 => "@extroot/head.twig"), "@root/general/head.twig", 130)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
        // line 136
        echo "
<style>";
        // line 137
        echo call_user_func_array($this->env->getFilter('minify_css')->getCallable(), array((isset($context["backgrounds"]) ? $context["backgrounds"] : null)));
        echo "</style>

";
        // line 139
        if (file_exists(((($this->getAttribute((isset($context["SERVER"]) ? $context["SERVER"] : null), "DOCUMENT_ROOT", array()) . "/pages/") . twig_constant("LAYOUT_ID")) . "/fix.css"))) {
            // line 140
            echo "\t<style>";
            echo call_user_func_array($this->env->getFilter('minify_css')->getCallable(), array(twig_source($this->env, "@doclayout/fix.css", true)));
            echo "</style>
";
        } elseif (file_exists(($this->getAttribute(        // line 141
(isset($context["SERVER"]) ? $context["SERVER"] : null), "DOCUMENT_ROOT", array()) . "/fix.css"))) {
            // line 142
            echo "\t";
            // line 143
            echo "\t<style>";
            echo call_user_func_array($this->env->getFilter('minify_css')->getCallable(), array(twig_source($this->env, "@docroot/fix.css", true)));
            echo "</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@root/general/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 143,  256 => 142,  254 => 141,  249 => 140,  247 => 139,  242 => 137,  239 => 136,  230 => 130,  228 => 129,  225 => 127,  218 => 121,  211 => 114,  202 => 100,  200 => 99,  198 => 98,  194 => 97,  189 => 96,  186 => 94,  182 => 92,  180 => 91,  177 => 90,  175 => 89,  163 => 79,  161 => 77,  149 => 67,  142 => 60,  140 => 58,  137 => 57,  116 => 40,  114 => 39,  105 => 36,  98 => 31,  95 => 26,  90 => 24,  85 => 23,  83 => 22,  79 => 20,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  44 => 13,  38 => 9,  34 => 8,  30 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/general/head.twig", "/home/worldwid/public_html/c1s/php/front/general/head.twig");
    }
}
