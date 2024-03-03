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

/* admin_back/header.html.twig */
class __TwigTemplate_1f8603db23a1209621dfcfdc2e0c632f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/header.html.twig"));

        // line 1
        echo "<header class=\"app-header\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
                <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                    <i class=\"ti ti-menu-2\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                    <i class=\"ti ti-bell-ringing\"></i>
                    <div class=\"notification bg-primary rounded-circle\"></div>
                </a>
            </li>
        </ul>
        <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                <a class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "prenom", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "prenom", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "nom", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "nom", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
            echo "</a>
                ";
        }
        // line 21
        echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/profile/user-1.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                        <div class=\"message-body\">
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profil");
        echo "\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                <i class=\"ti ti-user fs-6\"></i>
                                <p class=\"mb-0 fs-3\">Mon profile</p>
                            </a>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                <i class=\"ti ti-mail fs-6\"></i>
                                <p class=\"mb-0 fs-3\">My Account</p>
                            </a>

                            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Deconnexion</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin_back/header.html.twig";
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
        return array (  96 => 37,  84 => 28,  77 => 24,  72 => 21,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"app-header\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
                <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                    <i class=\"ti ti-menu-2\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                    <i class=\"ti ti-bell-ringing\"></i>
                    <div class=\"notification bg-primary rounded-circle\"></div>
                </a>
            </li>
        </ul>
        <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                {% if app.user %}
                <a class=\"btn btn-primary\">{{ app.user.prenom|default('') }} {{ app.user.nom|default('') }}</a>
                {% endif %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <img src=\"{{ asset('admin/images/profile/user-1.jpg') }}\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                        <div class=\"message-body\">
                            <a href=\"{{ path('user_profil') }}\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                <i class=\"ti ti-user fs-6\"></i>
                                <p class=\"mb-0 fs-3\">Mon profile</p>
                            </a>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                <i class=\"ti ti-mail fs-6\"></i>
                                <p class=\"mb-0 fs-3\">My Account</p>
                            </a>

                            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Deconnexion</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>", "admin_back/header.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\admin_back\\header.html.twig");
    }
}
