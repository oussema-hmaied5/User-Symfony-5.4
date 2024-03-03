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

/* base.html.twig */
class __TwigTemplate_b051e9aefde8bd775eeb54ee40c7c59d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "</head>
<body>
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "
<div id=\"fh5co-about\" data-section=\"about\">
    <div class=\"fh5co-2col fh5co-bg to-animate-2\" style=\"background-image: url(images/res_img_1.png)\"></div>
    <div class=\"fh5co-2col fh5co-text\">
        <h2 class=\"heading to-animate\">À propos de nous </h2>
        <p class=\"to-animate\"><span class=\"firstcharacter\">N</span>otre site de colocation, CoLocStudy, est une
            plateforme innovante conçue pour répondre aux besoins spécifiques des étudiants en matière de logement,
            d'espace de travail et de restauration. En regroupant ces services essentiels en un seul endroit
            convivial et intuitif, nous visons à simplifier la vie étudiante et à offrir une expérience enrichie.
            Notre objectif est de faciliter la recherche de colocation, l'accès à des espaces de travail partagés et
            les choix de restauration, en mettant l'accent sur la personnalisation et la collaboration. Avec
            CoLocStudy, les étudiants peuvent trouver des colocataires compatibles, découvrir des espaces de travail
            inspirants et accéder à une sélection variée de restaurants, le tout dans un environnement conçu pour
            améliorer leur vie quotidienne.</p>

    </div>
</div>

<div id=\"fh5co-sayings\">
    <div class=\"container\">
        <div class=\"row to-animate\">

            <div class=\"flexslider\">
                <ul class=\"slides\">

                    <li>
                        <blockquote>
                            <p>&ldquo;“Je voudrais vivre pour étudier, non pas étudier pour vivre.”&rdquo;</p>
                            <p class=\"quote-author\">&mdash; Francis Bacon</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo; L’éducation est l’arme la plus puissante que vous puissiez utiliser pour
                                changer le monde. &rdquo;</p>
                            <p class=\"quote-author\">&mdash; Nelson Mandela</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo;L'étudiant n'est pas un conteneur que vous devez remplir mais un flambeau que
                                vous devez allumer.&rdquo;</p>
                            <p class=\"quote-author\">&mdash; Albert Einstein</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo;L’éducation est un progrès social... L’éducation est non pas une préparation à
                                la vie, l’éducation est la vie même..&rdquo;</p>
                            <p class=\"quote-author\">&mdash; John Dewey</p>
                        </blockquote>
                    </li>


                </ul>
            </div>

        </div>
    </div>
</div>

<div id=\"fh5co-type\" style=\"background-image: url(images/aa.jpg);\" data-stellar-background-ratio=\"0.5\">
    <div class=\"fh5co-overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>Offre tout inclus</h3>
                    <p>Eau, énergie, wifi, ménage, maintenance... tout est compris !</p>
                </div>
            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>100% digital</h3>
                    <p>Sélectionnez et réservez votre espace en ligne. Et si vous avez la moindre question, notre
                        équipe se tient à votre disposition !</p>
                </div>
            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>Design & Confort</h3>
                    <p>Nos logements sont soigneusement aménagés et équipés ! Vous vous sentirez chez vous dès le
                        premier jour.</p>
                </div>

            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>À vos côtés</h3>
                    <p>Un résidence manager vous accompagne tout au long de votre séjour pour répondre au mieux à
                        vos attentes et envies.</p>
                </div>

            </div>
        </div>
    </div>
    <div id=\"fh5co-events\" data-section=\"events\" style=\"background-image: url(images/slide_2.jpg);\"
         data-stellar-background-ratio=\"0.5\">
        <div class=\"fh5co-overlay\"></div>
        <div class=\"container\">
            <div class=\"row text-center fh5co-heading row-padded\">
                <div class=\"col-md-8 col-md-offset-2 to-animate\">
                    <h2 class=\"heading\">Nos services</h2>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Restaurants</h3>
                        <p>Des restaurants authentiques,modernes et conviviaux aux identités uniques </p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Coworking</h3>
                        <p>Des environnements de travail de qualité, adaptés à tous vos besoins.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Logements</h3>
                        <p>Des logements soigneusement meublés avec services, disponibles à partir d'un mois.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 230
        $this->displayBlock('javascripts', $context, $blocks);
        // line 261
        echo "</div>

<div id=\"fh5co-footer\" style=\"background-color: #14147c;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Réseaux Sociaux</h3>
                <ul class=\"fh5co-social\">
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-facebook\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-twitter\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-instagram\" style=\"color: #fff;\"></i></a>
                    </li>
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
                <p class=\"text-center to-animate\"><a href=\"#\" class=\"js-gotop\" style=\"color: #fff;\">Revenir en haut
                        de
                        page</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 300
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 301
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 302
        echo "

