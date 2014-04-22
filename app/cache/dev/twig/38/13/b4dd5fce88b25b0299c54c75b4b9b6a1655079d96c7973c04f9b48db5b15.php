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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
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
        return array (  165 => 61,  161 => 60,  152 => 57,  124 => 8,  118 => 6,  90 => 41,  76 => 31,  127 => 9,  97 => 45,  81 => 40,  77 => 38,  70 => 33,  53 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 16,  119 => 60,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 43,  138 => 17,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 43,  89 => 43,  85 => 25,  75 => 17,  68 => 29,  56 => 9,  38 => 12,  26 => 6,  87 => 25,  31 => 6,  21 => 2,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  93 => 44,  88 => 6,  78 => 21,  46 => 18,  44 => 16,  27 => 4,  79 => 18,  72 => 30,  69 => 17,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 59,  145 => 44,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 57,  111 => 65,  108 => 36,  101 => 32,  98 => 31,  96 => 45,  83 => 35,  74 => 14,  66 => 16,  55 => 24,  52 => 8,  50 => 10,  43 => 6,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 63,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 44,  122 => 63,  116 => 41,  112 => 55,  109 => 56,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 42,  82 => 22,  80 => 19,  73 => 19,  64 => 28,  60 => 27,  57 => 11,  54 => 10,  51 => 14,  48 => 7,  45 => 17,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 2,);
    }
}
