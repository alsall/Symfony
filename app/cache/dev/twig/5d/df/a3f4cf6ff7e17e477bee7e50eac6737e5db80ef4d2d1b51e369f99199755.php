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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avro_csv_import_process", array("alias" => $this->getContext($context, "alias"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rows"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
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
        $context["fieldChoice"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "fields"), "vars"), "prototype", array(), "array"), 'widget');
        // line 21
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "headers"));
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
            $context["index"] = $this->getAttribute($this->getContext($context, "loop"), "index0");
            // line 23
            echo "                        <tr class=\"collection-item\">
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "header"), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo $this->getContext($context, "fieldChoice");
            echo "</td>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rows"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo "                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "row"), $this->getContext($context, "index"), array(), "array"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "delimiter"), 'row');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "filename"), 'row');
        echo "
            </div>
            <table class=\"table-styled table-bordered table-striped table-rounded\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-large btn-primary\"><i class=\"icon-ok icon-white\"></i> Import CSV</button>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avro_csv_import_upload", array("alias" => $this->getContext($context, "alias"))), "html", null, true);
        echo "\" class=\"btn\"><i class=\"icon-arrow-left\"></i> Back</a>
        </div>
    </form>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var headers = ";
        // line 47
        echo $this->getContext($context, "headersJson");
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
        return array (  180 => 47,  172 => 42,  181 => 81,  148 => 69,  137 => 65,  104 => 51,  129 => 64,  126 => 27,  114 => 24,  100 => 33,  65 => 35,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 76,  155 => 34,  113 => 55,  23 => 4,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 31,  84 => 48,  58 => 12,  165 => 38,  161 => 58,  152 => 74,  124 => 62,  118 => 25,  90 => 21,  76 => 31,  127 => 45,  97 => 52,  81 => 47,  77 => 32,  70 => 33,  53 => 15,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 68,  204 => 72,  179 => 84,  159 => 35,  143 => 65,  135 => 29,  119 => 57,  102 => 32,  71 => 19,  67 => 20,  63 => 34,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 43,  138 => 69,  136 => 56,  121 => 61,  117 => 45,  105 => 55,  91 => 50,  62 => 19,  49 => 14,  94 => 51,  89 => 28,  85 => 34,  75 => 43,  68 => 36,  56 => 35,  38 => 8,  26 => 12,  87 => 49,  31 => 3,  21 => 2,  28 => 2,  24 => 7,  25 => 3,  19 => 2,  93 => 47,  88 => 20,  78 => 21,  46 => 9,  44 => 26,  27 => 5,  79 => 25,  72 => 22,  69 => 40,  47 => 9,  40 => 6,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 64,  131 => 61,  123 => 58,  120 => 57,  115 => 56,  111 => 23,  108 => 22,  101 => 38,  98 => 31,  96 => 48,  83 => 17,  74 => 39,  66 => 15,  55 => 11,  52 => 9,  50 => 12,  43 => 7,  41 => 9,  35 => 8,  32 => 7,  29 => 6,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 85,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 66,  144 => 49,  141 => 70,  133 => 55,  130 => 61,  125 => 59,  122 => 26,  116 => 40,  112 => 39,  109 => 40,  106 => 36,  103 => 34,  99 => 32,  95 => 50,  92 => 49,  86 => 45,  82 => 22,  80 => 43,  73 => 23,  64 => 38,  60 => 16,  57 => 12,  54 => 34,  51 => 10,  48 => 12,  45 => 30,  42 => 9,  39 => 6,  36 => 6,  33 => 3,  30 => 2,);
    }
}