<!-- Chemins d'accès aux fichiers CSS et JS -->
";
        // line 305
        $context["css_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/");
        // line 306
        $context["js_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/");
        // line 307
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

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "    <div id=\"fh5co-container\">
        <div id=\"fh5co-home\" class=\"js-fullheight\" data-section=\"home\">
            <div class=\"flexslider\">
                <div class=\"fh5co-overlay\"></div>
                <div class=\"fh5co-text\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <h1 class=\"to-animate\">ColocStudy</h1>
                            <h2 class=\"to-animate\">Votre vie étudiante, notre priorité</h2>
                        </div>
                    </div>
                </div>
                <ul class=\"slides\">
                    <li style=\"background-image: url('";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_1.jpg"), "html", null, true);
        echo "');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                    <li style=\"background-image: url('";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_2.jpg"), "html", null, true);
        echo "');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                    <li style=\"background-image: url('";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_3.jpg"), "html", null, true);
        echo "');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                </ul>
            </div>
        </div>

        <div class=\"js-sticky\">
            <div class=\"fh5co-main-nav\">
                <div class=\"container-fluid\">
                    <div class=\"fh5co-menu-1\">
                        <a href=\"#\" data-nav-section=\"home\">Home</a>
                        <a href=\"#\" data-nav-section=\"about\">About</a>
                        <a href=\"#\" data-nav-section=\"features\">Activités</a>
                        <a href=\"#\" data-nav-section=\"features\">Offre</a>
                    </div>
                    <div class=\"fh5co-logo\">
                        <a href=\"#\">ColocStudy</a>
                    </div>
                    <div class=\"fh5co-menu-2\">
                        <a href=\"#\" data-nav-section=\"menu\">Logements</a>
                        <a href=\"#\" data-nav-section=\"events\">Restaurants</a>
                        <a href=\"#\" data-nav-section=\"reservation\">Coworking </a>
                        ";
        // line 87
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 88
            echo "                             <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profil");
            echo "\">Profile</a>
                        ";
        } else {
            // line 90
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 92
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- Continue with the rest of your HTML content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Easing -->
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap DateTimePicker -->
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Waypoints -->
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Stellar Parallax -->
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Flexslider -->
        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(function () {
                \$('#date').datetimepicker();
            });
        </script>
        <!-- Main JS -->
        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- Modernizr JS -->
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
    <script src=\"";
        // line 258
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
        return "base.html.twig";
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
        return array (  500 => 258,  494 => 255,  489 => 253,  479 => 246,  473 => 243,  468 => 241,  463 => 239,  459 => 238,  454 => 236,  449 => 234,  444 => 232,  441 => 231,  431 => 230,  415 => 92,  409 => 90,  403 => 88,  401 => 87,  376 => 65,  371 => 63,  366 => 61,  351 => 48,  341 => 47,  329 => 43,  325 => 42,  320 => 40,  315 => 38,  310 => 36,  305 => 34,  300 => 32,  297 => 31,  287 => 30,  274 => 307,  272 => 306,  270 => 305,  265 => 302,  263 => 301,  261 => 300,  220 => 261,  218 => 230,  85 => 99,  83 => 47,  79 => 45,  77 => 30,  46 => 1,);
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
</head>
<body>
{% block body %}
    <div id=\"fh5co-container\">
        <div id=\"fh5co-home\" class=\"js-fullheight\" data-section=\"home\">
            <div class=\"flexslider\">
                <div class=\"fh5co-overlay\"></div>
                <div class=\"fh5co-text\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <h1 class=\"to-animate\">ColocStudy</h1>
                            <h2 class=\"to-animate\">Votre vie étudiante, notre priorité</h2>
                        </div>
                    </div>
                </div>
                <ul class=\"slides\">
                    <li style=\"background-image: url('{{ asset('images/slide_1.jpg') }}');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                    <li style=\"background-image: url('{{ asset('images/slide_2.jpg') }}');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                    <li style=\"background-image: url('{{ asset('images/slide_3.jpg') }}');\"
                        data-stellar-background-ratio=\"0.5\"></li>
                </ul>
            </div>
        </div>

        <div class=\"js-sticky\">
            <div class=\"fh5co-main-nav\">
                <div class=\"container-fluid\">
                    <div class=\"fh5co-menu-1\">
                        <a href=\"#\" data-nav-section=\"home\">Home</a>
                        <a href=\"#\" data-nav-section=\"about\">About</a>
                        <a href=\"#\" data-nav-section=\"features\">Activités</a>
                        <a href=\"#\" data-nav-section=\"features\">Offre</a>
                    </div>
                    <div class=\"fh5co-logo\">
                        <a href=\"#\">ColocStudy</a>
                    </div>
                    <div class=\"fh5co-menu-2\">
                        <a href=\"#\" data-nav-section=\"menu\">Logements</a>
                        <a href=\"#\" data-nav-section=\"events\">Restaurants</a>
                        <a href=\"#\" data-nav-section=\"reservation\">Coworking </a>
                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') or is_granted('IS_AUTHENTICATED_FULLY') %}
                             <a href=\"{{ path('user_profil') }}\">Profile</a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\">Connexion</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <!-- Continue with the rest of your HTML content -->
    </div>
{% endblock %}

<div id=\"fh5co-about\" data-section=\"about\">
    <div class=\"fh5co-2col fh5co-bg to-animate-2\" style=\"background-image: url(images/res_img_1.png)\"></div>
    <div class=\"fh5co-2col fh5co-text\">
        <h2 class=\"heading to-animate\">À propos de nous </h2>
        <p class=\"to-animate\"><span class=\"firstcharacter\">N</span>otre site de colocation, CoLocStudy, est une
            plateforme innovante conçue pour répondre aux besoins spécifiques des étudiants en matière de logement,
            d'espace de travail et de restauration. En regroupant ces services essentiels en un seul endroit
            convivial et intuitif, nous visons à simplifier la vie étudiante et à offrir une expérience enrichie.
            Notre objectif est de faciliter la recherche de colocation, l'accès à des espaces de travail partagés et
            les choix de restauration, en mettant l'accent sur la personnalisation et la collaboration. Avec
            CoLocStudy, les étudiants peuvent trouver des colocataires compatibles, découvrir des espaces de travail
            inspirants et accéder à une sélection variée de restaurants, le tout dans un environnement conçu pour
            améliorer leur vie quotidienne.</p>

    </div>
</div>

<div id=\"fh5co-sayings\">
    <div class=\"container\">
        <div class=\"row to-animate\">

            <div class=\"flexslider\">
                <ul class=\"slides\">

                    <li>
                        <blockquote>
                            <p>&ldquo;“Je voudrais vivre pour étudier, non pas étudier pour vivre.”&rdquo;</p>
                            <p class=\"quote-author\">&mdash; Francis Bacon</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo; L’éducation est l’arme la plus puissante que vous puissiez utiliser pour
                                changer le monde. &rdquo;</p>
                            <p class=\"quote-author\">&mdash; Nelson Mandela</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo;L'étudiant n'est pas un conteneur que vous devez remplir mais un flambeau que
                                vous devez allumer.&rdquo;</p>
                            <p class=\"quote-author\">&mdash; Albert Einstein</p>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>&ldquo;L’éducation est un progrès social... L’éducation est non pas une préparation à
                                la vie, l’éducation est la vie même..&rdquo;</p>
                            <p class=\"quote-author\">&mdash; John Dewey</p>
                        </blockquote>
                    </li>


                </ul>
            </div>

        </div>
    </div>
</div>

<div id=\"fh5co-type\" style=\"background-image: url(images/aa.jpg);\" data-stellar-background-ratio=\"0.5\">
    <div class=\"fh5co-overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>Offre tout inclus</h3>
                    <p>Eau, énergie, wifi, ménage, maintenance... tout est compris !</p>
                </div>
            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>100% digital</h3>
                    <p>Sélectionnez et réservez votre espace en ligne. Et si vous avez la moindre question, notre
                        équipe se tient à votre disposition !</p>
                </div>
            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>Design & Confort</h3>
                    <p>Nos logements sont soigneusement aménagés et équipés ! Vous vous sentirez chez vous dès le
                        premier jour.</p>
                </div>

            </div>
            <div class=\"col-md-3 to-animate\">
                <div class=\"fh5co-type\">
                    <h3>À vos côtés</h3>
                    <p>Un résidence manager vous accompagne tout au long de votre séjour pour répondre au mieux à
                        vos attentes et envies.</p>
                </div>

            </div>
        </div>
    </div>
    <div id=\"fh5co-events\" data-section=\"events\" style=\"background-image: url(images/slide_2.jpg);\"
         data-stellar-background-ratio=\"0.5\">
        <div class=\"fh5co-overlay\"></div>
        <div class=\"container\">
            <div class=\"row text-center fh5co-heading row-padded\">
                <div class=\"col-md-8 col-md-offset-2 to-animate\">
                    <h2 class=\"heading\">Nos services</h2>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Restaurants</h3>
                        <p>Des restaurants authentiques,modernes et conviviaux aux identités uniques </p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Coworking</h3>
                        <p>Des environnements de travail de qualité, adaptés à tous vos besoins.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"fh5co-event to-animate-2\">
                        <h3>Logements</h3>
                        <p>Des logements soigneusement meublés avec services, disponibles à partir d'un mois.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
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

<div id=\"fh5co-footer\" style=\"background-color: #14147c;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\" style=\"color: #fff;\">
                <h3>Réseaux Sociaux</h3>
                <ul class=\"fh5co-social\">
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-facebook\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-twitter\" style=\"color: #fff;\"></i></a></li>
                    <li class=\"to-animate-2\"><a href=\"#\"><i class=\"icon-instagram\" style=\"color: #fff;\"></i></a>
                    </li>
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
                <p class=\"text-center to-animate\"><a href=\"#\" class=\"js-gotop\" style=\"color: #fff;\">Revenir en haut
                        de
                        page</a></p>
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


</body>
</html>", "base.html.twig", "C:\\Users\\oussa\\Desktop\\colocstudy-coworking\\templates\\base.html.twig");
    }
}
