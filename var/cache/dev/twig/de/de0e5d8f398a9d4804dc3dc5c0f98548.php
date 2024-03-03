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

/* login/reset_password_request.html.twig */
class __TwigTemplate_f8a6648ffcef2916f49d5d461f685672 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/reset_password_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/reset_password_request.html.twig"));

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
";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 95
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

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    <div id=\"fh5co-container\">

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
                        <h2 class=\"heading-section\">Réinitialisation de mot de passe</h2>
                        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'row');
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </section>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/reset_password_request.html.twig";
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
        return array (  212 => 87,  207 => 85,  203 => 84,  171 => 54,  161 => 53,  149 => 43,  145 => 42,  140 => 40,  135 => 38,  130 => 36,  125 => 34,  120 => 32,  117 => 31,  107 => 30,  93 => 95,  91 => 53,  85 => 50,  78 => 45,  76 => 30,  45 => 1,);
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
{% block body %}
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
                        <h2 class=\"heading-section\">Réinitialisation de mot de passe</h2>
                        {{ form_start(requestPassForm) }}
                        {{ form_row(requestPassForm.email) }}
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        {{ form_end(requestPassForm) }}
                    </div>
                </div>
            </div>
        </section>

    </div>
{% endblock %}

</body>


</html>", "login/reset_password_request.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\login\\reset_password_request.html.twig");
    }
}
