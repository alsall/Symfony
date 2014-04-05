<?php

/* PnpcScopsBundle:Scops:diapo.html.twig */
class __TwigTemplate_292a1739151c8121289067a81f3678469e3cc0c3887e0701f653ee0f7f5edf25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcScopsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcScopsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "photos
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <h4>Galerie photos</h4>
";
        // line 7
        $this->displayBlock('intern_body', $context, $blocks);
        // line 35
        echo "\t";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 9
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_uploadImage");
        echo "\" class=\"btn\">Ajouter une photo</a><br><br>
";
        // line 11
        echo "    <div id=\"myCarousel\" class=\"carousel slide\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t</ol>
\t\t<!-- Carousel items -->
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"active item\"><img alt=\"\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/PRL117.jpg"), "html", null, true);
        echo "\"></img>
\t\t\t\t<div class=\"carousel-caption\"><p>Image oiseau</p></div></div>
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 22
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"item\"><img alt=\"\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "galerie"), "path"), "html", null, true);
            echo "\" ></img>
\t\t\t\t\t\t<div class=\"carousel-caption\"><p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "galerie"), "commentaire"), "html", null, true);
            echo ". Image postée par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "galerie"), "auteur"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>
\t\t<!-- Carousel nav -->
\t\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:diapo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  86 => 24,  80 => 23,  77 => 22,  73 => 21,  68 => 19,  58 => 11,  53 => 9,  50 => 7,  46 => 35,  44 => 7,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
