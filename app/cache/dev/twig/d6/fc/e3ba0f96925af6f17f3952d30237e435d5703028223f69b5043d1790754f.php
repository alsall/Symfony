<?php

/* PnpcTortueHermannBundle:TortueHermann:request_form.html.twig */
class __TwigTemplate_d6fce3ba0f96925af6f17f3952d30237e435d5703028223f69b5043d1790754f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcTortueHermannBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcTortueHermannBundle::layout.html.twig";
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
        return "PnpcTortueHermannBundle:TortueHermann:request_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  172 => 42,  181 => 81,  148 => 69,  137 => 65,  104 => 51,  129 => 64,  126 => 27,  114 => 24,  100 => 33,  65 => 35,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 76,  155 => 34,  113 => 55,  23 => 4,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 72,  84 => 48,  58 => 11,  165 => 38,  161 => 58,  152 => 74,  124 => 62,  118 => 25,  90 => 30,  76 => 31,  127 => 59,  97 => 31,  81 => 40,  77 => 22,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 68,  204 => 72,  179 => 84,  159 => 76,  143 => 67,  135 => 29,  119 => 57,  102 => 32,  71 => 19,  67 => 20,  63 => 29,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 65,  166 => 64,  163 => 78,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 45,  105 => 33,  91 => 50,  62 => 19,  49 => 13,  94 => 51,  89 => 43,  85 => 34,  75 => 43,  68 => 23,  56 => 35,  38 => 5,  26 => 12,  87 => 49,  31 => 3,  21 => 2,  28 => 2,  24 => 7,  25 => 3,  19 => 2,  93 => 44,  88 => 49,  78 => 21,  46 => 8,  44 => 7,  27 => 5,  79 => 28,  72 => 46,  69 => 17,  47 => 11,  40 => 6,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 57,  115 => 56,  111 => 55,  108 => 22,  101 => 38,  98 => 31,  96 => 48,  83 => 17,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 7,  43 => 7,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 74,  154 => 73,  149 => 73,  147 => 66,  144 => 49,  141 => 70,  133 => 55,  130 => 61,  125 => 59,  122 => 63,  116 => 40,  112 => 55,  109 => 54,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 15,  60 => 18,  57 => 12,  54 => 34,  51 => 12,  48 => 11,  45 => 30,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
