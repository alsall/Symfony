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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
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
        return array (  213 => 102,  209 => 101,  206 => 100,  201 => 98,  197 => 87,  183 => 8,  177 => 6,  170 => 104,  156 => 88,  154 => 86,  150 => 84,  141 => 76,  135 => 75,  130 => 73,  126 => 72,  122 => 71,  118 => 70,  111 => 68,  94 => 54,  90 => 53,  86 => 52,  83 => 51,  67 => 42,  37 => 12,  35 => 8,  23 => 1,  61 => 14,  58 => 13,  50 => 26,  46 => 10,  324 => 116,  317 => 112,  306 => 104,  302 => 103,  298 => 102,  294 => 101,  288 => 98,  284 => 97,  280 => 96,  276 => 95,  270 => 92,  266 => 91,  262 => 90,  258 => 89,  252 => 86,  248 => 85,  244 => 84,  240 => 83,  234 => 80,  230 => 79,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  208 => 72,  204 => 99,  198 => 68,  194 => 86,  190 => 66,  186 => 9,  180 => 62,  176 => 61,  172 => 60,  168 => 98,  159 => 53,  155 => 52,  151 => 51,  147 => 50,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  121 => 39,  117 => 38,  113 => 69,  109 => 36,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 24,  78 => 49,  74 => 47,  70 => 21,  64 => 18,  60 => 17,  56 => 14,  53 => 16,  47 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 6,);
    }
}
