<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f68ee6bd4ec3b2909406a90e4cef7bba6b4b5bddc3c524b2de92849ab9829a45 */
class __TwigTemplate_30efc05b4fd287a09096407dea3e4ef60ed2e9f0255b69e4c97010c5b785d28b extends Template
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
        // line 1
        echo "<p>Hi, my name is ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo ".</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__f68ee6bd4ec3b2909406a90e4cef7bba6b4b5bddc3c524b2de92849ab9829a45";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f68ee6bd4ec3b2909406a90e4cef7bba6b4b5bddc3c524b2de92849ab9829a45", "");
    }
}
