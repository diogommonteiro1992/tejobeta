<?php

/* @layout/pages/contact.twig */
class __TwigTemplate_6c377366871016107e0ebb72f92df7c91f1b7f860225e1bd7cc2939f0cfbabc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'title' => array($this, 'block_title'),
            'google_maps' => array($this, 'block_google_maps'),
            'google_maps_content' => array($this, 'block_google_maps_content'),
            'facebook' => array($this, 'block_facebook'),
            'facebook_script' => array($this, 'block_facebook_script'),
            'facebook_content' => array($this, 'block_facebook_content'),
            'form' => array($this, 'block_form'),
            'form_content' => array($this, 'block_form_content'),
            '_ext_data_form_content_consent' => array($this, 'block__ext_data_form_content_consent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('page', $context, $blocks);
    }

    public function block_page($context, array $blocks = array())
    {
        // line 2
        echo "\t<section class=\"section contact\" id=\"contact\">
\t\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t\t<div class=\"content\">
\t\t\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "\t\t\t
\t\t\t";
        // line 7
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array())) {
            // line 8
            echo "\t\t\t\t";
            $this->displayBlock('google_maps', $context, $blocks);
            // line 64
            echo "\t\t\t";
        }
        // line 65
        echo "
\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t";
        // line 67
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "addr_street", array()) && $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "addr_city", array()))) {
            // line 68
            echo "\t\t\t\t\t<h3><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "find_us", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t<p><i class=\"fa fa-road\"></i> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "addr_street", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><i class=\"fa fa-globe\"></i> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "addr_city", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t<h3><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "other", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t
\t\t\t\t";
        // line 75
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "phone", array())) {
            // line 76
            echo "\t\t\t\t\t<p><i class=\"fa fa-phone\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "phone", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "phone", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t
\t\t\t\t";
        // line 79
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "cellphone", array())) {
            // line 80
            echo "\t\t\t\t\t<p><i class=\"fa fa-mobile\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "cellphone", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "cellphone", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t
\t\t\t\t";
        // line 83
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "fax", array())) {
            // line 84
            echo "\t\t\t\t\t<p><i class=\"fa fa-print\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "fax", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "fax", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t
\t\t\t\t<p><i class=\"fa fa-envelope-o\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "email", array()), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t
\t\t\t\t";
        // line 89
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "skype", array())) {
            // line 90
            echo "\t\t\t\t\t<p><i class=\"fa fa-skype\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "skype", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 94
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "facebook", array())) {
            // line 95
            echo "\t\t\t\t\t";
            $this->displayBlock('facebook', $context, $blocks);
            // line 123
            echo "\t\t\t\t";
        }
        // line 124
        echo "\t\t\t</div>

\t\t\t<div id=\"contact-section\" class=\"col-md-6 col-sm-6\">
\t\t\t\t";
        // line 127
        $this->displayBlock('form', $context, $blocks);
        // line 183
        echo "
\t\t\t\t<div id=\"mail-message\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div id=\"mail-message-window\">
\t\t\t\t\t\t\t\t\t<div id=\"mail-message-header\"><h3>";
        // line 189
        echo twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "header", array()), "error", array()));
        echo "</h3></div>
\t\t\t\t\t\t\t\t\t<p id=\"mail-failure\">";
        // line 190
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "failure", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"invalid-email\">";
        // line 191
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "invalid", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"empty-field\">";
        // line 192
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "empty", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"mail-success\">";
        // line 193
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "success", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"wrong-captcha\">";
        // line 194
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "wrong_captcha", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"privacy-not-checked\">";
        // line 195
        echo $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "not_checked", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"ext-data-message-consentment-required\">";
        // line 196
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "ext", array()), "data", array()), "consentment", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"spam-link\">
\t\t\t\t\t\t\t\t\t\t";
        // line 198
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "link", array()), "desc", array()), "top", array());
        echo "
\t\t\t\t\t\t\t\t\t\t<span id=\"spam-link-name\">";
        // line 199
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "link", array()), "name", array());
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span id=\"spam-link-subject\">";
        // line 200
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "link", array()), "subject", array());
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span id=\"spam-link-message\">";
        // line 201
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "link", array()), "message", array());
        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 202
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "link", array()), "desc", array()), "bottom", array());
        echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p id=\"spam-ip\">";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "spam", array()), "ip", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<p id=\"refresh\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "box", array()), "refresh", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<input type=\"button\" id=\"mail-message-btn\" class=\"mail-message-btn\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "ok", array())), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</section>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<h2 class=\"header-text\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h2>";
    }

    // line 8
    public function block_google_maps($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t\t\t<script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?language=";
        echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "googlemaps_api_key", array())) ? (("&key=" . $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "googlemaps_api_key", array()))) : ("")), "html", null, true);
        echo "\"></script>
