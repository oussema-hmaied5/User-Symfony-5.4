<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coworking/show.html.twig */
class __TwigTemplate_8c2b08117cc05ebdc29ecca7855a2300 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coworking/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coworking/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Coworking</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />


    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

    <!-- Include your CSS stylesheets here -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/simple-line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

</head>
<body>

<div class=\"js-sticky\">
    <div class=\"fh5co-main-nav\">
        <div class=\"container-fluid\">
            <div class=\"fh5co-menu-1\">
                <a href=\"#\" data-nav-section=\"home\">Home</a>
                <a href=\"#\" data-nav-section=\"about\">About</a>
                <a href=\"#\" data-nav-section=\"features\">Package</a>
            </div>
            <div class=\"fh5co-logo\">
                <a href=\"#\">ColocStudy</a>
            </div>
            <div class=\"fh5co-menu-2\">
                <a href=\"#\" data-nav-section=\"menu\">Logements</a>
                <a href=\"#\" data-nav-section=\"events\">Restaurants</a>
                <a href=\"#\" data-nav-section=\"reservation\">Coworking </a>
            </div>
        </div>
    </div>
</div>

<!-- Continue with the rest of your HTML content -->
";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
<!-- Include your JavaScript files here -->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
<!--[if lt IE 9]>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

<div id=\"fh5co-footer\" style=\"background-color: #14147c;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Réseaux Sociaux</h3>
                <ul class=\"fh5co-social\">
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-facebook\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-twitter\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-instagram\" style=\"color: #fff;\"></i></a></li>
                </ul>
            </div>
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Contactez-nous</h3>
                <p>Contactez-nous : contact@colocstudy.com</p>
            </div>
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Nos Liens</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\" style=\"color: #fff;\">Accueil</a></li>
                    <li><a href=\"#\" style=\"color: #fff;\">À propos</a></li>
                    <li><a href=\"#\" style=\"color: #fff;\">Services</a></li>
                    <!-- Ajoutez d'autres liens de votre site ici -->
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"text-center to-animate\"><a href=\"#\" class=\"js-gotop\" style=\"color: #fff;\">Revenir en haut de page</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 147
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 148
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 149
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    <h1>Coworking</h1>

    <table class=\"table\">
        <tbody>
       
            <tr>
                <th>Description</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarifs</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 74, $this->source); })()), "tarifs", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dispo</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 78, $this->source); })()), "dispo", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horaireouvr</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 82, $this->source); })()), "horaireouvr", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horairefer</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 86, $this->source); })()), "horairefer", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coworking_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coworking_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coworking"]) || array_key_exists("coworking", $context) ? $context["coworking"] : (function () { throw new RuntimeError('Variable "coworking" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 95
        echo twig_include($this->env, $context, "coworking/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "coworking/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  296 => 95,  291 => 93,  286 => 91,  278 => 86,  271 => 82,  264 => 78,  257 => 74,  250 => 70,  241 => 63,  231 => 62,  219 => 149,  217 => 148,  215 => 147,  175 => 110,  170 => 108,  166 => 107,  162 => 106,  158 => 105,  154 => 104,  150 => 103,  146 => 102,  142 => 101,  138 => 100,  134 => 99,  130 => 97,  128 => 62,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Coworking</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />


    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

    <!-- Include your CSS stylesheets here -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/simple-line-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

</head>
<body>

<div class=\"js-sticky\">
    <div class=\"fh5co-main-nav\">
        <div class=\"container-fluid\">
            <div class=\"fh5co-menu-1\">
                <a href=\"#\" data-nav-section=\"home\">Home</a>
                <a href=\"#\" data-nav-section=\"about\">About</a>
                <a href=\"#\" data-nav-section=\"features\">Package</a>
            </div>
            <div class=\"fh5co-logo\">
                <a href=\"#\">ColocStudy</a>
            </div>
            <div class=\"fh5co-menu-2\">
                <a href=\"#\" data-nav-section=\"menu\">Logements</a>
                <a href=\"#\" data-nav-section=\"events\">Restaurants</a>
                <a href=\"#\" data-nav-section=\"reservation\">Coworking </a>
            </div>
        </div>
    </div>
</div>

<!-- Continue with the rest of your HTML content -->
{% block body %}
    <h1>Coworking</h1>

    <table class=\"table\">
        <tbody>
       
            <tr>
                <th>Description</th>
                <td>{{ coworking.description }}</td>
            </tr>
            <tr>
                <th>Tarifs</th>
                <td>{{ coworking.tarifs }}</td>
            </tr>
            <tr>
                <th>Dispo</th>
                <td>{{ coworking.dispo }}</td>
            </tr>
            <tr>
                <th>Horaireouvr</th>
                <td>{{ coworking.horaireouvr }}</td>
            </tr>
            <tr>
                <th>Horairefer</th>
                <td>{{ coworking.horairefer }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_coworking_index') }}\">back to list</a>

    <a href=\"{{ path('app_coworking_edit', {'id': coworking.id}) }}\">edit</a>

    {{ include('coworking/_delete_form.html.twig') }}
{% endblock %}

<!-- Include your JavaScript files here -->
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/moment.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.flexslider-min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
<script src=\"{{ asset('js/modernizr-2.6.2.min.js') }}\"></script>
<!--[if lt IE 9]>
<script src=\"{{ asset('js/respond.min.js') }}\"></script>
<![endif]-->

<div id=\"fh5co-footer\" style=\"background-color: #14147c;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Réseaux Sociaux</h3>
                <ul class=\"fh5co-social\">
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-facebook\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-twitter\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-instagram\" style=\"color: #fff;\"></i></a></li>
                </ul>
            </div>
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Contactez-nous</h3>
                <p>Contactez-nous : contact@colocstudy.com</p>
            </div>
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Nos Liens</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\" style=\"color: #fff;\">Accueil</a></li>
                    <li><a href=\"#\" style=\"color: #fff;\">À propos</a></li>
                    <li><a href=\"#\" style=\"color: #fff;\">Services</a></li>
                    <!-- Ajoutez d'autres liens de votre site ici -->
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"text-center to-animate\"><a href=\"#\" class=\"js-gotop\" style=\"color: #fff;\">Revenir en haut de page</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Chemins d'accès aux fichiers CSS et JS -->
{% set css_path = asset('css/') %}
{% set js_path = asset('js/') %}

</body>
</html>", "coworking/show.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\coworking\\show.html.twig");
    }
}
