<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ui/timetable.twig.html */
class __TwigTemplate_3736b27d3053f11464a2a0e627fa87c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "
";
        // line 11
        $context["now"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getToday", [], "any", false, false, false, 11), "format", ["H:i:s"], "method", false, false, false, 11);
        // line 12
        yield "
<div id=\"timetable\" name='tt' x-data='{ ttDate: \"\", ttID: \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gibbonTTID"] ?? null), "html", null, true);
        yield "\", ttRefresh: false, ttPopup: false, ttActiveDay: \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getActiveDay", [], "any", false, false, false, 13), "nameShort", [], "any", false, false, false, 13), "html", null, true);
        yield "\", showCurrentTime: ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "showCurrentTime", [], "any", false, false, false, 13) === "0")) ? ("false") : ("true"));
        yield " }' @ttpopup.window=\"ttPopup = false\">

    <div x-data=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layersToggle"] ?? null), "html", null, true);
        yield "\" class=\"relative\" >

    ";
        // line 17
        if ((($context["format"] ?? null) != "print")) {
            // line 18
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "ui/timetableNav.twig.html");
            yield "
    ";
        }
        // line 20
        yield "
    <div class=\"flex flex-row gap-2 xl:gap-3 w-full mt-4\">
        <div class=\"w-12 flex-col content-center justify-center\">
            <span class=\"block text-xxs text-gray-600\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Week"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getCurrentDate", [], "any", false, false, false, 23), "format", ["W"], "method", false, false, false, 23), "html", null, true);
        yield "</span>
        </div>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getWeekdays", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 27
            yield "
        ";
            // line 28
            $context["timetableDay"] = CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getTimetableDay", [CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 28)], "method", false, false, false, 28);
            // line 29
            yield "
        <div class=\"flex-1\">
            <button @click=\"ttActiveDay = '";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 31), "html", null, true);
            yield "';\" class=\"flex w-full items-center justify-center print:justify-between md:justify-between leading-none py-2 px-3 rounded-t border text-gray-700\" :class=\"{'font-bold md:font-normal bg-white border-gray-400 md:bg-gray-100 ': ttActiveDay == '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 31), "html", null, true);
            yield "', 'font-normal bg-gray-100 border-gray-200 md:border-gray-400': ttActiveDay != '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 31), "html", null, true);
            yield "'}\" 
                ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "color", [], "any", false, false, false, 32)) {
                yield " style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "color", [], "any", false, false, false, 32), "html", null, true);
                yield "; color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "fontColor", [], "any", false, false, false, 32), "html", null, true);
                yield ";\" ";
            }
            // line 33
            yield "            >
                <span class=\"text-xs\">
                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "nameShort", [], "any", false, false, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "nameShortDisplay", [], "any", false, false, false, 35) == "Timetable Day Short Name"))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["timetableDay"] ?? null), "nameShort", [], "any", false, false, false, 35)) : (CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 35))), "html", null, true);
            yield "
                </span>
                <span class=\"hidden print:inline-block md:inline-block text-base font-bold\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 37), "d"), "html", null, true);
            yield "</span>
            </button>
    
        </div>
    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </div>
    
    <div class=\"flex flex-row gap-2 xl:gap-3 w-full\">
    
        <div class=\"w-12 mb-2\">
            <span class=\"inline-block text-xxs text-gray-600\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("All Day Events"), "html", null, true);
        yield "</span>
        </div>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getWeekdays", [], "any", false, false, false, 51));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 52
            yield "
        ";
            // line 53
            $context["isToday"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getToday", [], "any", false, false, false, 53), "format", ["Y-m-d"], "method", false, false, false, 53) == CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 53));
            // line 54
            yield "        
        <div class=\"flex-1 flex-col border-r border-l pb-1 ";
            // line 55
            yield ((($context["isToday"] ?? null)) ? ("bg-yellow-50") : (""));
            yield "\" :class=\"{'flex': ttActiveDay == '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 55), "html", null, true);
            yield "', 'hidden md:flex': ttActiveDay != '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "nameShort", [], "any", false, false, false, 55), "html", null, true);
            yield "'}\">
    
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layers"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["layer"]) {
                // line 58
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["layer"], "getItemsByDate", [$this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 58), "Y-m-d"), true], "method", false, false, false, 58));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 59
                    yield "                    <div class=\"relative\" style=\"top: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "timeToPixels", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "timeStart", [], "any", false, false, false, 59)], "method", false, false, false, 59), "html", null, true);
                    yield "px\">
                    ";
                    // line 60
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "ui/timetableItem.twig.html");
                    yield "
                    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "    
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "    </div>
        
    <div class=\"relative flex flex-row gap-2 xl:gap-3 w-full\">
    
        ";
        // line 71
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "isCurrentWeek", [], "any", false, false, false, 71) && (CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getStartTime", [], "any", false, false, false, 71) <= ($context["now"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getEndTime", [], "any", false, false, false, 71) >= ($context["now"] ?? null))) && (($context["format"] ?? null) != "print"))) {
            // line 72
            yield "
        ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getStartTime", [], "any", false, false, false, 73) < CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getActiveDay", [], "any", false, false, false, 73), "schoolStart", [], "any", false, false, false, 73))) {
                // line 74
                yield "            ";
                $context["dayOffset"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "timeToPixels", [CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getStartTime", [], "any", false, false, false, 74)], "method", false, false, false, 74) - CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "timeToPixels", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getActiveDay", [], "any", false, false, false, 74), "schoolStart", [], "any", false, false, false, 74)], "method", false, false, false, 74));
                // line 75
                yield "        ";
            }
            // line 76
            yield "
        <div x-show=\"showCurrentTime\" class=\"print:hidden absolute ml-1 w-full left-0\" style=\"top: ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "timeToPixels", [($context["now"] ?? null)], "method", false, false, false, 77) + ($context["dayOffset"] ?? null)), "html", null, true);
            yield "px\">
            <div class=\"border-b-2 border-blue-500 w-full\"></div>
            <div class=\"absolute origin-center text-center left-0 -mt-3 rounded-full border border-blue-500 bg-blue-500 w-10 shadow\">
                <span class=\"inline-block text-xxs text-white uppercase leading-loose\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getToday", [], "any", false, false, false, 80), "format", ["G:i"], "method", false, false, false, 80), "html", null, true);
            yield "</span>
            </div>
            <div class=\"absolute origin-center w-1.5 h-1.5 right-0 -mr-1 -mt-1 rounded-full bg-blue-500 shadow\"></div>
        </div>
        ";
        }
        // line 85
        yield "
        <div class=\"w-12\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getTimeRange", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 88
            yield "            <div class=\"leading-none text-center\" style=\"height: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "minutesToPixels", [60], "method", false, false, false, 88), "html", null, true);
            yield "px\">
                <span class=\"block text-xxs text-gray-500 uppercase\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["time"], "format", ["G:i"], "method", false, false, false, 89), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "        </div>

        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["structure"] ?? null), "getWeekdays", [], "any", false, false, false, 94));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 95
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "ui/timetableDay.twig.html");
            yield "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "    </div>

    </div>
