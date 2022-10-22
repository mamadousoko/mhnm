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

/* user/list.html.twig */
class __TwigTemplate_f3b5c9c584bf4acf84bcf090d23353e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
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

        echo "<title>User</title> ";
        
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
                                Gestion Utilisateurs
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>      
                <div class=\"columns\">
                   <div class=\"column\">
                                  <div class=\"tabs is-boxed\">
                                    <ul>
                                      <li class=\"is-active\" data-target=\"liste-equipe\">
                                        <a>
                                          <span class=\"icon is-small\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i></span>
                                          <span>Liste Utilisateurs</span>
                                        </a>
                                      </li>
                                      <li data-target=\"formulaire-equipe\">
                                        <a>
                                          <span class=\"icon is-small\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i></span>
                                          <span>Formulaire d'ajout d'utilisateurs</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                     <div id=\"tab-content\">
                      <div class=\"card events-card\" id=\"liste-equipe\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Equipe
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped is-bordered is-hoverable\">
                                     <thead>
                                       <tr>
                                         <th><abbr title=\"Id\">Id</abbr></th>
                                         <th><abbr title=\"Nom\">Nom</abbr></th>
                                         <th><abbr title=\"Prenom\">Prenom</abbr></th>
                                         <th><abbr title=\"Email\">Email</abbr></th>
                                         <th><abbr title=\"Tel\">Tel</abbr></th>
                                         <th><abbr title=\"Roles\">Roles</abbr></th>
                                         <th colspan=\"2\"><abbr title=\"Actions\">Actions</abbr></th>
                                       </tr>
                                     </thead>                                   
                                        <tbody>
                                            <tr>
                                              <td>
                                                1
                                              </td>
                                              <td>
                                                Soko
                                              </td>
                                              <td>
                                                Mamadou
                                              </td>
                                              <td>
                                                mamadousoko@gmail.com
                                              </td>
                                              <td>
                                                77 123 45 67
                                              </td>
                                              <td>
                                                <table>
                                                  <tr>
                                                    <td>
                                                      Admin
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                              <td>
                                                 <a class=\"button is-warning is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                                 <a class=\"button is-danger is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class=\"is-vcentered\">
                                                2
                                              </td>
                                              <td class=\"is-vcentered\">
                                                Ba
                                              </td>
                                              <td class=\"is-vcentered\">
                                                Amadou
                                              </td>
                                              <td class=\"is-vcentered\">
                                                amadouBa@gmail.com
                                              </td>
                                              <td class=\"is-vcentered\">
                                                77 321 54 76
                                              </td>
                                              <td>
                                                <table>
                                                  <tr>
                                                    <td>
                                                      Entreprenneur
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      Gestionnaire Finances
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                              <td class=\"is-vcentered\">
                                                 <a class=\"button is-warning is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                                 <a class=\"button is-danger is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                              </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                            </footer>
                        </div>
                        <div class=\"card events-card is-hidden\" id=\"formulaire-equipe\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Fomulaire d'ajout
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content box\">
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Nom</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Prenom</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                     <br/>
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Email</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Tel</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                         <br/>
                                     <label class=\"label\">Roles</label>
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Admin</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Gestionnaire Finances</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Coordinateur</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Entreprenneur</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                     <br/>
                                     <div class=\"has-text-centered\">
                                      <input class=\"button is-link\" type=\"submit\" value=\"Valider\">
                                     </div>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                            </footer>
                        </div>
                       </div> 
                    </div>
                </div>   
                <script>
                //tabs
                const tabs = document.querySelectorAll('.tabs li');
                const tabContentBoxes = document.querySelectorAll('#tab-content > div');

                tabs.forEach((tab) =>{
                 tab.addEventListener('click', () => {
                 tabs.forEach(item => item.classList.remove('is-active'))
                 tab.classList.add('is-active');

                 const target = tab.dataset.target;
                 tabContentBoxes.forEach(box => {
                    if(box.getAttribute('id') === target){
                        box.classList.remove('is-hidden');
                    }else{
                        box.classList.add('is-hidden');
                    }
                 }) 
                 })
                })

                </script>   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
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
    {% block tile %}<title>User</title> {% endblock %}
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
                                Gestion Utilisateurs
                            </h1>
                            <h2 class=\"subtitle\">
                                Projet <b>n°12345</b>: Le nom du projet ici
                            </h2>
                        </div>
                    </div>
                </section>      
                <div class=\"columns\">
                   <div class=\"column\">
                                  <div class=\"tabs is-boxed\">
                                    <ul>
                                      <li class=\"is-active\" data-target=\"liste-equipe\">
                                        <a>
                                          <span class=\"icon is-small\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i></span>
                                          <span>Liste Utilisateurs</span>
                                        </a>
                                      </li>
                                      <li data-target=\"formulaire-equipe\">
                                        <a>
                                          <span class=\"icon is-small\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i></span>
                                          <span>Formulaire d'ajout d'utilisateurs</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                     <div id=\"tab-content\">
                      <div class=\"card events-card\" id=\"liste-equipe\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Equipe
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped is-bordered is-hoverable\">
                                     <thead>
                                       <tr>
                                         <th><abbr title=\"Id\">Id</abbr></th>
                                         <th><abbr title=\"Nom\">Nom</abbr></th>
                                         <th><abbr title=\"Prenom\">Prenom</abbr></th>
                                         <th><abbr title=\"Email\">Email</abbr></th>
                                         <th><abbr title=\"Tel\">Tel</abbr></th>
                                         <th><abbr title=\"Roles\">Roles</abbr></th>
                                         <th colspan=\"2\"><abbr title=\"Actions\">Actions</abbr></th>
                                       </tr>
                                     </thead>                                   
                                        <tbody>
                                            <tr>
                                              <td>
                                                1
                                              </td>
                                              <td>
                                                Soko
                                              </td>
                                              <td>
                                                Mamadou
                                              </td>
                                              <td>
                                                mamadousoko@gmail.com
                                              </td>
                                              <td>
                                                77 123 45 67
                                              </td>
                                              <td>
                                                <table>
                                                  <tr>
                                                    <td>
                                                      Admin
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                              <td>
                                                 <a class=\"button is-warning is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                                 <a class=\"button is-danger is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class=\"is-vcentered\">
                                                2
                                              </td>
                                              <td class=\"is-vcentered\">
                                                Ba
                                              </td>
                                              <td class=\"is-vcentered\">
                                                Amadou
                                              </td>
                                              <td class=\"is-vcentered\">
                                                amadouBa@gmail.com
                                              </td>
                                              <td class=\"is-vcentered\">
                                                77 321 54 76
                                              </td>
                                              <td>
                                                <table>
                                                  <tr>
                                                    <td>
                                                      Entreprenneur
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      Gestionnaire Finances
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                              <td class=\"is-vcentered\">
                                                 <a class=\"button is-warning is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                                 <a class=\"button is-danger is-outlined\" href=\"#\">
                                                  <span class=\"icon\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                  </span>
                                                 </a>
                                              </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                            </footer>
                        </div>
                        <div class=\"card events-card is-hidden\" id=\"formulaire-equipe\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Fomulaire d'ajout
                                </p>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content box\">
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Nom</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Prenom</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                     <br/>
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Email</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"label\">Tel</label>
                                             <input class=\"input is-info\" type=\"text\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                         <br/>
                                     <label class=\"label\">Roles</label>
                                     <div class=\"field is-horizontal\">
                                       <div class=\"field-body\">
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Admin</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Gestionnaire Finances</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Coordinateur</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                         <div class=\"field\">
                                           <p class=\"control\">
                                             <label class=\"checkbox\">Entreprenneur</label>
                                             <input class=\"is-info\" type=\"checkbox\"/>
                                           </p>
                                         </div>
                                       </div>
                                     </div>
                                     <br/>
                                     <div class=\"has-text-centered\">
                                      <input class=\"button is-link\" type=\"submit\" value=\"Valider\">
                                     </div>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                            </footer>
                        </div>
                       </div> 
                    </div>
                </div>   
                <script>
                //tabs
                const tabs = document.querySelectorAll('.tabs li');
                const tabContentBoxes = document.querySelectorAll('#tab-content > div');

                tabs.forEach((tab) =>{
                 tab.addEventListener('click', () => {
                 tabs.forEach(item => item.classList.remove('is-active'))
                 tab.classList.add('is-active');

                 const target = tab.dataset.target;
                 tabContentBoxes.forEach(box => {
                    if(box.getAttribute('id') === target){
                        box.classList.remove('is-hidden');
                    }else{
                        box.classList.add('is-hidden');
                    }
                 }) 
                 })
                })

                </script>   
{% endblock %}", "user/list.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\user\\list.html.twig");
    }
}
