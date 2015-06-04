<?php

/* A2FSofiaBundle:Contract:contractsectionheader.html.twig */
class __TwigTemplate_ed7096e05132838aadb7d3a969ac904607c70f7b02333c023f928375482a4254 extends Twig_Template
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
        <div id=\"contractHeader\" class=\"col-xs-12 sectionHeader\">
            <div class=\"row\">
                <div class=\"col-xs-11 no-padding\">
                    <div id=\"\" class=\"col-xs-1 boxPictoHeader\">
                        <img id=\"pictoContract\" class=\"picto\" alt=\"Contrats\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Contract.png"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"col-xs-11\">
                        <h3>Contrats</h3>
                    </div>
                </div>
                <div class=\"col-xs-1 boxPictoAjouterHeader\">
                    <div class=\"col-xs-12 boxPictoAjouterHeader\">
                        <a href=\"#\">
                            <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouvel Incident\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Add.png"), "html", null, true);
        echo "\" />
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:contractsectionheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  26 => 6,  19 => 1,);
    }
}
