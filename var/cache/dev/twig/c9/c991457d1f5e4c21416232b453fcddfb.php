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

/* coworking/coworking.html.twig */
class __TwigTemplate_e3fdf0dcdbbf3d55530bcc6806c2d12f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coworking/coworking.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coworking/coworking.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>ColocStudy</title>
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

    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "</head>
<body>
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "
</body>
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
        // line 137
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 138
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 139
        echo "

<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 142
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 143
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 144
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <!-- Simple Line Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/simple-line-icons.css"), "html", null, true);
        echo "\">
        <!-- Datetimepicker -->
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
        <!-- Flexslider -->
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Easing -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap DateTimePicker -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Stellar Parallax -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Flexslider -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$('#date').datetimepicker();
        });
    </script>
    <!-- Main JS -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr JS -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 98
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
        return "coworking/coworking.html.twig";
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
        return array (  313 => 98,  307 => 95,  302 => 93,  292 => 86,  286 => 83,  281 => 81,  276 => 79,  272 => 78,  267 => 76,  262 => 74,  257 => 72,  254 => 71,  244 => 70,  212 => 47,  202 => 46,  190 => 42,  186 => 41,  181 => 39,  176 => 37,  171 => 35,  166 => 33,  161 => 31,  158 => 30,  148 => 29,  137 => 144,  135 => 143,  133 => 142,  128 => 139,  126 => 138,  124 => 137,  86 => 101,  84 => 70,  82 => 46,  78 => 44,  76 => 29,  46 => 1,);
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
</head>
<body>
{% block body %}


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
{% endblock %}
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

</body>
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


<!-- Chemins d'accès aux fichiers CSS et JS -->
{% set css_path = asset('css/') %}
{% set js_path = asset('js/') %}

</html>", "coworking/coworking.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\coworking\\coworking.html.twig");
    }
}
