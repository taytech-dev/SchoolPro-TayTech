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

/* footer.twig.html */
class __TwigTemplate_1dd11e6bf9acc2e32edf9d2d2751111d extends Template
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
        // line 25
        yield "
<span class=\"inline-block font-bold\">
    ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Powered by"), "html", null, true);
        yield " <a class=\"text-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org'>TayTech Tech</a> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["versionName"] ?? null), "html", null, true);
        yield "<br/>
</span> 
<br/>
<span class=\"text-xs\">
    ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Founded by TayTech at Nkumba University"), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Built by Em Tyler and the TayTech Dev Team"), "html", null, true);
        yield "<br/>
    Copyright © <a class=\"text-";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='http://gibbonedu.org'>TayTech School Tech Ltd.</a> 2025-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | TayTech™ School Tech Ltd. (Uganda)<br/>
    ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Created under the"), "html", null, true);
        yield " <a class=\"text-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://www.gnu.org/licenses/gpl.html'>TayTech™ Vision</a> |
    <a class=\"text-";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/about/#ourTeam'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Credits"), "html", null, true);
        yield "</a> | 
    <a class=\"text-";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/about/#translators'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Translators"), "html", null, true);
        yield "</a> | 
    <a class=\"text-";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/support/'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Support"), "html", null, true);
        yield "</a>
    <br/>
    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["footerThemeAuthor"] ?? null), "html", null, true);
        yield "<br/>
</span>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig.html";
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
        return array (  90 => 38,  83 => 36,  77 => 35,  71 => 34,  65 => 33,  59 => 32,  53 => 31,  42 => 27,  38 => 25,);
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


Dear theme editors,

Gibbon is an open source project, freely available for you to modify and share. 
However, it's important to keep the information you see here in the footer intact. 
This is vital legal information for us to have, as it shows who created Gibbon, 
and that it is released under the GNU GPL.

Please keep the names and copyrights as they're shown here. You are welcome to 
edit the style of the text to suit your theme.

Thank you,
The Gibbon Team

-->#}

<span class=\"inline-block font-bold\">
    {{ __('Powered by') }} <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org'>TayTech Tech</a> {{ versionName }}<br/>
</span> 
<br/>
<span class=\"text-xs\">
    {{ __('Founded by TayTech at Nkumba University') }} | {{ __('Built by Em Tyler and the TayTech Dev Team') }}<br/>
    Copyright © <a class=\"text-{{ themeColour }}-800\" target='_blank' href='http://gibbonedu.org'>TayTech School Tech Ltd.</a> 2025-{{ 'now'|date('Y') }} | TayTech™ School Tech Ltd. (Uganda)<br/>
    {{ __('Created under the') }} <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://www.gnu.org/licenses/gpl.html'>TayTech™ Vision</a> |
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/about/#ourTeam'>{{ __('Credits') }}</a> | 
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/about/#translators'>{{ __('Translators') }}</a> | 
    <a class=\"text-{{ themeColour }}-800\" target='_blank' href='https://gibbonedu.org/support/'>{{ __('Support') }}</a>
    <br/>
    {{ footerThemeAuthor }}<br/>
</span>
", "footer.twig.html", "/Applications/MAMP/htdocs/SchoolPro/resources/templates/footer.twig.html");
    }
}
