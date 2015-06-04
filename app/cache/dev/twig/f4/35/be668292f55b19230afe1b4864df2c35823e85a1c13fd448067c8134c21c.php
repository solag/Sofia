<?php

/* A2FSofiaBundle:Contract:clientcontractlist.html.twig */
class __TwigTemplate_f435be668292f55b19230afe1b4864df2c35823e85a1c13fd448067c8134c21c extends Twig_Template
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
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 5
        $this->loadTemplate("A2FSofiaBundle:Contract:contractsectionheader.html.twig", "A2FSofiaBundle:Contract:clientcontractlist.html.twig", 5)->display($context);
        // line 6
        echo "            ";
        $this->loadTemplate("A2FSofiaBundle:Contract:clientcontractview.html.twig", "A2FSofiaBundle:Contract:clientcontractlist.html.twig", 6)->display($context);
        // line 7
        echo "        </div>
    </div>
    <div class=\"row\">
            <div class=\"col-xs-12 fullList\">
                <a href=\"#\">Liste complète</a>
            </div>
    </div>
";
        // line 15
        echo "

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:clientcontractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  28 => 7,  25 => 6,  23 => 5,  19 => 3,);
    }
}
