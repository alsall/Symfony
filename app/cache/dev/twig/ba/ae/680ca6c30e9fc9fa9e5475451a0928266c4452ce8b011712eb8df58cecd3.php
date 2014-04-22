<?php

/* PnpcUserBundle::layout.html.twig */
class __TwigTemplate_baae680ca6c30e9fc9fa9e5475451a0928266c4452ce8b011712eb8df58cecd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "


  ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo " 
  ";
        // line 7
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
  ";
        // line 14
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "  
  ";
    }

    public function getTemplateName()
    {
        return "PnpcUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  61 => 14,  44 => 8,  36 => 5,  26 => 18,  24 => 4,  21 => 2,  79 => 31,  74 => 29,  58 => 12,  53 => 14,  49 => 9,  46 => 12,  42 => 10,  39 => 7,  33 => 4,  31 => 6,  28 => 5,);
    }
}
