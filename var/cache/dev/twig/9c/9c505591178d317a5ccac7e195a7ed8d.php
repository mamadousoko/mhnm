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

/* home/index.html.twig */
class __TwigTemplate_cd42d2c3b0b793efa3e0816eafd11490 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<!--***********************************************-->
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin - Free Bulma template</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <!-- Bulma Version 0.9.0-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/admin.css\">
</head>

<body>

    <!-- START NAV -->
    <nav class=\"navbar is-white\">
        <div class=\"container\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item brand-text\" href=\"../index.html\">
          Bulma Admin
        </a>
                <div class=\"navbar-burger burger\" data-target=\"navMenu\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3 \">
                <aside class=\"menu is-hidden-mobile\">
                    <p class=\"menu-label\">
                        General
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"is-active\">Dashboard</a></li>
                        <li><a>Customers</a></li>
                        <li><a>Other</a></li>
                    </ul>
                    <p class=\"menu-label\">
                        Administration
                    </p>
                    <ul class=\"menu-list\">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a>Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                        <li><a>Payments</a></li>
                    </ul>
                    <p class=\"menu-label\">
                        Transactions
                    </p>
                    <ul class=\"menu-list\">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                </aside>
            </div>
            <div class=\"column is-9\">
                <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                    <ul>
                        <li><a href=\"../\">Bulma</a></li>
                        <li><a href=\"../\">Templates</a></li>
                        <li><a href=\"../\">Examples</a></li>
                        <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">Admin</a></li>
                    </ul>
                </nav>
                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                Hello, Admin.
                            </h1>
                            <h2 class=\"subtitle\">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section>
                <section class=\"info-tiles\">
                    <div class=\"tile is-ancestor has-text-centered\">
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">439k</p>
                                <p class=\"subtitle\">Users</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">59k</p>
                                <p class=\"subtitle\">Products</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">3.4k</p>
                                <p class=\"subtitle\">Open Orders</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">19</p>
                                <p class=\"subtitle\">Exceptions</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <div class=\"column is-6\">
                        <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Events
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">View All</a>
                            </footer>
                        </div>
                    </div>
                    <div class=\"column is-6\">
                        <div class=\"card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Inventory Search
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-content\">
                                <div class=\"content\">
                                    <div class=\"control has-icons-left has-icons-right\">
                                        <input class=\"input is-large\" type=\"text\" placeholder=\"\">
                                        <span class=\"icon is-medium is-left\">
                      <i class=\"fa fa-search\"></i>
                    </span>
                                        <span class=\"icon is-medium is-right\">
                      <i class=\"fa fa-check\"></i>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    User Search
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-content\">
                                <div class=\"content\">
                                    <div class=\"control has-icons-left has-icons-right\">
                                        <input class=\"input is-large\" type=\"text\" placeholder=\"\">
                                        <span class=\"icon is-medium is-left\">
                      <i class=\"fa fa-search\"></i>
                    </span>
                                        <span class=\"icon is-medium is-right\">
                      <i class=\"fa fa-check\"></i>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async type=\"text/javascript\" src=\"../js/bulma.js\"></script>
</body>

</html>

<!--******************************************-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<!--***********************************************-->
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin - Free Bulma template</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <!-- Bulma Version 0.9.0-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/admin.css\">
</head>

<body>

    <!-- START NAV -->
    <nav class=\"navbar is-white\">
        <div class=\"container\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item brand-text\" href=\"../index.html\">
          Bulma Admin
        </a>
                <div class=\"navbar-burger burger\" data-target=\"navMenu\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3 \">
                <aside class=\"menu is-hidden-mobile\">
                    <p class=\"menu-label\">
                        General
                    </p>
                    <ul class=\"menu-list\">
                        <li><a class=\"is-active\">Dashboard</a></li>
                        <li><a>Customers</a></li>
                        <li><a>Other</a></li>
                    </ul>
                    <p class=\"menu-label\">
                        Administration
                    </p>
                    <ul class=\"menu-list\">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a>Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                        <li><a>Payments</a></li>
                    </ul>
                    <p class=\"menu-label\">
                        Transactions
                    </p>
                    <ul class=\"menu-list\">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                </aside>
            </div>
            <div class=\"column is-9\">
                <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                    <ul>
                        <li><a href=\"../\">Bulma</a></li>
                        <li><a href=\"../\">Templates</a></li>
                        <li><a href=\"../\">Examples</a></li>
                        <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">Admin</a></li>
                    </ul>
                </nav>
                <section class=\"hero is-info welcome is-small\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                Hello, Admin.
                            </h1>
                            <h2 class=\"subtitle\">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section>
                <section class=\"info-tiles\">
                    <div class=\"tile is-ancestor has-text-centered\">
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">439k</p>
                                <p class=\"subtitle\">Users</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">59k</p>
                                <p class=\"subtitle\">Products</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">3.4k</p>
                                <p class=\"subtitle\">Open Orders</p>
                            </article>
                        </div>
                        <div class=\"tile is-parent\">
                            <article class=\"tile is-child box\">
                                <p class=\"title\">19</p>
                                <p class=\"subtitle\">Exceptions</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class=\"columns\">
                    <div class=\"column is-6\">
                        <div class=\"card events-card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Events
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-table\">
                                <div class=\"content\">
                                    <table class=\"table is-fullwidth is-striped\">
                                        <tbody>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width=\"5%\"><i class=\"fa fa-bell-o\"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class=\"level-right\"><a class=\"button is-small is-primary\" href=\"#\">Action</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class=\"card-footer\">
                                <a href=\"#\" class=\"card-footer-item\">View All</a>
                            </footer>
                        </div>
                    </div>
                    <div class=\"column is-6\">
                        <div class=\"card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    Inventory Search
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-content\">
                                <div class=\"content\">
                                    <div class=\"control has-icons-left has-icons-right\">
                                        <input class=\"input is-large\" type=\"text\" placeholder=\"\">
                                        <span class=\"icon is-medium is-left\">
                      <i class=\"fa fa-search\"></i>
                    </span>
                                        <span class=\"icon is-medium is-right\">
                      <i class=\"fa fa-check\"></i>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <header class=\"card-header\">
                                <p class=\"card-header-title\">
                                    User Search
                                </p>
                                <a href=\"#\" class=\"card-header-icon\" aria-label=\"more options\">
                  <span class=\"icon\">
                    <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                  </span>
                </a>
                            </header>
                            <div class=\"card-content\">
                                <div class=\"content\">
                                    <div class=\"control has-icons-left has-icons-right\">
                                        <input class=\"input is-large\" type=\"text\" placeholder=\"\">
                                        <span class=\"icon is-medium is-left\">
                      <i class=\"fa fa-search\"></i>
                    </span>
                                        <span class=\"icon is-medium is-right\">
                      <i class=\"fa fa-check\"></i>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async type=\"text/javascript\" src=\"../js/bulma.js\"></script>
</body>

</html>

<!--******************************************-->

{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\home\\index.html.twig");
    }
}
