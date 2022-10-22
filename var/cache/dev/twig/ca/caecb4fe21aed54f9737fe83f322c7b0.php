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

/* finance/depences.html.twig */
class __TwigTemplate_39bdfedddaa5dea6e87645fda2fe4751 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/depences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/depences.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "finance/depences.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 8
        $this->displayBlock('tile', $context, $blocks);
        // line 9
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

    // line 8
    public function block_tile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tile"));

        echo "<title>Admin Dashboard</title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            <!--BODY-->
                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h3 class=\"subtitle\">
                               ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " 
                            </h3>
                            <h1 class=\"title\">
                                Depences
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>
                <section class=\"info-tiles\">
                    <div class=\"tile is-ancestor has-text-centered\">
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">439 000</p>
                                <p class=\"subtitle\">Budget Initial</p>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">150000</p>
                                <p class=\"subtitle\">Budget Réel</p>
                            </article>
                        </div>
                    </div>
                </section>
                 <section class=\"info-tiles\">
                    <div class=\" columns tile is-ancestor has-text-centered\">
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                            <progress class=\"progress is-info\" value=\"150000\" max=\"439000\"></progress>
                            </article>
                        </div>
                        <div class=\"tile is-parent column is-one-fifth\">
                        <article class=\"tile is-child box\">
                        <p class=\"title\">34%</p>
                        </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <!--CHOSES-->
                    <div class=\"column\">
                    <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Depences
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped is-bordered is-hoverable\">
                                            <thead>
                                              <tr>
                                                <th><abbr title=\"Num\">Num</abbr></th>
                                                <th><abbr title=\"Type\">Type</abbr></th>
                                                <th><abbr title=\"Libelle\">Libelle</abbr></th>
                                                <th><abbr title=\"Prix\">Prix</abbr></th>
                                                <th><abbr title=\"Date\">Date</abbr></th>
                                              </tr>
                                            </thead> 
                                          <tbody>
                                            <tr>
                                              <td>12345</td>
                                              <td>Produit</td>
                                              <td>Gravier</td>
                                              <td>150 000</td>
                                              <td>10/10/2021</td>
                                            </tr>
                                            <tr>
                                              <td>14365</td>
                                              <td>Main d'oeuvre</td>
                                              <td>Peintre pour peinture exterieure</td>
                                              <td>75 000</td>
                                              <td>10/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>14465</td>
                                              <td>Main d'oeuvre</td>
                                              <td>Electricien</td>
                                              <td>50 000</td>
                                              <td>14/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>15001</td>
                                              <td>Produit</td>
                                              <td>Briques</td>
                                              <td>94 000</td>
                                              <td>14/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>15523</td>
                                              <td>Produit</td>
                                              <td>Fer</td>
                                              <td>100 000</td>
                                              <td>20/12/2021</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                              <div class=\"has-text-centered\">
                              <br/>
                               <nav class=\"pagination is-small\" role=\"navigation\" aria-label=\"pagination\">
                                 <a class=\"pagination-previous\">Previous</a>
                                 <ul class=\"pagination-list\">
                                   <li><a class=\"pagination-link is-current\" aria-label=\"Page 1\" aria-current=\"page\">1</a></li>
                                   <li><a class=\"pagination-link\" aria-label=\"Goto page 2\">2</a></li>
                                   <li><a class=\"pagination-link\" aria-label=\"Goto page 3\">3</a></li>
                                 </ul>
                                 <a class=\"pagination-next\">Next page</a>
                               </nav>
                             </div>  
                            </footer>
                        </div>
                    </div>
                    <!--ENDCHOSES-->
                </div>
            <!--ENDBODY-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "finance/depences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 22,  123 => 17,  113 => 16,  94 => 8,  78 => 9,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block tile %}<title>Admin Dashboard</title> {% endblock %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <!-- Bulma Version 0.9.0-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/admin.css\">
</head>
{% endblock %}
{% block body %}
            <!--BODY-->
                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h3 class=\"subtitle\">
                               {{ \"now\"|date(\"d/m/Y\") }} 
                            </h3>
                            <h1 class=\"title\">
                                Depences
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>
                <section class=\"info-tiles\">
                    <div class=\"tile is-ancestor has-text-centered\">
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">439 000</p>
                                <p class=\"subtitle\">Budget Initial</p>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">150000</p>
                                <p class=\"subtitle\">Budget Réel</p>
                            </article>
                        </div>
                    </div>
                </section>
                 <section class=\"info-tiles\">
                    <div class=\" columns tile is-ancestor has-text-centered\">
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                            <progress class=\"progress is-info\" value=\"150000\" max=\"439000\"></progress>
                            </article>
                        </div>
                        <div class=\"tile is-parent column is-one-fifth\">
                        <article class=\"tile is-child box\">
                        <p class=\"title\">34%</p>
                        </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <!--CHOSES-->
                    <div class=\"column\">
                    <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Depences
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped is-bordered is-hoverable\">
                                            <thead>
                                              <tr>
                                                <th><abbr title=\"Num\">Num</abbr></th>
                                                <th><abbr title=\"Type\">Type</abbr></th>
                                                <th><abbr title=\"Libelle\">Libelle</abbr></th>
                                                <th><abbr title=\"Prix\">Prix</abbr></th>
                                                <th><abbr title=\"Date\">Date</abbr></th>
                                              </tr>
                                            </thead> 
                                          <tbody>
                                            <tr>
                                              <td>12345</td>
                                              <td>Produit</td>
                                              <td>Gravier</td>
                                              <td>150 000</td>
                                              <td>10/10/2021</td>
                                            </tr>
                                            <tr>
                                              <td>14365</td>
                                              <td>Main d'oeuvre</td>
                                              <td>Peintre pour peinture exterieure</td>
                                              <td>75 000</td>
                                              <td>10/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>14465</td>
                                              <td>Main d'oeuvre</td>
                                              <td>Electricien</td>
                                              <td>50 000</td>
                                              <td>14/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>15001</td>
                                              <td>Produit</td>
                                              <td>Briques</td>
                                              <td>94 000</td>
                                              <td>14/12/2021</td>
                                            </tr>
                                            <tr>
                                              <td>15523</td>
                                              <td>Produit</td>
                                              <td>Fer</td>
                                              <td>100 000</td>
                                              <td>20/12/2021</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                              <div class=\"has-text-centered\">
                              <br/>
                               <nav class=\"pagination is-small\" role=\"navigation\" aria-label=\"pagination\">
                                 <a class=\"pagination-previous\">Previous</a>
                                 <ul class=\"pagination-list\">
                                   <li><a class=\"pagination-link is-current\" aria-label=\"Page 1\" aria-current=\"page\">1</a></li>
                                   <li><a class=\"pagination-link\" aria-label=\"Goto page 2\">2</a></li>
                                   <li><a class=\"pagination-link\" aria-label=\"Goto page 3\">3</a></li>
                                 </ul>
                                 <a class=\"pagination-next\">Next page</a>
                               </nav>
                             </div>  
                            </footer>
                        </div>
                    </div>
                    <!--ENDCHOSES-->
                </div>
            <!--ENDBODY-->
{% endblock %}
", "finance/depences.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\finance\\depences.html.twig");
    }
}
