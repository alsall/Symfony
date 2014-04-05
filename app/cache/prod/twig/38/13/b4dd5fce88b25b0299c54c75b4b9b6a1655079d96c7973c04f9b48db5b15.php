<?php

/* ::base.html.twig */
class __TwigTemplate_3813b4dd5fce88b25b0299c54c75b4b9b6a1655079d96c7973c04f9b48db5b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>
 
  <body>
    <div class=\"container\">
\t\t<div class=\"hero-unit\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<h1>Île de Porquerolles - HALTE MIGRATOIRE (PNRO)</h1>
\t\t\t\t<p>Capture et marquage de l'avifaune en migration prénuptiale</p>
\t\t\t
\t\t   \t\t
\t\t\t";
        // line 26
        echo "\t\t</div>
\t\t
\t\t<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
    <div class=\"container\">
\t
     
    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    </a>
    
    <!-- Be sure to leave the brand out there if you want it shown -->
    ";
        // line 42
        echo "     
    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class=\"nav-collapse collapse\">
\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t <ul class=\"nav navbar-nav nav-justified\">
\t\t\t<li class=\"\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_ajouter");
        echo "\">Formulaire d'ajout</a></li>
\t\t\t\t";
        // line 51
        echo "\t\t
\t\t\t<li class=\"\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_voir");
        echo "\">Liste Baguage</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_diapo");
        echo "\">Galerie</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_doc");
        echo "\">Documents</a></li>
\t\t</ul>
    </div>
     
    </div>
    </div>
    </div>
 
 
    <div class=\"row\">

\t\t<div id=\"menu\" class=\"span2\">
          <ul class=\"nav nav-pills nav-stacked\">
            
\t\t\t<!--";
        // line 68
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 69
            echo "   <h5> Bienvenue ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
            echo "</h5>
   <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">changer mot de passe</a><br>
   <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">afficher detail</a>
   <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Enregistrer un utilisateur</a><br>
\t<a class=\"btn\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 75
            echo "    <a class=\"btn\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 76
        echo "-->
\t\t\t
\t\t\t
\t\t\t
\t\t\t
          </ul>
                     
         ";
        // line 84
        echo "        </div>
        <div id=\"content\" class=\"span13\">
          ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </div>
     </div>
\t
      <hr>
 
      <footer>
        <p>Built by Alpha. All rights reserved</p>
      </footer>
    </div>
\t</div>
  ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo " 
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Port Cros";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t  
    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "          ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        // line 100
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/script.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 102,  210 => 101,  205 => 99,  184 => 8,  169 => 98,  151 => 84,  123 => 71,  119 => 70,  113 => 69,  94 => 54,  86 => 52,  83 => 51,  74 => 47,  23 => 1,  61 => 14,  103 => 29,  73 => 21,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 73,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 51,  127 => 72,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 100,  197 => 74,  195 => 86,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 6,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 55,  142 => 76,  136 => 75,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 16,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 42,  47 => 6,  28 => 4,  55 => 15,  38 => 5,  50 => 26,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 49,  46 => 10,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 9,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 62,  180 => 59,  171 => 104,  166 => 51,  163 => 50,  160 => 49,  157 => 88,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 68,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 53,  81 => 23,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 6,  37 => 12,  33 => 4,  30 => 6,);
    }
}
