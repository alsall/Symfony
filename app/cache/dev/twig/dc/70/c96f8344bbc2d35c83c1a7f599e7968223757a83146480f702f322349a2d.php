<?php

/* PnpcScopsBundle:Scops:request_form.html.twig */
class __TwigTemplate_dc70c96f8344bbc2d35c83c1a7f599e7968223757a83146480f702f322349a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcScopsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  affichage  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_request_result");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t<div>
\t\t<span>
\t\t\t<select name=\"champ\">
\t\t\t\t<option value=\"annee\">Année</option>
\t\t\t\t<option value=\"num_semaine\">N° Semaine</option>
\t\t\t\t<option value=\"date\">Date</option>
\t\t\t\t<option value=\"lieudit\">Lieudit</option>
\t\t\t\t<option value=\"action\">Action</option>
\t\t\t\t<option value=\"bague\">Bague</option>
\t\t\t\t<option value=\"nom_scientifique\">Nom Scientifique</option>
\t\t\t\t<option value=\"nom_vernaculaire\">Nom Vernaculaire</option>
\t\t\t\t<option value=\"secteur\">Secteur</option>
\t\t\t\t<option value=\"bg\">Bg</option>
\t\t\t</select>
\t\t\t
\t\t\t<input type=\"text\" id=\"champ_0\" name=\"mot\">
\t\t</span>
\t\t<span>
\t\t<a href=\"javascript:create_champ(1)\">Ajout</a>
\t\t</span>
\t</div>\t\t\t\t\t\t\t
\t<input type=\"submit\" value=\"Envoyer\" />
</form>\t\t\t\t\t\t
";
        // line 46
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
 
";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:request_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 46,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
