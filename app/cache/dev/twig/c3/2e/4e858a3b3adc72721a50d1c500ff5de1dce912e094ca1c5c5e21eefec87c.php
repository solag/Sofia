<?php

/* A2FSofiaBundle:Contract:clientcontractview.html.twig */
class __TwigTemplate_c32e4e858a3b3adc72721a50d1c500ff5de1dce912e094ca1c5c5e21eefec87c extends Twig_Template
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
        echo "         <div class=\"row accordionHeader\">
             <div class=\"col-xs-2 accordionLabel\">
                 Nom contrat - GTI
             </div>
             <div class=\"col-xs-1\">
                 <img alt=\"star\" class=\"miniPicto\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/start.png"), "html", null, true);
        echo "\" />
             </div>
             <div class=\"col-xs-offset-2 col-xs-3\">
                 Années
             </div>
             <div class=\"col-xs-offset-2 col-xs-1 accordionPicto\">
                 <img alt=\"Actif\" class=\"miniPicto statusPicto\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
        echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Actif/inactif
             </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-10\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"col-xs-6\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 accordionSummaryHeader\">
                                    Date de début
                                </div>
                                <div class=\"col-xs-12 accordionSummaryContent\">
                                    25/01/2015
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-6\">
                             <div class=\"row\">
                                <div class=\"col-xs-12 accordionSummaryHeader\">
                                    Date de fin
                                </div>
                                <div class=\"col-xs-12 accordionSummaryContent\">
                                    24/01/2016
                                </div>
                            </div>
                        </div>
                         <div class=\"col-xs-6\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 accordionSummaryHeader\">
                                    Crédit initial
                                </div>
                                <div class=\"col-xs-12 accordionSummaryContent\">
                                    160 tickets - 5 jours
                                </div>
                            </div>
                             <div class=\"col-xs-6\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Crédit consommé
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        25 tickets
                                    </div>
                                </div>
                                <div class=\"col-xs-6\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 accordionSummaryHeader\">
                                            Crédit restant
                                        </div>
                                        <div class=\"col-xs-12 accordionSummaryContent\">
                                           135 tickets
                                        </div>
                                    </div>
                                </div>
                                 <div class=\"col-xs-6\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 accordionSummaryHeader\">
                                            Type de contrat
                                        </div>
                                        <div class=\"col-xs-12 accordionSummaryContent\">
                                            ETO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-2\">
                <a href=\"#\">Télécharger le contrat</a>
            </div>
        </div>
            
   
     


    




";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:clientcontractview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  26 => 7,  19 => 2,);
    }
}
