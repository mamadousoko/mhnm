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
class __TwigTemplate_1f45452ec86dfbe7dc95dc3ebe2ebbcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'navMenu' => [$this, 'block_navMenu'],
            'body' => [$this, 'block_body'],
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
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    <body>
        <!-- START NAV -->
    <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
  <div class=\"navbar-brand\">
    <a class=\"navbar-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\">
      <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mhnmpro_Nav.png"), "html", null, true);
        echo "\" >
    </a>

    <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
      <span aria-hidden=\"true\"></span>
      <span aria-hidden=\"true\"></span>
      <span aria-hidden=\"true\"></span>
    </a>
  </div>
     <div id=\"navMenu\" class=\"navbar-menu\">
                <div class=\"navbar-start\">
  ";
        // line 36
        $this->displayBlock('navMenu', $context, $blocks);
        // line 38
        echo "                </div>
            </div>
  <div id=\"navbarBasicExample\" class=\"navbar-menu\">
    <div class=\"navbar-end\">
      <div class=\"navbar-item\">
         <div class=\"container\">             
            <div class=\"dropdown\">
               <div class=\"dropdown-trigger\">
                  <button class=\"button\"
                          aria-haspopup=\"true\"
                          aria-controls=\"dropdown-menu\">
                     
                     <img class=\"is-rounded\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/undraw_profile.svg"), "html", null, true);
        echo "\">
                     &nbsp;&nbsp;
                     <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                     <span class=\"icon is-small\">
                        <i class=\"fa fa-angle-down\"
                           aria-hidden=\"true\"></i>
                     </span>
                     &nbsp;&nbsp;
                  </button>
               </div>
               <div class=\"dropdown-menu\"
                    id=\"dropdown-menu\"
                    role=\"menu\">
                  <div class=\"dropdown-content\">
                     <a href=\"#\" class=\"dropdown-item\">
                       Changer de projet
                     </a>
                     <hr class=\"dropdown-divider\">
                     <a href=\"/logout\" class=\"dropdown-item\">
                       Se deconnecter
                     </a>
                  </div>
               </div>
            </div>
            <script>            
               document.addEventListener('DOMContentLoaded', function () {
                
                  var dropdown = document.querySelector('.dropdown');
                  
                  dropdown.addEventListener('click', function(event) {
                     event.stopPropagation();
                     dropdown.classList.toggle('is-active');
                   });
               });       
            </script>
         </div> 
      </div>
    </div>
  </div>
</nav>
    <!-- END NAV -->
     <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3 \">
               <!-- SIDE MENU -->
                <aside class=\"menu is-hidden-mobile\" id=\"sideMenu\">
                    <p class=\"menu-label\">
                        Menu
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-0\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\">Dashboard</a></li>
                    </ul>
                  ";
        // line 103
        echo "                    <p class=\"menu-label\">
                        Administration
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-1\">Gestion Projet</a></li>
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-2\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
        echo "\">Gestion Utilisateurs</a></li>
                    </ul>
                   ";
        // line 111
        echo "                    <p class=\"menu-label\">
                        Coordination
                    </p>
                    <ul class=\"menu-list\">
                    <li><a class=\"sideMenuItem\" id=\"sideMenuItem-3\">Planning projet</a></li>
                    <li><a class=\"sideMenuItem\" id=\"sideMenuItem-4\">Gestion Taches</a></li>
                    <ul>
                    <p class=\"menu-label\">
                        Finances
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-5\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finance_depences");
        echo "\">Depenses</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-6\">Achats</a></li>
                    </ul>
                    <p class=\"menu-label\">
                       Espace Entreprenneur
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-7\">Stock</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-8\">Entrées</a></li>
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-9\">Sorties</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-10\">Main d'oeuvre</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-11\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache");
        echo "\">Taches</a></li>
                    </ul>
                </aside>
                <!-- END SIDE MENU -->
            </div>
            <div class=\"column is-9\">   
        ";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "                </div>
         </div>
    </div>
