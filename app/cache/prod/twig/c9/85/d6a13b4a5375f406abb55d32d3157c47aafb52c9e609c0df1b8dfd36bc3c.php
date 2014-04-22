<?php

/* PnpcUserBundle:User:login.html.twig */
class __TwigTemplate_c985d6a13b4a5375f406abb55d32d3157c47aafb52c9e609c0df1b8dfd36bc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 7
            echo "    <div>";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_error_, array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 12
        echo "
    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <label>Equipe de Baguage</label>
    <select name=\"choix\">
  \t\t<option selected disabled>--------choix de l'équipe--------</option>
  \t\t<option value=\"scops\">Scops</option>
  \t\t<option value=\"tortue\">Tortue d'Hermann</option>
  \t\t<option value=\"cistude\">Cistude d'Europe</option>
  \t\t<option value=\"admin\">Administration</option>
\t</select> <br />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "PnpcUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  21 => 2,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 36,  94 => 35,  79 => 32,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 47,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 73,  214 => 70,  182 => 58,  169 => 53,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 31,  188 => 83,  168 => 73,  156 => 65,  151 => 64,  132 => 58,  42 => 8,  103 => 40,  68 => 19,  174 => 54,  170 => 71,  153 => 57,  139 => 17,  128 => 45,  125 => 8,  95 => 50,  91 => 41,  73 => 46,  119 => 40,  86 => 26,  64 => 14,  61 => 16,  54 => 13,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 66,  143 => 43,  138 => 47,  134 => 43,  131 => 42,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 49,  84 => 33,  72 => 15,  69 => 30,  51 => 13,  48 => 12,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 56,  147 => 51,  127 => 47,  112 => 54,  96 => 25,  76 => 24,  71 => 15,  39 => 7,  227 => 92,  224 => 72,  221 => 90,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 60,  158 => 59,  155 => 58,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 9,  114 => 39,  109 => 38,  106 => 20,  101 => 19,  85 => 22,  77 => 29,  67 => 15,  47 => 11,  28 => 5,  55 => 14,  38 => 5,  50 => 11,  110 => 56,  100 => 27,  89 => 34,  65 => 16,  63 => 19,  58 => 18,  34 => 7,  26 => 18,  24 => 4,  25 => 3,  19 => 1,  98 => 39,  88 => 37,  80 => 15,  78 => 22,  46 => 10,  44 => 10,  36 => 5,  32 => 4,  27 => 3,  22 => 2,  60 => 14,  57 => 12,  43 => 5,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 80,  211 => 84,  208 => 70,  202 => 66,  196 => 73,  193 => 63,  187 => 62,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 49,  157 => 48,  149 => 49,  146 => 63,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 37,  97 => 51,  93 => 38,  90 => 48,  81 => 25,  70 => 23,  66 => 16,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 9,  37 => 4,  33 => 4,  30 => 2,);
    }
}
