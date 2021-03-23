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
class __TwigTemplate_9e66a2cb9a44a9f3f09e73abb5f816bfbb07cb5c88bf071229bc99a909cd1af7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'carousel' => [$this, 'block_carousel'],
            'flash' => [$this, 'block_flash'],
            'body' => [$this, 'block_body'],
            'body2' => [$this, 'block_body2'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "        </head>
        ";
        // line 42
        echo "        <body style='background: center/100% url(\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/annonces/bg.png"), "html", null, true);
        echo "\");'>
        <header>
            ";
        // line 61
        echo "
                    ";
        // line 66
        echo "



            <nav id=\"main-nav\" class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_index");
        echo "\"><i class=\"fas fa-search-location\"></i> GestAnnonces</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

                    <ul class=\"navbar-nav mr-auto\">
                        ";
        // line 79
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 80
            echo "                        <li class=\"nav-item ";
            if ((isset($context["mainNavHome"]) || array_key_exists("mainNavHome", $context))) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_index");
            echo "\"><i class=\"fas fa-home\"></i> Home </a>
                        </li>
                        ";
        }
        // line 84
        echo "
                        ";
        // line 90
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 91
            echo "                            <li class=\"nav-item ";
            if ((isset($context["mainNavMember"]) || array_key_exists("mainNavMember", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_annonce_index");
            echo "\"><i class=\"fas fa-bullhorn\"></i>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo " Visuel ";
            }
            echo " Annonces</a>
                            </li>
                        ";
        }
        // line 95
        echo "

                        ";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 98
            echo "                            <li class=\"nav-item ";
            if ((isset($context["mainNavAdmin"]) || array_key_exists("mainNavAdmin", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            echo "\"><i class=\"fas fa-user-cog\"></i> Gérer Users</a>
                            </li>
                        ";
        }
        // line 102
        echo "
                        ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
            echo "                            <li class=\"nav-item ";
            if ((isset($context["mainNavAdmin"]) || array_key_exists("mainNavAdmin", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonce_index");
            echo "\"><i class=\"fas fa-pencil-alt\"></i> Gérer Annonces</a>
                            </li>
                        ";
        }
        // line 108
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "                            <li class=\"nav-item ";
            if ((isset($context["mainNavAdmin"]) || array_key_exists("mainNavAdmin", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
            echo "\"><i class=\"fas fa-boxes\"></i> Gérer Categories</a>
                            </li>
                        ";
        }
        // line 113
        echo "                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 116
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
                            </li>
                        ";
        } else {
            // line 120
            echo "                            <li class=\"nav-item ";
            if ((isset($context["mainNavLogin"]) || array_key_exists("mainNavLogin", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
                            </li>
                            <li class=\"nav-item ";
            // line 123
            if ((isset($context["mainNavRegistration"]) || array_key_exists("mainNavRegistration", $context))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration_register");
            echo "\"><i class=\"fas fa-user-plus\"></i> Inscription</a>
                            </li>
                        ";
        }
        // line 127
        echo "                    </ul>
                </div>
            </nav>

                ";
        // line 133
        echo "        </header>

        ";
        // line 135
        $this->displayBlock('carousel', $context, $blocks);
        // line 136
        echo "
        <div class=\"container\" style=\"padding-top:66px;\">

        ";
        // line 139
        $this->displayBlock('flash', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "        
        </div>

        ";
        // line 166
        $this->displayBlock('body2', $context, $blocks);
        // line 167
        echo "
        ";
        // line 168
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!-- CSS only -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">        <!-- Favicons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\" integrity=\"sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==\" crossorigin=\"anonymous\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
        <link rel=\"apple-touch-icon\" href=\"/docs/4.5/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
        <link rel=\"manifest\" href=\"/docs/4.5/assets/img/favicons/manifest.json\">
        <link rel=\"mask-icon\" href=\"/docs/4.5/assets/img/favicons/safari-pinned-tab.svg\" color=\"#563d7c\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon.ico\">
        <meta name=\"msapplication-config\" content=\"/docs/4.5/assets/img/favicons/browserconfig.xml\">
        <meta name=\"theme-color\" content=\"#563d7c\">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        <link href=\"css/style.css\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        // line 140
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "session", [], "any", false, false, false, 140), "flashbag", [], "any", false, false, false, 140), "get", [0 => "success"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 141
            echo "                <div class=\"container alert alert-success\" role=\"alert\">
                    ";
            // line 142
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "session", [], "any", false, false, false, 145), "flashbag", [], "any", false, false, false, 145), "get", [0 => "info"], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 146
            echo "                <div class=\"container alert alert-info\" role=\"alert\">
                    ";
            // line 147
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "session", [], "any", false, false, false, 150), "flashbag", [], "any", false, false, false, 150), "get", [0 => "warning"], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 151
            echo "                <div class=\"container alert alert-warning\" role=\"alert\">
                    ";
            // line 152
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "session", [], "any", false, false, false, 155), "flashbag", [], "any", false, false, false, 155), "get", [0 => "danger"], "method", false, false, false, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 156
            echo "                <div class=\"container alert alert-danger\" role=\"alert\">
                    ";
            // line 157
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 169
        echo "        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\" integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 169,  483 => 168,  465 => 166,  447 => 162,  437 => 160,  428 => 157,  425 => 156,  420 => 155,  411 => 152,  408 => 151,  403 => 150,  394 => 147,  391 => 146,  386 => 145,  377 => 142,  374 => 141,  369 => 140,  359 => 139,  341 => 135,  299 => 7,  289 => 6,  270 => 5,  258 => 174,  256 => 168,  253 => 167,  251 => 166,  246 => 163,  244 => 162,  241 => 161,  239 => 139,  234 => 136,  232 => 135,  228 => 133,  222 => 127,  216 => 124,  210 => 123,  205 => 121,  198 => 120,  192 => 117,  189 => 116,  187 => 115,  183 => 113,  177 => 110,  170 => 109,  167 => 108,  161 => 105,  154 => 104,  152 => 103,  149 => 102,  143 => 99,  136 => 98,  134 => 97,  130 => 95,  120 => 92,  113 => 91,  110 => 90,  107 => 84,  101 => 81,  94 => 80,  92 => 79,  81 => 71,  74 => 66,  71 => 61,  65 => 42,  62 => 40,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <!-- CSS only -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">        <!-- Favicons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\" integrity=\"sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==\" crossorigin=\"anonymous\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
        <link rel=\"apple-touch-icon\" href=\"/docs/4.5/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
        <link rel=\"manifest\" href=\"/docs/4.5/assets/img/favicons/manifest.json\">
        <link rel=\"mask-icon\" href=\"/docs/4.5/assets/img/favicons/safari-pinned-tab.svg\" color=\"#563d7c\">
        <link rel=\"icon\" href=\"/docs/4.5/assets/img/favicons/favicon.ico\">
        <meta name=\"msapplication-config\" content=\"/docs/4.5/assets/img/favicons/browserconfig.xml\">
        <meta name=\"theme-color\" content=\"#563d7c\">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        <link href=\"css/style.css\" rel=\"stylesheet\">
        {% endblock %}
        </head>
        {# <body style=\"background-color: black;\"> #}
        <body style='background: center/100% url(\"{{ asset('images/annonces/bg.png') }}\");'>
        <header>
            {# <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"{{ path('afficher_index') }}\"><i class=\"fas fa-search-location\"></i> GestAnnonces</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('afficher_index') }}\"><i class=\"fas fa-home\"></i> Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('annonce_index') }}\"><i class=\"fas fa-bullhorn\"></i> Annonces</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('category_index') }}\"><i class=\"fas fa-boxes\"></i> Categories</a>
                        </li>
                    </ul> #}

                    {# <form class=\"form-inline mt-2 mt-md-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form> #}




            <nav id=\"main-nav\" class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"{{ path('afficher_index') }}\"><i class=\"fas fa-search-location\"></i> GestAnnonces</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

                    <ul class=\"navbar-nav mr-auto\">
                        {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item {% if mainNavHome is defined %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ path('afficher_index') }}\"><i class=\"fas fa-home\"></i> Home </a>
                        </li>
                        {% endif %}

                        {# {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item {% if mainNavMember is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{path('app_member_index')}}\">Espace membre</a>
                            </li>
                        {% endif %} #}
                        {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item {% if mainNavMember is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{ path('member_annonce_index') }}\"><i class=\"fas fa-bullhorn\"></i>{% if is_granted('ROLE_ADMIN') %} Visuel {% endif %} Annonces</a>
                            </li>
                        {% endif %}


                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item {% if mainNavAdmin is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{path('admin_user_index')}}\"><i class=\"fas fa-user-cog\"></i> Gérer Users</a>
                            </li>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item {% if mainNavAdmin is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{ path('admin_annonce_index') }}\"><i class=\"fas fa-pencil-alt\"></i> Gérer Annonces</a>
                            </li>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item {% if mainNavAdmin is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{ path('admin_category_index') }}\"><i class=\"fas fa-boxes\"></i> Gérer Categories</a>
                            </li>
                        {% endif %}
                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('logout')}}\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{path('login')}}\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
                            </li>
                            <li class=\"nav-item {% if mainNavRegistration is defined %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{path('app_registration_register')}}\"><i class=\"fas fa-user-plus\"></i> Inscription</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </nav>

                {# </div>
            </nav> #}
        </header>

        {% block carousel %}{% endblock %}

        <div class=\"container\" style=\"padding-top:66px;\">

        {% block flash %}
            {% for flash_message in app.session.flashbag.get('success') %}
                <div class=\"container alert alert-success\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('info') %}
                <div class=\"container alert alert-info\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('warning') %}
                <div class=\"container alert alert-warning\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('danger') %}
                <div class=\"container alert alert-danger\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
        {% endblock %}

        {% block body %}{% endblock %}
        
        </div>

        {% block body2 %}{% endblock %}

        {% block javascripts %}
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\" integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\FormationPLM\\SF\\gestannonces\\templates\\base.html.twig");
    }
}
