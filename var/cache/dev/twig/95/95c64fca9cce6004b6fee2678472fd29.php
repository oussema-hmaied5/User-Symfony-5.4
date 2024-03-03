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

/* profile.html.twig */
class __TwigTemplate_92108e94fb09a6b4403457a411b040bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>ColocStudy</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\"/>
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\"/>
    <meta name=\"author\" content=\"FREEHTML5.CO\"/>


    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\"/>
    <meta name=\"twitter:image\" content=\"\"/>
    <meta name=\"twitter:url\" content=\"\"/>
    <meta name=\"twitter:card\" content=\"\"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic'
          rel='stylesheet' type='text/css'>

    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
<div id=\"fh5co-container\">

    ";
        // line 55
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 56
            echo "        <div class=\"js-sticky\">
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
        }
        // line 77
        echo "</div>
<div id=\"fh5co-container\">
    <section class=\"ftco-section\">
        <div class=\"container\">
            ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        </div>
    </section>
</div>

";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "</div>


<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 123
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 124
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 125
        echo "

<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 128
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 129
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 130
        echo "

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <!-- Simple Line Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/simple-line-icons.css"), "html", null, true);
        echo "\">
        <!-- Datetimepicker -->
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
        <!-- Flexslider -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Easing -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap DateTimePicker -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Stellar Parallax -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Flexslider -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$('#date').datetimepicker();
        });
    </script>
    <!-- Main JS -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr JS -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile.html.twig";
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
        return array (  311 => 116,  305 => 113,  300 => 111,  290 => 104,  284 => 101,  279 => 99,  274 => 97,  270 => 96,  265 => 94,  260 => 92,  255 => 90,  252 => 89,  242 => 88,  231 => 82,  221 => 81,  209 => 43,  205 => 42,  200 => 40,  195 => 38,  190 => 36,  185 => 34,  180 => 32,  177 => 31,  167 => 30,  154 => 130,  152 => 129,  150 => 128,  145 => 125,  143 => 124,  141 => 123,  135 => 119,  133 => 88,  127 => 84,  125 => 81,  119 => 77,  96 => 56,  94 => 55,  86 => 50,  79 => 45,  77 => 30,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>ColocStudy</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\"/>
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\"/>
    <meta name=\"author\" content=\"FREEHTML5.CO\"/>


    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\"/>
    <meta name=\"twitter:image\" content=\"\"/>
    <meta name=\"twitter:url\" content=\"\"/>
    <meta name=\"twitter:card\" content=\"\"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic'
          rel='stylesheet' type='text/css'>

    {% block stylesheets %}
        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
        <!-- Simple Line Icons -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/simple-line-icons.css') }}\">
        <!-- Datetimepicker -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
        <!-- Flexslider -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}

    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"{{ asset('login/css/style.css') }}\">
</head>
<body>
<div id=\"fh5co-container\">

    {% if is_granted('ROLE_ADMIN') == false %}
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
    {% endif %}
</div>
<div id=\"fh5co-container\">
    <section class=\"ftco-section\">
        <div class=\"container\">
            {% block body %}

            {% endblock %}
        </div>
    </section>
</div>

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <!-- jQuery Easing -->
    <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <!-- Bootstrap DateTimePicker -->
    <script src=\"{{ asset('js/moment.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
    <!-- Waypoints -->
    <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
    <!-- Stellar Parallax -->
    <script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>

    <!-- Flexslider -->
    <script src=\"{{ asset('js/jquery.flexslider-min.js') }}\"></script>
    <script>
        \$(function () {
            \$('#date').datetimepicker();
        });
    </script>
    <!-- Main JS -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <!-- Modernizr JS -->
    <script src=\"{{ asset('js/modernizr-2.6.2.min.js') }}\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->
{% endblock %}
</div>


<!-- Chemins d'accès aux fichiers CSS et JS -->
{% set css_path = asset('css/') %}
{% set js_path = asset('js/') %}


<!-- Chemins d'accès aux fichiers CSS et JS -->
{% set css_path = asset('css/') %}
{% set js_path = asset('js/') %}


</body>
</html>", "profile.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\profile.html.twig");
    }
}
