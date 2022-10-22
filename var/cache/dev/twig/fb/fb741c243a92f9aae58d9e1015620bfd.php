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

/* user/signup.html.twig */
class __TwigTemplate_ed7f6e7d0708c2209dcbacaeda106598 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/signup.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Creer un compte</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/15181efa86.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/register.css\">
     
  </head>

  <body>
       <section class=\"hero is-fullheight\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <div class=\"column is-4 is-offset-4\">
                    <h4 class=\"title has-text-black\">Creer Un compte</h4>
                    <div class=\"box\">
                        <figure class=\"avatar\">
                            <img width=\"35%\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mhnmProLogo.png"), "html", null, true);
        echo "\">
                        </figure>
                        <form>
                           <div class=\"field is-horizontal\">
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"text\" placeholder=\"Nom\" autofocus=\"\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-user\"></i>
                                  </span>
                                </div>
                            </div>
                            &nbsp;
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"text\" placeholder=\"Prenom\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-user\"></i>
                                  </span>
                                </div>
                            </div>
                           </div> 
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"email\" placeholder=\"Email\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-envelope\"></i>
                                  </span>
                                </div>
                            </div> 
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"tel\" placeholder=\"Tel\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-phone\"></i>
                                  </span>
                                </div>
                            </div>
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"password\" placeholder=\"Mot de passe\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-lock\"></i>
                                  </span>
                                </div>
                            </div>
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"password\" placeholder=\"Confirmation mot de passe\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-lock\"></i>
                                  </span>
                                </div>
                            </div>
                            <button class=\"button is-block is-info is-large is-fullwidth\">Valider <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i></button>
                        </form>
                        <br/>
                     <p>
                    <a class=\"creerUnCompte\" href=\"/\">Cliquez si vous avez deja un compte</a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Creer un compte</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/15181efa86.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/register.css\">
     
  </head>

  <body>
       <section class=\"hero is-fullheight\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <div class=\"column is-4 is-offset-4\">
                    <h4 class=\"title has-text-black\">Creer Un compte</h4>
                    <div class=\"box\">
                        <figure class=\"avatar\">
                            <img width=\"35%\" src=\"{{asset('images/mhnmProLogo.png')}}\">
                        </figure>
                        <form>
                           <div class=\"field is-horizontal\">
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"text\" placeholder=\"Nom\" autofocus=\"\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-user\"></i>
                                  </span>
                                </div>
                            </div>
                            &nbsp;
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"text\" placeholder=\"Prenom\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-user\"></i>
                                  </span>
                                </div>
                            </div>
                           </div> 
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"email\" placeholder=\"Email\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-envelope\"></i>
                                  </span>
                                </div>
                            </div> 
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"tel\" placeholder=\"Tel\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-phone\"></i>
                                  </span>
                                </div>
                            </div>
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"password\" placeholder=\"Mot de passe\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-lock\"></i>
                                  </span>
                                </div>
                            </div>
                            <div class=\"field\">
                                <div class=\"control has-icons-left\">
                                  <input class=\"input is-medium\" type=\"password\" placeholder=\"Confirmation mot de passe\">
                                  <span class=\"icon is-left\">
                                    <i class=\"fas fa-lock\"></i>
                                  </span>
                                </div>
                            </div>
                            <button class=\"button is-block is-info is-large is-fullwidth\">Valider <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i></button>
                        </form>
                        <br/>
                     <p>
                    <a class=\"creerUnCompte\" href=\"/\">Cliquez si vous avez deja un compte</a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>

</html>", "user/signup.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\user\\signup.html.twig");
    }
}
