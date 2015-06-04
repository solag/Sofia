<?php

/* A2FSofiaBundle:Global:progressbar.html.twig */
class __TwigTemplate_5daf1a688a6b1414645f08711c9bdfddf7ca3196fb1c565e7656113939335da9 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"ProgressBar col-xs-12 \" data-length=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_round(((($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "initialCredit", array()) - $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "spentCredit", array())) / $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "initialCredit", array())) * 100),  -1, "common"), "html", null, true);
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Global:progressbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
