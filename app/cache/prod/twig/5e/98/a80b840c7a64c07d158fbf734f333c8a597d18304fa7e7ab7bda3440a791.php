<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_5e98a80b840c7a64c07d158fbf734f333c8a597d18304fa7e7ab7bda3440a791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"get\" action=\"";
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        if (isset($context["filterFieldName"])) { $_filterFieldName_ = $context["filterFieldName"]; } else { $_filterFieldName_ = null; }
        echo twig_escape_filter($this->env, $_filterFieldName_, "html", null, true);
        echo "\">
        ";
        // line 4
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fields_);
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $_field_, "html", null, true);
            echo "\"";
            if (isset($context["selectedField"])) { $_selectedField_ = $context["selectedField"]; } else { $_selectedField_ = null; }
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($_selectedField_ == $_field_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        if (isset($context["selectedValue"])) { $_selectedValue_ = $context["selectedValue"]; } else { $_selectedValue_ = null; }
        echo twig_escape_filter($this->env, $_selectedValue_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["filterValueName"])) { $_filterValueName_ = $context["filterValueName"]; } else { $_filterValueName_ = null; }
        echo twig_escape_filter($this->env, $_filterValueName_, "html", null, true);
        echo "\" />

    <button>";
        // line 11
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_options_, "button"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  220 => 80,  203 => 75,  159 => 61,  154 => 60,  145 => 58,  135 => 55,  125 => 51,  64 => 32,  230 => 88,  209 => 81,  206 => 80,  182 => 73,  126 => 55,  144 => 39,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 81,  191 => 72,  176 => 69,  161 => 66,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 52,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 74,  190 => 75,  175 => 72,  170 => 71,  165 => 65,  99 => 45,  87 => 39,  82 => 23,  199 => 66,  185 => 74,  95 => 30,  188 => 75,  174 => 76,  168 => 66,  156 => 65,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 76,  184 => 70,  169 => 70,  151 => 64,  123 => 44,  119 => 40,  113 => 52,  94 => 47,  86 => 52,  83 => 51,  74 => 31,  23 => 2,  61 => 31,  103 => 40,  73 => 38,  68 => 11,  54 => 13,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 35,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 23,  84 => 33,  72 => 34,  69 => 30,  51 => 11,  48 => 11,  35 => 26,  29 => 20,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 102,  249 => 74,  247 => 104,  237 => 73,  204 => 79,  198 => 87,  194 => 64,  150 => 63,  147 => 44,  127 => 34,  112 => 48,  96 => 44,  76 => 39,  71 => 18,  39 => 7,  227 => 68,  224 => 85,  221 => 84,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 71,  181 => 69,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 64,  152 => 45,  142 => 57,  136 => 59,  133 => 46,  130 => 42,  120 => 40,  105 => 50,  75 => 35,  53 => 13,  114 => 30,  109 => 47,  106 => 27,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 29,  28 => 5,  55 => 7,  38 => 5,  50 => 30,  110 => 51,  100 => 49,  89 => 34,  65 => 36,  63 => 16,  58 => 30,  34 => 22,  26 => 3,  24 => 4,  25 => 18,  19 => 1,  98 => 39,  88 => 43,  80 => 15,  78 => 36,  46 => 25,  44 => 6,  36 => 5,  32 => 25,  27 => 12,  22 => 17,  60 => 14,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 77,  202 => 98,  196 => 73,  193 => 63,  187 => 71,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 46,  149 => 59,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 43,  115 => 39,  111 => 29,  107 => 53,  104 => 46,  97 => 48,  93 => 43,  90 => 53,  81 => 28,  70 => 23,  66 => 17,  62 => 35,  59 => 9,  56 => 33,  52 => 10,  49 => 26,  45 => 10,  41 => 6,  37 => 12,  33 => 4,  30 => 24,);
    }
}
