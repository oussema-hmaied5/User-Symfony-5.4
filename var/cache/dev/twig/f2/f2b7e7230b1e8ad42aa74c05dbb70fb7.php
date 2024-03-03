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

/* admin_back/user/index.html.twig */
class __TwigTemplate_9d86cafc7b3165d4f29ed180b7a7b13e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_back/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_back/user/index.html.twig"));

        $this->parent = $this->loadTemplate("admin_back/baseback.html.twig", "admin_back/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["method" => "GET"]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "q", [], "any", false, false, false, 8), 'row');
        echo "


    ";
        // line 12
        echo "    <button type=\"submit\">Rechercher</button>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "

    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title fw-semibold mb-4\">Liste des utilisateurs</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_user_new");
        echo "\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Sexe</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                            <tr>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 40
                echo "                                        ";
                if (($context["role"] != "ROLE_USER")) {
                    // line 41
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "
                                        ";
                }
                // line 43
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                </td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                                        <i class=\"ti ti-pencil\"></i> Modifier
                                    </a>

                                    ";
            // line 53
            echo twig_include($this->env, $context, "admin_back/user/_delete_form.html.twig");
            echo "
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>


                </div>
            </div>
        </div>
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
        return "admin_back/user/index.html.twig";
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
        return array (  227 => 59,  220 => 57,  203 => 53,  196 => 49,  191 => 47,  187 => 46,  183 => 45,  180 => 44,  174 => 43,  168 => 41,  165 => 40,  161 => 39,  156 => 37,  152 => 36,  149 => 35,  131 => 34,  114 => 20,  104 => 13,  101 => 12,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_back/baseback.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}

    {{ form_start(form, {'method': 'GET'}) }}
    {{ form_row(form.q) }}


    {# ... Ajoutez des champs selon vos besoins #}
    <button type=\"submit\">Rechercher</button>
    {{ form_end(form) }}

    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title fw-semibold mb-4\">Liste des utilisateurs</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('back_user_new') }}\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Sexe</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% for role in user.roles %}
                                        {% if role != 'ROLE_USER' %}
                                            {{ role }}
                                        {% endif %}
                                    {% endfor %}
                                </td>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.prenom }}</td>
                                <td>{{ user.sexe }}</td>
                                <td>
                                    <a href=\"{{ path('back_user_edit', {'id': user.id}) }}\" class=\"btn btn-success\">
                                        <i class=\"ti ti-pencil\"></i> Modifier
                                    </a>

                                    {{ include('admin_back/user/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% else %}

                        {% endfor %}
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin_back/user/index.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\admin_back\\user\\index.html.twig");
    }
}
