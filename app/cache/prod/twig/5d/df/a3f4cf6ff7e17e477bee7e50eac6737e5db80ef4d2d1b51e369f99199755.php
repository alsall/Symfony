<?php

/* AvroCsvBundle:Import:mapping.html.twig */
class __TwigTemplate_5ddfa3f4cf6ff7e17e477bee7e50eac6737e5db80ef4d2d1b51e369f99199755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AvroCsvBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page-header\">
        <h1>Map Columns</h1>
    </div>
    <form class=\"form-horizontal\" action=\"";
        // line 6
        if (isset($context["alias"])) { $_alias_ = $context["alias"]; } else { $_alias_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avro_csv_import_process", array("alias" => $_alias_)), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo ">
        <div id=\"error-container\"></div>
        <div class=\"form-content\">
            <table class=\"table-styled table-bordered table-striped table-rounded\">
                <thead>
                    <tr>
                        <th>Your Column Headings</th>
                        <th>Field Mapping</th>
                        ";
        // line 14
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_rows_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 15
            echo "                            <th>Sample ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "</th>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </tr>
                </thead>
                <tbody class=\"collection\">
                    ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context["fieldChoice"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "fields"), "vars"), "prototype", array(), "array"), 'widget');
        // line 21
        echo "                    ";
        if (isset($context["headers"])) { $_headers_ = $context["headers"]; } else { $_headers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_headers_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 22
            echo "                        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            $context["index"] = $this->getAttribute($_loop_, "index0");
            // line 23
            echo "                        <tr class=\"collection-item\">
                            <td>";
            // line 24
            if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
            echo twig_escape_filter($this->env, $_header_, "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            if (isset($context["fieldChoice"])) { $_fieldChoice_ = $context["fieldChoice"]; } else { $_fieldChoice_ = null; }
            echo $_fieldChoice_;
            echo "</td>
                            ";
            // line 26
            if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_rows_);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo "                                <td>";
                if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_row_, $_index_, array(), "array"), "html", null, true);
                echo "</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </tbody>
            </table>
            <div class=\"hide\">
                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "delimiter"), 'row');
        echo "
                ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "filename"), 'row');
        echo "
            </div>
            <table class=\"table-styled table-bordered table-striped table-rounded\">
            ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'widget');
        echo "
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-large btn-primary\"><i class=\"icon-ok icon-white\"></i> Import CSV</button>
            <a href=\"";
        // line 42
        if (isset($context["alias"])) { $_alias_ = $context["alias"]; } else { $_alias_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avro_csv_import_upload", array("alias" => $_alias_)), "html", null, true);
        echo "\" class=\"btn\"><i class=\"icon-arrow-left\"></i> Back</a>
        </div>
    </form>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var headers = ";
        // line 47
        if (isset($context["headersJson"])) { $_headersJson_ = $context["headersJson"]; } else { $_headersJson_ = null; }
        echo $_headersJson_;
        echo ";
            var fieldSelectors = \$('form .collection').find('select');
            \$.each(headers, function(k, v) {
                \$(fieldSelectors[k]).find('option[value=\"' + v + '\"]').attr('selected', 'selected');
            });

            \$('form').submit(function() {
                // rename collection items
                \$(this).find('.collection').each(function() {
                    var itemIndex = 0;
                    \$(this).find('.collection-item').each(function() {
                        \$(this).find('input, select, textarea').each(function() {
                            if (\$(this).attr('id') && \$(this).attr('name')) {
                                \$(this).attr('id', \$(this).attr('id').replace(/__name__/g, itemIndex));
                                \$(this).attr('name', \$(this).attr('name').replace(/__name__/g, itemIndex));
                            }
                        });
                        itemIndex++;
                    });
                });
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AvroCsvBundle:Import:mapping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 38,  172 => 35,  167 => 34,  229 => 84,  220 => 80,  203 => 75,  159 => 61,  154 => 60,  145 => 58,  135 => 55,  125 => 51,  64 => 16,  230 => 88,  209 => 81,  206 => 80,  182 => 73,  126 => 25,  144 => 39,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 81,  191 => 72,  176 => 69,  161 => 66,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 52,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 74,  190 => 75,  175 => 72,  170 => 71,  165 => 65,  99 => 45,  87 => 17,  82 => 23,  199 => 66,  185 => 74,  95 => 21,  188 => 75,  174 => 76,  168 => 66,  156 => 65,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 76,  184 => 70,  169 => 70,  151 => 64,  123 => 44,  119 => 40,  113 => 52,  94 => 47,  86 => 24,  83 => 51,  74 => 31,  23 => 4,  61 => 31,  103 => 40,  73 => 38,  68 => 11,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 26,  122 => 56,  117 => 55,  108 => 28,  102 => 52,  92 => 20,  84 => 33,  72 => 34,  69 => 15,  51 => 14,  48 => 11,  35 => 6,  29 => 4,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 102,  249 => 74,  247 => 104,  237 => 73,  204 => 79,  198 => 87,  194 => 64,  150 => 63,  147 => 29,  127 => 34,  112 => 48,  96 => 27,  76 => 22,  71 => 20,  39 => 7,  227 => 68,  224 => 85,  221 => 84,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 71,  181 => 69,  178 => 64,  173 => 58,  162 => 31,  158 => 56,  155 => 64,  152 => 45,  142 => 57,  136 => 27,  133 => 46,  130 => 42,  120 => 40,  105 => 27,  75 => 35,  53 => 13,  114 => 22,  109 => 47,  106 => 27,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 14,  28 => 2,  55 => 10,  38 => 5,  50 => 9,  110 => 51,  100 => 49,  89 => 34,  65 => 12,  63 => 16,  58 => 14,  34 => 4,  26 => 12,  24 => 7,  25 => 18,  19 => 2,  98 => 29,  88 => 43,  80 => 15,  78 => 36,  46 => 25,  44 => 9,  36 => 6,  32 => 25,  27 => 5,  22 => 3,  60 => 11,  57 => 12,  43 => 8,  40 => 6,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 77,  202 => 98,  196 => 47,  193 => 63,  187 => 42,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 46,  149 => 59,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 23,  115 => 39,  111 => 29,  107 => 53,  104 => 46,  97 => 48,  93 => 43,  90 => 53,  81 => 28,  70 => 20,  66 => 17,  62 => 35,  59 => 18,  56 => 33,  52 => 12,  49 => 26,  45 => 10,  41 => 7,  37 => 7,  33 => 4,  30 => 2,);
    }
}
