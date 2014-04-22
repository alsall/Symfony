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
            'menu' => array($this, 'block_menu'),
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
      ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo " 
 
    <div class=\"row\">

\t\t<div id=\"menu\" class=\"span2\">
      ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "          <ul class=\"nav nav-pills nav-stacked\">
            
\t\t\t
   <h5> Bienvenue ";
            // line 27
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
            echo "</h5>
   <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">changer mot de passe</a><br>
   <!--<a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">afficher detail</a>
   <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Enregistrer un utilisateur</a><br>-->
\t<a class=\"btn\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>

       </ul>
";
        }
        // line 35
        echo "\t\t\t
\t\t\t
\t\t\t
         
                     
         ";
        // line 41
        echo "        </div>
        <div id=\"content\" class=\"span11\">
          ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
     </div>
\t 
      <hr>

     <!--  <footer>
        <p>Built by Alpha. All rights reserved</p>
      </footer> -->

    </div>
\t</div>
  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
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

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "\t\t  ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "          ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/script.js"), "html", null, true);
        echo "\"></script>
  <script language=\"JavaScript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/.../js/jquery.js"), "html", null, true);
        echo "\"></script>  
 <script language=\"JavaScript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/.../js/jquery-ui.js"), "html", null, true);
        echo "\"></script>  
 <script language=\"JavaScript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/.../js/jquery.autocomplete.js"), "html", null, true);
        echo "
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
        return array (  174 => 63,  170 => 62,  153 => 57,  139 => 17,  128 => 9,  125 => 8,  95 => 43,  91 => 41,  73 => 30,  119 => 6,  86 => 42,  64 => 15,  61 => 14,  54 => 14,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 43,  138 => 44,  134 => 43,  131 => 42,  122 => 63,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 35,  72 => 15,  69 => 29,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 56,  147 => 51,  127 => 60,  112 => 65,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 60,  158 => 59,  155 => 58,  152 => 55,  142 => 52,  136 => 16,  133 => 43,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 23,  114 => 22,  109 => 54,  106 => 20,  101 => 19,  85 => 22,  77 => 31,  67 => 15,  47 => 6,  28 => 4,  55 => 24,  38 => 12,  50 => 7,  110 => 56,  100 => 27,  89 => 43,  65 => 28,  63 => 13,  58 => 10,  34 => 4,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 18,  44 => 16,  36 => 8,  32 => 4,  27 => 3,  22 => 2,  60 => 27,  57 => 9,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 61,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 44,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 57,  111 => 32,  107 => 28,  104 => 28,  97 => 45,  93 => 44,  90 => 21,  81 => 40,  70 => 33,  66 => 16,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 9,  45 => 6,  41 => 6,  37 => 5,  33 => 4,  30 => 2,);
    }
}
