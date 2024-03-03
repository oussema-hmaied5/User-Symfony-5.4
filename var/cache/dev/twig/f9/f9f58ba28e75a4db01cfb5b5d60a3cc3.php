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

/* admin_back/sidebar.html.twig */
class __TwigTemplate_f6355f090be92ae8811f616fb31b779f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"left-sidebar\">
    <!-- Sidebar scroll-->
    <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
            <a href=\"./index.html\" class=\"text-nowrap logo-img\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logos/dd.png"), "html", null, true);
        echo "\" width=\"180\" alt=\"\"/>
            </a>
            <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
                <i class=\"ti ti-x fs-8\"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
            <ul id=\"sidebarnav\">
                <li class=\"nav-small-cap\">
                    <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
                    <span class=\"hide-menu\">Accueil</span>
                </li>
                <li class=\"sidebar-item\">
                    <a class=\"sidebar-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_user_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-layout-dashboard\"></i>
\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"hide-menu\">User</span>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin_back/sidebar.html.twig";
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
        return array (  67 => 20,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"left-sidebar\">
    <!-- Sidebar scroll-->
    <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
            <a href=\"./index.html\" class=\"text-nowrap logo-img\">
                <img src=\"{{ asset('admin/images/logos/dd.png') }}\" width=\"180\" alt=\"\"/>
            </a>
            <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
                <i class=\"ti ti-x fs-8\"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
            <ul id=\"sidebarnav\">
                <li class=\"nav-small-cap\">
                    <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
                    <span class=\"hide-menu\">Accueil</span>
                </li>
                <li class=\"sidebar-item\">
                    <a class=\"sidebar-link\" href=\"{{ path('back_user_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-layout-dashboard\"></i>
\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"hide-menu\">User</span>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
</aside>", "admin_back/sidebar.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\admin_back\\sidebar.html.twig");
    }
}
