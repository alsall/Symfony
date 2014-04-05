<?php

/* AvroCsvBundle:Import:upload.html.twig */
class __TwigTemplate_ffc31f1f64a220b6c6342bd607d0c8721c1edc5698e9b040bb2703cc98fa1777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AvroCsvBundle::layout.html.twig");

        $this->blocks = array(
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvroCsvBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_intern_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page-header\">
        <h1>Import ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('CaseExtension')->toTitleCase($this->getContext($context, "alias")), "html", null, true);
        echo "s</h1>
    </div>
    <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avro_csv_import_mapping", array("alias" => $this->getContext($context, "alias"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        <div id=\"error-container\"></div>
        <div class=\"form-content\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "delimiter"), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "filename"), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-arrow-right icon-white\"></i> Next</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AvroCsvBundle:Import:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  51 => 10,  47 => 9,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
