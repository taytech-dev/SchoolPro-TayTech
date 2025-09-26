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

/* fullscreen.twig.html */
class __TwigTemplate_38b77e90f99cc9d6969d55815ffb0788 extends Template
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
        if ((($context["iframe"] ?? null) == "true")) {
            // line 11
            yield "<iframe src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iframeSrc"] ?? null), "html", null, true);
            yield "\" width=\"100%\" height=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((array_key_exists("iframeHeight", $context)) ? (Twig\Extension\CoreExtension::default(($context["iframeHeight"] ?? null), 700)) : (700)) - 100), "html", null, true);
            yield "\" seamless></iframe>
";
        } else {
            // line 13
            yield "
<!DOCTYPE html>
<html>
    <head>
        ";
            // line 17
            yield from             $this->loadTemplate("head.twig.html", "fullscreen.twig.html", 17)->unwrap()->yieldBlock("meta", $context);
            yield "
        ";
            // line 18
            yield from             $this->loadTemplate("head.twig.html", "fullscreen.twig.html", 18)->unwrap()->yieldBlock("styles", $context);
            yield "
    </head>
    <body style='background-image: none'>

        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
                // line 23
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["alerts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                    // line 24
                    yield "                <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "\">";
                    yield $context["text"];
                    yield "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "
        ";
            // line 28
            yield Twig\Extension\CoreExtension::join(($context["content"] ?? null), "
");
            yield "
    </body>
</html>

";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "fullscreen.twig.html";
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
        return array (  94 => 28,  91 => 27,  85 => 26,  74 => 24,  69 => 23,  65 => 22,  58 => 18,  54 => 17,  48 => 13,  40 => 11,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/
-->#}
{% if iframe == 'true' %}
<iframe src=\"{{ iframeSrc }}\" width=\"100%\" height=\"{{ iframeHeight|default(700) - 100 }}\" seamless></iframe>
{% else %}

<!DOCTYPE html>
<html>
    <head>
        {{ block('meta', 'head.twig.html') }}
        {{ block('styles', 'head.twig.html') }}
    </head>
    <body style='background-image: none'>

        {% for type, alerts in page.alerts %}
            {% for text in alerts %}
                <div class=\"{{ type }}\">{{ text|raw }}</div>
            {% endfor %}
        {% endfor %}

        {{ content|join(\"\\n\")|raw }}
    </body>
</html>

{% endif %}
", "fullscreen.twig.html", "/Applications/MAMP/htdocs/SchoolPro/resources/templates/fullscreen.twig.html");
    }
}