</div>
   
<script>
    ";
        // line 103
        if ((($context["format"] ?? null) != "print")) {
            // line 104
            yield "    htmx.onLoad(function (content) {
        \$('.ttItem').draggable({
            containment: '#timetable',
            revert: true,
            zIndex: 50,
            cursor: 'move',
        });
    });
    ";
        }
        // line 113
        yield "</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ui/timetable.twig.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  382 => 113,  371 => 104,  369 => 103,  361 => 97,  344 => 95,  327 => 94,  323 => 92,  314 => 89,  309 => 88,  305 => 87,  301 => 85,  293 => 80,  287 => 77,  284 => 76,  281 => 75,  278 => 74,  276 => 73,  273 => 72,  271 => 71,  265 => 67,  249 => 64,  235 => 63,  218 => 60,  213 => 59,  195 => 58,  178 => 57,  169 => 55,  166 => 54,  164 => 53,  161 => 52,  144 => 51,  138 => 48,  131 => 43,  119 => 37,  114 => 35,  110 => 33,  102 => 32,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  81 => 26,  73 => 23,  68 => 20,  62 => 18,  60 => 17,  55 => 15,  46 => 13,  43 => 12,  41 => 11,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/timetable.twig.html", "/Applications/MAMP/htdocs/SchoolPro/resources/templates/ui/timetable.twig.html");
    }
}
