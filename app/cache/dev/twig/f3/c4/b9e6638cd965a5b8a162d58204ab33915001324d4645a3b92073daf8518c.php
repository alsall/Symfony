<?php

/* PnpcScopsBundle::layout.html.twig */
class __TwigTemplate_f3c4b9e6638cd965a5b8a162d58204ab33915001324d4645a3b92073daf8518c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo " <div class=\"hero-unit scops\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<h1>Île de Porquerolles - HALTE MIGRATOIRE (PNRO)</h1>
\t\t\t\t<p>Capture et marquage de l'avifaune en migration prénuptiale</p>
\t\t\t
\t\t   \t\t
\t\t\t";
        // line 17
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
        // line 33
        echo "     
    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class=\"nav-collapse collapse\">
\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t <ul class=\"nav navbar-nav nav-justified\">
\t\t\t<li class=\"\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_ajouter");
        echo "\">Formulaire d'ajout</a></li>
\t\t\t\t";
        // line 42
        echo "\t\t
\t\t\t<li class=\"\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_voir");
        echo "\">Liste Baguage</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_diapo");
        echo "\">Galerie</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_doc");
        echo "\">Documents</a></li>
\t\t</ul>
    </div>
     
    </div>
    </div>
    </div>
    ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo " 
  ";
        // line 57
        echo "
 
  ";
        // line 60
        echo "  ";
        $this->displayBlock('intern_body', $context, $blocks);
        // line 63
        echo " 
";
    }

    // line 60
    public function block_intern_body($context, array $blocks = array())
    {
        // line 61
        echo " 
  ";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 61,  127 => 60,  122 => 63,  119 => 60,  115 => 57,  112 => 55,  109 => 54,  97 => 45,  93 => 44,  89 => 43,  86 => 42,  81 => 40,  77 => 38,  70 => 33,  53 => 17,  44 => 7,  41 => 6,  34 => 4,  31 => 3,  95 => 50,  92 => 49,  90 => 48,  87 => 47,  43 => 6,  40 => 5,  30 => 2,);
    }
}
