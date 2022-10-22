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

/* login/index.html.twig */
class __TwigTemplate_eca02342bb81cd91211c44092079e3c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Se Connecter</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/15181efa86.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/register.css\">
     
  </head>

  <body>
    <section class=\"container\">
      <div class=\"columns is-multiline\">
        <div class=\"column is-8 is-offset-2 register\">
          <div class=\"columns\">
            <div class=\"column left\">
              <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mhnmProLogo.png"), "html", null, true);
        echo "\" >
              <p class=\"description\">Amélioration du suivi opérationnel sur chantier et communication optimale entre tous les acteurs du chantier</p>
            </div>
            <div class=\"column right has-text-centered\">
              <h1 class=\"title is-4\">Se Connecter</h1>
              <p class=\"description\">Saisissez votre email et votre mot de passe pour vous connecter</p>
              <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                <div class=\"field\">
                  <div class=\"control\">
                    <input class=\"input is-medium\" type=\"email\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" autocomplete=\"email\" required autofocus>
                  </div>
                </div>

                <div class=\"field\">
                  <div class=\"control\">
                    <input class=\"input is-medium\" type=\"password\" name=\"password\" id=\"inputPassword\"  type=\"password\" placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                  </div>
                </div> 
                <button class=\"loginButton button is-block is-fullwidth is-medium\">Se Connecter</button>
                <br />

                <a class=\"creerUnCompte\" href=\"user/signup\">Cliquer ici pour creer un Compte</a>
                <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
              </form>
            </div>
          </div>
        </div>
        <div class=\"column is-8 is-offset-2\">
          <br>
          <nav class=\"level\">
            <div class=\"level-right\">
              <small class=\"level-item\" style=\"color: var(--textLight)\">
                &copy; MHNM PRO. All Rights Reserved.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <style>
    :root {
      --brandColor: hsl(166, 67%, 51%);
      --background: rgb(247, 247, 247);
      --textDark: hsla(0, 0%, 0%, 0.66);
      --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
      background: var(--background);
      height: 100vh;
      color: var(--textDark);
    }

    .creerUnCompte{
        color: #6c9286;
        }

    img{
        padding: 0;
        margin: 10px;
    }
    .field:not(:last-child) {
      margin-bottom: 1rem;
    }

    .register {
      margin-top: 10rem;
      background: white;
      border-radius: 10px;
    }

    .left,
    .right {
      padding: 4.5rem;
    }
    .loginButton{
        background: #289dd2;
        color: white;
    }

    .left {
      border-right: 5px solid var(--background);
      text-align:center;
    }

    .left .title {
      font-weight: 800;
      letter-spacing: -2px;
    }

    .left .colored {
      color: var(--brandColor);
      font-weight: 500;
      margin-top: 1rem !important;
      letter-spacing: -1px;
    }

    .left p {
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right .title {
      font-weight: 800;
      letter-spacing: -1px;
    }

    .right .description {
      margin-top: 1rem;
      margin-bottom: 1rem !important;
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right small {
      color: var(--textLight);
    }

    input {
      font-size: 1rem;
    }

    input:focus {
      border-color: #289dd2 !important;
      box-shadow: 0 0 0 1px #289dd2 !important;
    }

    .fab,
    .fas {
      color: var(--textLight);
      margin-right: 1rem;
    }

  </style>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  81 => 31,  75 => 28,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Se Connecter</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/15181efa86.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.9.0/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/register.css\">
     
  </head>

  <body>
    <section class=\"container\">
      <div class=\"columns is-multiline\">
        <div class=\"column is-8 is-offset-2 register\">
          <div class=\"columns\">
            <div class=\"column left\">
              <img src=\"{{ asset('images/mhnmProLogo.png') }}\" >
              <p class=\"description\">Amélioration du suivi opérationnel sur chantier et communication optimale entre tous les acteurs du chantier</p>
            </div>
            <div class=\"column right has-text-centered\">
              <h1 class=\"title is-4\">Se Connecter</h1>
              <p class=\"description\">Saisissez votre email et votre mot de passe pour vous connecter</p>
              <form action=\"{{ path('app_login') }}\" method=\"post\">
                <div class=\"field\">
                  <div class=\"control\">
                    <input class=\"input is-medium\" type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" autocomplete=\"email\" required autofocus>
                  </div>
                </div>

                <div class=\"field\">
                  <div class=\"control\">
                    <input class=\"input is-medium\" type=\"password\" name=\"password\" id=\"inputPassword\"  type=\"password\" placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                  </div>
                </div> 
                <button class=\"loginButton button is-block is-fullwidth is-medium\">Se Connecter</button>
                <br />

                <a class=\"creerUnCompte\" href=\"user/signup\">Cliquer ici pour creer un Compte</a>
                <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\">
              </form>
            </div>
          </div>
        </div>
        <div class=\"column is-8 is-offset-2\">
          <br>
          <nav class=\"level\">
            <div class=\"level-right\">
              <small class=\"level-item\" style=\"color: var(--textLight)\">
                &copy; MHNM PRO. All Rights Reserved.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <style>
    :root {
      --brandColor: hsl(166, 67%, 51%);
      --background: rgb(247, 247, 247);
      --textDark: hsla(0, 0%, 0%, 0.66);
      --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
      background: var(--background);
      height: 100vh;
      color: var(--textDark);
    }

    .creerUnCompte{
        color: #6c9286;
        }

    img{
        padding: 0;
        margin: 10px;
    }
    .field:not(:last-child) {
      margin-bottom: 1rem;
    }

    .register {
      margin-top: 10rem;
      background: white;
      border-radius: 10px;
    }

    .left,
    .right {
      padding: 4.5rem;
    }
    .loginButton{
        background: #289dd2;
        color: white;
    }

    .left {
      border-right: 5px solid var(--background);
      text-align:center;
    }

    .left .title {
      font-weight: 800;
      letter-spacing: -2px;
    }

    .left .colored {
      color: var(--brandColor);
      font-weight: 500;
      margin-top: 1rem !important;
      letter-spacing: -1px;
    }

    .left p {
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right .title {
      font-weight: 800;
      letter-spacing: -1px;
    }

    .right .description {
      margin-top: 1rem;
      margin-bottom: 1rem !important;
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right small {
      color: var(--textLight);
    }

    input {
      font-size: 1rem;
    }

    input:focus {
      border-color: #289dd2 !important;
      box-shadow: 0 0 0 1px #289dd2 !important;
    }

    .fab,
    .fas {
      color: var(--textLight);
      margin-right: 1rem;
    }

  </style>

</html>", "login/index.html.twig", "C:\\wamp64\\www\\MHNMPRO\\templates\\login\\index.html.twig");
    }
}