\t\t\t\t\t
\t\t\t\t\t";
        // line 11
        $this->displayBlock('google_maps_content', $context, $blocks);
        // line 16
        echo "\t\t\t\t\t
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction mapinitialize() {
\t\t\t\t\t\t\t";
        // line 21
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 22
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "googlemaps_api_key", array())) {
            // line 23
            echo "\t\t\t\t\t\t\t\tvar myLatlng = new google.maps.LatLng(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "ll", array()), "html", null, true);
            echo ");
\t\t\t\t\t\t\t\tvar myOptions = {
\t\t\t\t\t\t\t\t\tzoom: ";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "z", array())) ? ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "z", array())) : (16)), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\tcenter: myLatlng,
\t\t\t\t\t\t\t\t\tmapTypeId: google.maps.MapTypeId.ROADMAP
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tvar map = new google.maps.Map(document.getElementById(\"map\"), myOptions);

\t\t\t\t\t\t\t\tvar marker = new google.maps.Marker({
\t\t\t\t\t\t\t\t\tposition: myLatlng,
\t\t\t\t\t\t\t\t\tmap: map,
\t\t\t\t\t\t\t\t\ttitle:\"";
            // line 34
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "js"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t\tvar options = {
\t\t\t\t\t\t\t\t\tzoom: ";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "z", array())) ? ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "z", array())) : (16)), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\tcenter: [";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_maps", array()), "ll", array()), "html", null, true);
            echo "],
\t\t\t\t\t\t\t\t\tgestureHandling: true,
\t\t\t\t\t\t\t\t\tgestureHandlingOptions: {
\t\t\t\t\t\t\t\t\t\tduration: 1000,
\t\t\t\t\t\t\t\t\t\tdelay: 0,
\t\t\t\t\t\t\t\t\t\ttext: {
\t\t\t\t\t\t\t\t\t\t\ttouch: '";
            // line 45
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "map", array()), "touch", array()), "js"), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\t\t\tscroll: '";
            // line 46
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "map", array()), "scroll", array()), "js"), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\t\t\tscrollMac: '";
            // line 47
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["out"]) ? $context["out"] : null), "map", array()), "scrollMac", array()), "js"), "html", null, true);
            echo "'
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar map = L.map(document.getElementById(\"map\"), options);
\t\t\t\t\t
\t\t\t\t\t\t\t\tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
\t\t\t\t\t\t\t\t\tattribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
\t\t\t\t\t\t\t\t}).addTo(map);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tL.marker(options.center).addTo(map);
\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t}
\t\t\t\t\t\t(function(\$){\$(window).load(mapinitialize);})(jQuery);//mapinitialize();
\t\t\t\t\t</script>
\t\t\t\t";
    }

    // line 11
    public function block_google_maps_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t\t\t\t<section id=\"map\">
\t\t\t\t\t\t\t<h1>Google Maps</h1>
\t\t\t\t\t\t</section>
\t\t\t\t\t";
    }

    // line 95
    public function block_facebook($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t\t\t\t";
        $this->displayBlock('facebook_script', $context, $blocks);
        // line 111
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 112
        $this->displayBlock('facebook_content', $context, $blocks);
        // line 122
        echo "\t\t\t\t\t";
    }

    // line 96
    public function block_facebook_script($context, array $blocks = array())
    {
        // line 97
        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t(function(\$){
\t\t\t\t\t\t\t\t\$(window).load(function(){
\t\t\t\t\t\t\t\t\t(function(d, s, id) {
\t\t\t\t\t\t\t\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\t\t\t\t\tif (d.getElementById(id)) return;
\t\t\t\t\t\t\t\t\t\tjs = d.createElement(s); js.id = id;
\t\t\t\t\t\t\t\t\t\tjs.src = \"//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5\";
\t\t\t\t\t\t\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t})(jQuery);
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
    }

    // line 112
    public function block_facebook_content($context, array $blocks = array())
    {
        // line 113
        echo "\t\t\t\t\t\t\t<div class=\"limitarbox\">
\t\t\t\t\t\t\t\t<div class=\"fb-page\" data-href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "facebook", array()), "html", null, true);
        echo "\" data-width=\"470\" data-height=\"320\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"fb-xfbml-parse-ignore\">
\t\t\t\t\t\t\t\t\t\t<blockquote cite=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "facebook", array()), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "facebook", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "</a></blockquote>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 127
    public function block_form($context, array $blocks = array())
    {
        // line 128
        echo "\t\t\t\t\t<h3><i class=\"fa fa-envelope-o\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t<form id=\"contact-form\" method=\"post\" action=\"contact.php\" enctype=\"application/x-www-form-urlencoded\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["SESSION"]) ? $context["SESSION"] : null), "csrf_token", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t";
        // line 131
        $this->displayBlock('form_content', $context, $blocks);
        // line 181
        echo "\t\t\t\t\t</form>
\t\t\t\t";
    }

    // line 131
    public function block_form_content($context, array $blocks = array())
    {
        // line 132
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "name", array()), "html", null, true);
        echo " *</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"contact[name]\" class=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "misc", array()), "email", array()), "html", null, true);
        echo " *</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"email\" name=\"contact[email]\" class=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\">";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "subject", array()), "html", null, true);
        echo " *</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subject\" name=\"contact[subject]\" class=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "message", array()), "html", null, true);
        echo " *</label>
\t\t\t\t\t\t\t\t<textarea id=\"message\" name=\"contact[message]\" cols=\"42\" rows=\"7\" class=\"\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 148
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact_captcha", array())) {
            // line 149
            echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "captcha", array()), "html", null, true);
            echo ": <span id=\"captcha_question\">";
            echo call_user_func_array($this->env->getFunction('captcha')->getCallable(), array());
            echo "</span> *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"captcha\" name=\"contact[captcha]\" class=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "show_privacy_policy", array())) {
            // line 155
            echo "\t\t\t\t\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t\t\t\t    <label class=\"switch\">
                                        <input type=\"checkbox\" class=\"switch-input\" id=\"privacy_policy\" name=\"contact[privacy_policy]\">
                                        <span class=\"switch-label\" data-on=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "yes", array()), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "no", array()), "html", null, true);
            echo "\"></span>
                                        <span class=\"switch-handle\"></span>
                                    </label>
                                    <div style=\"display: inline-block; margin-top: 10px; margin-left: 10px;\">
