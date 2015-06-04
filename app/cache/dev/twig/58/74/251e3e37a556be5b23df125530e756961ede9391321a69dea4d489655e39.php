<?php

/* A2FSofiaBundle::notes.html.twig */
class __TwigTemplate_5874251e3e37a556be5b23df125530e756961ede9391321a69dea4d489655e39 extends Twig_Template
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
        echo "<div class=\"col-xs-12\">
    <div class=\"row\">
        <div class=\"col-xs-12 accordionSummaryHeader\">
            Remarques
        </div>
        <div class=\"col-xs-12 accordionSummaryContent\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "notes", array()), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle::notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
