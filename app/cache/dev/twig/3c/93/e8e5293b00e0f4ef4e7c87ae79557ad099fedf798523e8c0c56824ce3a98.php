<?php

/* A2FSofiaBundle:ContractType:contracttypeview.html.twig */
class __TwigTemplate_3c93e8e5293b00e0f4ef4e7c87ae79557ad099fedf798523e8c0c56824ce3a98 extends Twig_Template
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
    <div class=\"col-xs-12\">
         <div class=\"row accordionHeader\">
             <div id=\"accordionHeaderContractType\" class=\"col-xs-12 accordionLabel\">
                ETO
             </div>
        </div>
        <div class=\"row accordionBody\">
            <div class=\"col-xs-11 accordionLine\">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Intitulé
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        Expertise Tout Oracle
                    </div>
                </div>
            </div>
            <div class=\"col-xs-1 boxPictoUpdate\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("a2fSofia_contracttype_update");
        echo "\" >
                    <img alt=\"Modifier\" class=\"miniPicto\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/A2FSofia/images/Update.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
            ";
        // line 24
        $this->loadTemplate("A2FSofiaBundle::notes.html.twig", "A2FSofiaBundle:ContractType:contracttypeview.html.twig", 24)->display($context);
        // line 25
        echo "        </div>
            
    </div>
</div>
     


    



";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:ContractType:contracttypeview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 25,  50 => 24,  44 => 21,  40 => 20,  19 => 1,);
    }
}
