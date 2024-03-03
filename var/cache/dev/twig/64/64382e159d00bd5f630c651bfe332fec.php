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

/* user/inscription.html.twig */
class __TwigTemplate_612796abb3b3550a86d3bd6ff71f0cc6 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscription.html.twig"));

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
</div>
<div id=\"fh5co-container\">
    <section class=\"ftco-section\">
        <div class=\"container\">


            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                    <h2 class=\"heading-section\">Inscription</h2>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12 col-lg-10\">
                    <div class=\"wrap d-md-flex\">
                        <div class=\"img\" style=\"background-image: url(";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/images/bg-1.jpg"), "html", null, true);
        echo ");\">
                        </div>
                        <div class=\"login-wrap p-4 p-md-5\">
                            <div class=\"d-flex\">

                            </div>

    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Vous avez déjà un compte ?  Connecter</a>
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'widget');
        echo "
                            <button type=\"submit\" class=\"form-control btn btn-primary rounded submit px-3\">
                                S'inscrire
                            </button>
    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>
</body>
</html>
";
        
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/inscription.html.twig";
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
        return array (  219 => 43,  215 => 42,  210 => 40,  205 => 38,  200 => 36,  195 => 34,  190 => 32,  187 => 31,  177 => 30,  152 => 103,  145 => 99,  141 => 98,  137 => 97,  127 => 90,  84 => 50,  77 => 45,  75 => 30,  44 => 1,);
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
</div>
<div id=\"fh5co-container\">
    <section class=\"ftco-section\">
        <div class=\"container\">


            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                    <h2 class=\"heading-section\">Inscription</h2>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12 col-lg-10\">
                    <div class=\"wrap d-md-flex\">
                        <div class=\"img\" style=\"background-image: url({{ asset('login/images/bg-1.jpg') }});\">
                        </div>
                        <div class=\"login-wrap p-4 p-md-5\">
                            <div class=\"d-flex\">

                            </div>

    <a href=\"{{ path('app_login') }}\">Vous avez déjà un compte ?  Connecter</a>
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    {{ form_widget(form) }}
                            <button type=\"submit\" class=\"form-control btn btn-primary rounded submit px-3\">
                                S'inscrire
                            </button>
    {{ form_end(form) }}


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>
</body>
</html>
", "user/inscription.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\user\\inscription.html.twig");
    }
}
