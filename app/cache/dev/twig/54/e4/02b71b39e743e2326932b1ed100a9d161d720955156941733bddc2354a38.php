<?php

/* A2FSofiaBundle::modeleview.html.twig */
class __TwigTemplate_54e402b71b39e743e2326932b1ed100a9d161d720955156941733bddc2354a38 extends Twig_Template
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
        echo "

<div class=\"row\">
    <div class=\"col-xs-12\">
         <div class=\"row accordionHeader\">
             <div class=\"col-xs-2 accordionLabel\">
                 Label
             </div>
             <div class=\"col-xs-offset-8 col-xs-1 accordionPicto\">
                 <img alt=\"Résolu\" class=\"miniPicto statusPicto\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
        echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Status
             </div>
        </div>
        <div class=\"row accordionBody\">
            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</div>
     


    



";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle::modeleview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
