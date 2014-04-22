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
        return array (  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  154 => 58,  152 => 57,  149 => 56,  145 => 44,  142 => 43,  138 => 17,  135 => 16,  124 => 8,  118 => 6,  111 => 65,  96 => 45,  94 => 43,  83 => 35,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 27,  55 => 24,  46 => 18,  38 => 12,  36 => 8,  24 => 1,  130 => 61,  127 => 9,  122 => 63,  119 => 60,  115 => 57,  112 => 55,  109 => 56,  97 => 45,  93 => 44,  89 => 43,  86 => 42,  81 => 40,  77 => 38,  70 => 33,  53 => 23,  44 => 16,  41 => 6,  34 => 4,  31 => 6,  95 => 50,  92 => 49,  90 => 41,  87 => 47,  43 => 6,  40 => 5,  30 => 2,);
    }
}