</body>
    <script>
    //SideMenu
   document.querySelectorAll('.sideMenuItem').forEach(link =>{
   if(link.href === window.location.href){
    link.classList.add(\"is-active\");
   }
   })
      
    </script>
</html>
";
        
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
        echo "    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css\"> -->
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </head>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_navMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        // line 37
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  357 => 139,  347 => 37,  337 => 36,  324 => 15,  314 => 14,  301 => 11,  291 => 10,  272 => 6,  260 => 17,  258 => 14,  255 => 13,  252 => 10,  246 => 6,  242 => 4,  232 => 3,  208 => 140,  206 => 139,  197 => 133,  183 => 122,  170 => 111,  165 => 108,  158 => 103,  153 => 100,  100 => 52,  95 => 50,  81 => 38,  79 => 36,  65 => 25,  61 => 24,  55 => 20,  53 => 3,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    {% block head %}
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
      <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css\"> -->
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}

    </head>
    {% endblock %}
    <body>
        <!-- START NAV -->
    <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
  <div class=\"navbar-brand\">
    <a class=\"navbar-item\" href=\"{{ path('app_admin_dashboard') }}\">
      <img src=\"{{ asset('images/mhnmpro_Nav.png') }}\" >
    </a>

    <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
      <span aria-hidden=\"true\"></span>
      <span aria-hidden=\"true\"></span>
      <span aria-hidden=\"true\"></span>
    </a>
  </div>
     <div id=\"navMenu\" class=\"navbar-menu\">
                <div class=\"navbar-start\">
  {% block navMenu %}
  {% endblock %}
                </div>
            </div>
  <div id=\"navbarBasicExample\" class=\"navbar-menu\">
    <div class=\"navbar-end\">
      <div class=\"navbar-item\">
         <div class=\"container\">             
            <div class=\"dropdown\">
               <div class=\"dropdown-trigger\">
                  <button class=\"button\"
                          aria-haspopup=\"true\"
                          aria-controls=\"dropdown-menu\">
                     
                     <img class=\"is-rounded\" src=\"{{asset('images/undraw_profile.svg')}}\">
                     &nbsp;&nbsp;
                     <span>{{app.user.nom}} {{app.user.prenom}}</span>
                     <span class=\"icon is-small\">
                        <i class=\"fa fa-angle-down\"
                           aria-hidden=\"true\"></i>
                     </span>
                     &nbsp;&nbsp;
                  </button>
               </div>
               <div class=\"dropdown-menu\"
                    id=\"dropdown-menu\"
                    role=\"menu\">
                  <div class=\"dropdown-content\">
                     <a href=\"#\" class=\"dropdown-item\">
                       Changer de projet
                     </a>
                     <hr class=\"dropdown-divider\">
                     <a href=\"/logout\" class=\"dropdown-item\">
                       Se deconnecter
                     </a>
                  </div>
               </div>
            </div>
            <script>            
               document.addEventListener('DOMContentLoaded', function () {
                
                  var dropdown = document.querySelector('.dropdown');
                  
                  dropdown.addEventListener('click', function(event) {
                     event.stopPropagation();
                     dropdown.classList.toggle('is-active');
                   });
               });       
            </script>
         </div> 
      </div>
    </div>
  </div>
</nav>
    <!-- END NAV -->
     <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3 \">
               <!-- SIDE MENU -->
                <aside class=\"menu is-hidden-mobile\" id=\"sideMenu\">
                    <p class=\"menu-label\">
                        Menu
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-0\" href=\"{{path('app_admin_dashboard')}}\">Dashboard</a></li>
                    </ul>
                  {#  {% if is_granted('ROLE_ADMIN') %} #}
                    <p class=\"menu-label\">
                        Administration
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-1\">Gestion Projet</a></li>
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-2\" href=\"{{ path('app_user_list') }}\">Gestion Utilisateurs</a></li>
                    </ul>
                   {# {% endif %} #}
                    <p class=\"menu-label\">
                        Coordination
                    </p>
                    <ul class=\"menu-list\">
                    <li><a class=\"sideMenuItem\" id=\"sideMenuItem-3\">Planning projet</a></li>
                    <li><a class=\"sideMenuItem\" id=\"sideMenuItem-4\">Gestion Taches</a></li>
                    <ul>
                    <p class=\"menu-label\">
                        Finances
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-5\" href=\"{{ path('app_finance_depences') }}\">Depenses</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-6\">Achats</a></li>
                    </ul>
                    <p class=\"menu-label\">
                       Espace Entreprenneur
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-7\">Stock</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-8\">Entrées</a></li>
                        <li><a class=\"sideMenuItem\" id=\"sideMenuItem-9\">Sorties</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-10\">Main d'oeuvre</a></li>
                        <li><a class=\"sideMenuItem\"  id=\"sideMenuItem-11\" href=\"{{ path('app_tache') }}\">Taches</a></li>
                    </ul>
                </aside>
                <!-- END SIDE MENU -->
            </div>
            <div class=\"column is-9\">   
        {% block body %}{% endblock %}
                </div>
         </div>
    </div>
</body>
    <script>
    //SideMenu
   document.querySelectorAll('.sideMenuItem').forEach(link =>{
   if(link.href === window.location.href){
    link.classList.add(\"is-active\");
   }
   })
      
    </script>
</html>
", "base.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\base.html.twig");
    }
}