\t\t\t\t\t\t\t\t\t    ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "accept", array()), "html", null, true);
            echo " <a href=\"/privacy/privacy_";
            echo twig_escape_filter($this->env, twig_constant("SITE_LANG"), "html", null, true);
            echo ".html?lightbox[height]=60p&lightbox[width]=50p&page=website\" class=\"lightbox\" rel=\"nofollow\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "privacy_policy_text", array()), "html", null, true);
            echo "</b></a>
                                    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t\t\t    <div style=\"display: inline-block\">
\t\t\t\t\t\t\t\t    <label class=\"switch\">
                                        <input type=\"checkbox\" class=\"switch-input\" id=\"marketing_publicity\" name=\"contact[marketing_publicity]\">
                                        <span class=\"switch-label\" data-on=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "yes", array()), "html", null, true);
        echo "\" data-off=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "no", array()), "html", null, true);
        echo "\"></span>
                                        <span class=\"switch-handle\"></span>
                                    </label>
\t\t\t\t\t\t\t    </div>
                                <div style=\"display: inline-block; margin-top: 3px; margin-left: 10px;\">";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "marketing", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 176
        $this->displayBlock('_ext_data_form_content_consent', $context, $blocks);
        // line 177
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"submit-mail\" class=\"submit-btn\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["out"]) ? $context["out"] : null), "send", array())), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 176
    public function block__ext_data_form_content_consent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@layout/pages/contact.twig";
    }

    public function getDebugInfo()
    {
        return array (  541 => 176,  534 => 178,  531 => 177,  529 => 176,  524 => 174,  515 => 170,  509 => 166,  498 => 162,  489 => 158,  484 => 155,  481 => 154,  472 => 150,  469 => 149,  467 => 148,  461 => 145,  454 => 141,  447 => 137,  440 => 133,  437 => 132,  434 => 131,  429 => 181,  427 => 131,  423 => 130,  417 => 128,  414 => 127,  400 => 116,  395 => 114,  392 => 113,  389 => 112,  372 => 97,  369 => 96,  365 => 122,  363 => 112,  360 => 111,  357 => 96,  354 => 95,  347 => 12,  344 => 11,  337 => 60,  321 => 47,  317 => 46,  313 => 45,  304 => 39,  300 => 38,  297 => 37,  291 => 34,  279 => 25,  273 => 23,  271 => 22,  268 => 21,  263 => 16,  261 => 11,  254 => 9,  251 => 8,  243 => 5,  228 => 206,  224 => 205,  220 => 204,  215 => 202,  211 => 201,  207 => 200,  203 => 199,  199 => 198,  194 => 196,  190 => 195,  186 => 194,  182 => 193,  178 => 192,  174 => 191,  170 => 190,  166 => 189,  158 => 183,  156 => 127,  151 => 124,  148 => 123,  145 => 95,  143 => 94,  139 => 92,  133 => 90,  131 => 89,  124 => 87,  121 => 86,  113 => 84,  111 => 83,  108 => 82,  100 => 80,  98 => 79,  95 => 78,  87 => 76,  85 => 75,  82 => 74,  76 => 72,  71 => 70,  67 => 69,  62 => 68,  60 => 67,  56 => 65,  53 => 64,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  38 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@layout/pages/contact.twig", "/home/worldwid/public_html/c1s/php/front/layouts/0001/pages/contact.twig");
    }
}
