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

/* login/login.html.twig */
class __TwigTemplate_36965827cffc34dba60e2c845009e6ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

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
        // line 149
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
                        <h2 class=\"heading-section\">Connexion</h2>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-12 col-lg-10\">
                        <div class=\"wrap d-md-flex\">
                            <div class=\"img\" style=\"background-image: url(";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/images/bg-1.jpg"), "html", null, true);
        echo ");\">
                            </div>
                            <div class=\"login-wrap p-4 p-md-5\">
                                <div class=\"d-flex\">

                                </div>
                                <form method=\"post\" class=\"signin-form\">
                                    ";
        // line 96
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })()), "messageKey", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })()), "messageData", [], "any", false, false, false, 97), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 99
        echo "
                                    ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100)) {
            // line 101
            echo "                                        <div class=\"mb-3\">
                                            You are logged in as ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "userIdentifier", [], "any", false, false, false, 102), "html", null, true);
            echo ", <a
                                                    href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnecter</a>
                                        </div>
                                    ";
        }
        // line 106
        echo "
                                    <div class=\"form-group mb-3\">
                                        <label for=\"username\">Email</label>
                                        <input type=\"email\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"username\"
                                               class=\"form-control\" autocomplete=\"mail\" required autofocus>
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label for=\"password\">Mot de passe</label>
                                        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                               autocomplete=\"current-password\" required>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                    >

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"form-control btn btn-primary rounded submit px-3\">
                                            Se connecter
                                        </button>
                                    </div>
                                    <div class=\"form-group d-md-flex\">
                                        <div class=\"w-50 text-left\">
                                            <label class=\"checkbox-wrap checkbox-primary mb-0\">Se souvenir de moi
                                                <input type=\"checkbox\" checked>
                                                <span class=\"checkmark\"></span>
                                            </label>
                                        </div>

                                    </div>
                                </form>
                                <p class=\"text-center\">Pas encore de compte ? <a data-toggle=\"tab\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inscription");
        echo "\">Créer un compte</a></p>
                                <a data-toggle=\"tab\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a>
                            </div>
                        </div>
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
        return "login/login.html.twig";
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
        return array (  287 => 138,  283 => 137,  262 => 119,  249 => 109,  244 => 106,  238 => 103,  234 => 102,  231 => 101,  229 => 100,  226 => 99,  220 => 97,  218 => 96,  208 => 89,  171 => 54,  161 => 53,  149 => 43,  145 => 42,  140 => 40,  135 => 38,  130 => 36,  125 => 34,  120 => 32,  117 => 31,  107 => 30,  93 => 149,  91 => 53,  85 => 50,  78 => 45,  76 => 30,  45 => 1,);
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
                        <h2 class=\"heading-section\">Connexion</h2>
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
                                <form method=\"post\" class=\"signin-form\">
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"mb-3\">
                                            You are logged in as {{ app.user.userIdentifier }}, <a
                                                    href=\"{{ path('app_logout') }}\">Déconnecter</a>
                                        </div>
                                    {% endif %}

                                    <div class=\"form-group mb-3\">
                                        <label for=\"username\">Email</label>
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\"
                                               class=\"form-control\" autocomplete=\"mail\" required autofocus>
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label for=\"password\">Mot de passe</label>
                                        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                               autocomplete=\"current-password\" required>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"{{ csrf_token('authenticate') }}\"
                                    >

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"form-control btn btn-primary rounded submit px-3\">
                                            Se connecter
                                        </button>
                                    </div>
                                    <div class=\"form-group d-md-flex\">
                                        <div class=\"w-50 text-left\">
                                            <label class=\"checkbox-wrap checkbox-primary mb-0\">Se souvenir de moi
                                                <input type=\"checkbox\" checked>
                                                <span class=\"checkmark\"></span>
                                            </label>
                                        </div>

                                    </div>
                                </form>
                                <p class=\"text-center\">Pas encore de compte ? <a data-toggle=\"tab\" href=\"{{ path('app_user_inscription') }}\">Créer un compte</a></p>
                                <a data-toggle=\"tab\" href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
{% endblock %}

</body>


</html>", "login/login.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\login\\login.html.twig");
    }
}
