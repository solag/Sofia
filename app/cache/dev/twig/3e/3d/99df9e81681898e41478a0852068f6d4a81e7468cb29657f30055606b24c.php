<?php

/* A2FSofiaBundle:Contract:a2fclientcontractlist.html.twig */
class __TwigTemplate_3e3d99df9e81681898e41478a0852068f6d4a81e7468cb29657f30055606b24c extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 6
        $this->loadTemplate("A2FSofiaBundle:Contract:contractsectionheader.html.twig", "A2FSofiaBundle:Contract:a2fclientcontractlist.html.twig", 6)->display($context);
        // line 7
        echo "            ";
        $this->loadTemplate("A2FSofiaBundle:Contract:clientcontractview.html.twig", "A2FSofiaBundle:Contract:a2fclientcontractlist.html.twig", 7)->display($context);
        // line 8
        echo "            ";
        $this->loadTemplate("A2FSofiabundle::notes.html.twig", "A2FSofiaBundle:Contract:a2fclientcontractlist.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
    </div>
     <div class=\"row\">
            <div class=\"col-xs-12 fullList\">
                <a href=\"#\">Liste complète</a>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:a2fclientcontractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 4,  19 => 2,);
    }
}
