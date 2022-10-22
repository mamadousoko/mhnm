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

/* admin_dashboard/index.html.twig */
class __TwigTemplate_b3341d9432b84d02b98358b41ee18f9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/index.html.twig", 1);
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
                                Admin Dashboard
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
                                <p class=\"title\">439k</p>
                                <p class=\"subtitle\">Budget</p>
                                <progress class=\"progress is-link\" value=\"100\" max=\"100\">30%</progress>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">52k</p>
                                <p class=\"subtitle\">Somme Dépensée</p>
                            <progress class=\"progress is-warning\" value=\"100\" max=\"100\">75%</progress>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">125</p>
                                <p class=\"subtitle\">Taches Accomplies</p>
                                <progress class=\"progress is-success\" value=\"100\" max=\"100\">60%</progress>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">5</p>
                                <p class=\"subtitle\">Membres Equipe</p>
                                <progress class=\"progress is-danger\" value=\"100\" max=\"100\">90%</progress>
                            </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <!--CHOSES-->
                    <div class=\"column is-6\">
                    <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Dernieres Taches accomplies
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Fondation du rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Installation des</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/success-green-check-mark-icon.png"), "html", null, true);
        echo "\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">Voir tout</a>
                            </footer>
                        </div>
                    </div>
                    <!--ENDCHOSES-->
                    <!--EQUIPE-->
                    <div class=\"column is-6\">
                        <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Equipe
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/undraw_profile_1.svg"), "html", null, true);
        echo "\"></td>
                                                <td>Soko Mamadou</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                             <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/undraw_profile_2.svg"), "html", null, true);
        echo "\"</td>
                                                <td>Ba Amadou</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                                                                        <tr>
                                                <td width=\"10%\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/undraw_profile_3.svg"), "html", null, true);
        echo "\"</td>
                                                <td>Ndiaye Francois</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">Voir tout</a>
                            </footer>
                        </div>
                    </div>
                    <!--  Modal membre equipe -->
                        <div class=\"modal\">
                            <div class=\"modal-background\"></div>
                            <div class=\"modal-content has-background-white py-5 px-5\">
                                <h3 class=\"title mb-6\"><i class=\"fa fa-user\"></i> <span>Nom Prenom</span></h3>
                                <div class=\"columns\">
                                <div class=\"column is-half\">
                                <p><b>Nom:</b> nom</p>
                                <p><b>Prenom:</b> prenom</p>
                                <p><b>Email:</b> emailUtilisateur@email.com</p>
                                <p><b>Tel:</b> 77 123 45 67</p>
                                </div>
                                <div class=\"column is-half\">
                                <b>Roles: </b>
                                <table>
                                <tr>
                                  <td>Admin</td>
                                <tr>
                                </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Modal membre equipe -->

                    <!--END_EQUIPE-->

                </div>
            <!--ENDBODY-->
            <script>
            //modal
             const voirButton = document.querySelector('#voirMembreEquipe');
             const modalBg = document.querySelector('.modal-background');
             const modal = document.querySelector('.modal');

             voirButton.addEventListener('click',() => { 
             modal.classList.add('is-active');
             })

             modalBg.addEventListener('click',() => { 
             modal.classList.remove('is-active');
             })
            </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 141,  268 => 136,  260 => 131,  230 => 104,  222 => 99,  214 => 94,  206 => 89,  198 => 84,  190 => 79,  130 => 22,  123 => 17,  113 => 16,  94 => 8,  78 => 9,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
                                Admin Dashboard
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
                                <p class=\"title\">439k</p>
                                <p class=\"subtitle\">Budget</p>
                                <progress class=\"progress is-link\" value=\"100\" max=\"100\">30%</progress>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">52k</p>
                                <p class=\"subtitle\">Somme Dépensée</p>
                            <progress class=\"progress is-warning\" value=\"100\" max=\"100\">75%</progress>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">125</p>
                                <p class=\"subtitle\">Taches Accomplies</p>
                                <progress class=\"progress is-success\" value=\"100\" max=\"100\">60%</progress>
                            </article>
                        </div>
                            <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">5</p>
                                <p class=\"subtitle\">Membres Equipe</p>
                                <progress class=\"progress is-danger\" value=\"100\" max=\"100\">90%</progress>
                            </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <!--CHOSES-->
                    <div class=\"column is-6\">
                    <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Dernieres Taches accomplies
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Fondation du rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Installation des</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/success-green-check-mark-icon.png')}}\"></td>
                                                <td>Fondation du premier rez de chaussé</td>
                                                <td class=\"level-right\">12/12/2022 12:25:52</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">Voir tout</a>
                            </footer>
                        </div>
                    </div>
                    <!--ENDCHOSES-->
                    <!--EQUIPE-->
                    <div class=\"column is-6\">
                        <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Equipe
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/undraw_profile_1.svg') }}\"></td>
                                                <td>Soko Mamadou</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                             <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/undraw_profile_2.svg') }}\"</td>
                                                <td>Ba Amadou</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                                                                        <tr>
                                                <td width=\"10%\"><img src=\"{{ asset('images/undraw_profile_3.svg') }}\"</td>
                                                <td>Ndiaye Francois</td>
                                                <td class=\"level-right\"><button id=\"voirMembreEquipe\" class=\"button is-small is-primary\">Voir</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">Voir tout</a>
                            </footer>
                        </div>
                    </div>
                    <!--  Modal membre equipe -->
                        <div class=\"modal\">
                            <div class=\"modal-background\"></div>
                            <div class=\"modal-content has-background-white py-5 px-5\">
                                <h3 class=\"title mb-6\"><i class=\"fa fa-user\"></i> <span>Nom Prenom</span></h3>
                                <div class=\"columns\">
                                <div class=\"column is-half\">
                                <p><b>Nom:</b> nom</p>
                                <p><b>Prenom:</b> prenom</p>
                                <p><b>Email:</b> emailUtilisateur@email.com</p>
                                <p><b>Tel:</b> 77 123 45 67</p>
                                </div>
                                <div class=\"column is-half\">
                                <b>Roles: </b>
                                <table>
                                <tr>
                                  <td>Admin</td>
                                <tr>
                                </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Modal membre equipe -->

                    <!--END_EQUIPE-->

                </div>
            <!--ENDBODY-->
            <script>
            //modal
             const voirButton = document.querySelector('#voirMembreEquipe');
             const modalBg = document.querySelector('.modal-background');
             const modal = document.querySelector('.modal');

             voirButton.addEventListener('click',() => { 
             modal.classList.add('is-active');
             })

             modalBg.addEventListener('click',() => { 
             modal.classList.remove('is-active');
             })
            </script>
{% endblock %}
", "admin_dashboard/index.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\admin_dashboard\\index.html.twig");
    }
}
