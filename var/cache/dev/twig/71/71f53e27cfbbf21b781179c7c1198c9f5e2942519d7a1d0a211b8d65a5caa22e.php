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

/* admin/annonce/show.html.twig */
class __TwigTemplate_cc8327c6543218c4f44f05c17ff95fe38596d417bf0cba5281a1cd0015edf87a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/annonce/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Annonce";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 style=\"font-family: 'Bebas Neue';  font-size: 66px; color:white; text-shadow: 1px 1px 2px black;\"><center>Annonce &#xA0;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "<center></h1>

    <table class=\"table table-striped text-center\">
        <tbody class=\"btn-light\">
            ";
        // line 14
        echo "            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annoucer</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 20, $this->source); })()), "annoucer", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), "d-m-y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td style=\"background-color: white!important;\"><img width=\"200\" height=\"200\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 32, $this->source); })())), "html", null, true);
        echo "\" alt=\"Logo de l'entreprise\" /></td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group btn-block\" role=\"group\" aria-label=\"Basic example\">
        <a class=\"btn btn-dark\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonce_index");
        echo "\"><i class=\"fas fa-undo\"></i></a>
        <a class=\"btn btn-warning\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
    </div>

    ";
        // line 45
        echo "    <br>
    ";
        // line 46
        echo twig_include($this->env, $context, "admin/annonce/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/annonce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  147 => 45,  141 => 39,  137 => 38,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  96 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Annonce{% endblock %}

{% block body %}
    <h1 style=\"font-family: 'Bebas Neue';  font-size: 66px; color:white; text-shadow: 1px 1px 2px black;\"><center>Annonce &#xA0;{{annonce.id}}<center></h1>

    <table class=\"table table-striped text-center\">
        <tbody class=\"btn-light\">
            {# <tr>
                <th>Id</th>
                <td>{{ annonce.id }}</td>
            </tr> #}
            <tr>
                <th>Title</th>
                <td>{{ annonce.title }}</td>
            </tr>
            <tr>
                <th>Annoucer</th>
                <td>{{ annonce.annoucer }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ annonce.description }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ annonce.date|date('d-m-y') }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td style=\"background-color: white!important;\"><img width=\"200\" height=\"200\" src=\"{{ vich_uploader_asset(annonce) }}\" alt=\"Logo de l'entreprise\" /></td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group btn-block\" role=\"group\" aria-label=\"Basic example\">
        <a class=\"btn btn-dark\" href=\"{{ path('admin_annonce_index') }}\"><i class=\"fas fa-undo\"></i></a>
        <a class=\"btn btn-warning\" href=\"{{ path('admin_annonce_edit', {'id': annonce.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
    </div>

    {# <a class=\"btn btn-dark\" href=\"{{ path('annonce_index') }}\">back to list</a>

    <a class=\"btn btn-warning\" href=\"{{ path('annonce_edit', {'id': annonce.id}) }}\">edit</a> #}
    <br>
    {{ include('admin/annonce/_delete_form.html.twig') }}
{% endblock %}
", "admin/annonce/show.html.twig", "C:\\wamp64\\www\\FormationPLM\\SF\\gestannonces\\templates\\admin\\annonce\\show.html.twig");
    }
}
