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

/* tache/index.html.twig */
class __TwigTemplate_6ea31391757ec9b36e51ac027043022d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'tile' => [$this, 'block_tile'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tache/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('tile', $context, $blocks);
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <!-- Bulma Version 0.9.0-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/admin.css\">
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_tile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tile"));

        echo "<title>Taches</title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h3 class=\"subtitle\">
                               ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " 
                            </h3>
                            <h1 class=\"title\">
                                Taches
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>      
                <br/>
                <div class=\"columns\">
                    <!--  A faire  -->
                   <div class=\"column is-one-third\">
                    <article class=\"message is-link\">
                                <div class=\"message-header\">
                                    <p>A faire</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                    <div class=\"board-item-content has-text-centered\"><span>Les taches à faire</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>
                    <!--ENDAFAIRE-->
                    <!--ENCOURS-->
                    <div class=\"column\">
                        <article class=\"message is-warning\">
                                <div class=\"message-header\">
                                    <p>En Cours</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                    <div class=\"board-item-content has-text-centered\"><span>Les taches en cours</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>    
                    <!-- EndEnCours -->
                    <!--  TERMINE  -->
                   <div class=\"column\">
                    <article class=\"message is-success\">
                                <div class=\"message-header text\">
                                    <p>Terminé</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                        <div class=\"board-item-content has-text-centered\"><span>Les taches accomplies</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>
                    <!--EndTerminé-->
                    
                </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tache/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 20,  123 => 16,  113 => 15,  94 => 7,  78 => 8,  76 => 7,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block tile %}<title>Taches</title> {% endblock %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <!-- Bulma Version 0.9.0-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/admin.css\">
</head>
{% endblock %}
{% block body %}
                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h3 class=\"subtitle\">
                               {{ \"now\"|date(\"d/m/Y\") }} 
                            </h3>
                            <h1 class=\"title\">
                                Taches
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>      
                <br/>
                <div class=\"columns\">
                    <!--  A faire  -->
                   <div class=\"column is-one-third\">
                    <article class=\"message is-link\">
                                <div class=\"message-header\">
                                    <p>A faire</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                    <div class=\"board-item-content has-text-centered\"><span>Les taches à faire</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-success\">Commencer</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>
                    <!--ENDAFAIRE-->
                    <!--ENCOURS-->
                    <div class=\"column\">
                        <article class=\"message is-warning\">
                                <div class=\"message-header\">
                                    <p>En Cours</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                    <div class=\"board-item-content has-text-centered\"><span>Les taches en cours</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                    <td class=\"is-vcentered\"><a id=\"\" class=\"level-right button is-small is-info\">Terminer</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>    
                    <!-- EndEnCours -->
                    <!--  TERMINE  -->
                   <div class=\"column\">
                    <article class=\"message is-success\">
                                <div class=\"message-header text\">
                                    <p>Terminé</p>
                                </div>
                                <div class=\"message-body\">
                                    <div class=\"board-item\">
                                        <div class=\"board-item-content has-text-centered\"><span>Les taches accomplies</span></div>
                                    </div>
                                    <br/>
                                   <div class=\"card\">
                                                <div class=\"card-table\">
                                                    <div class=\"content\">
                                                        <table class=\"table is-fullwidth is-striped\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>prepation su sol dopwejdpo dojwped opjdw  pjodqwo wn eo </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>mise en place des potaux</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cloulage</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                   </div>
                                </div>
                            </article>
                    </div>
                    <!--EndTerminé-->
                    
                </div>
{% endblock %}     
", "tache/index.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\tache\\index.html.twig");
    }
}
