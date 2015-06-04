<?php

/* A2FSofiaBundle:Contract:a2fcontractview.html.twig */
class __TwigTemplate_fa22a452b343f97c9bcd38ba7779d32e043d4f50a25b824b5a2f0cfd096552c1 extends Twig_Template
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
    
        <div class=\"row accordionHeader\">
             <div class=\"col-xs-3 accordionLabel\">
                 ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startDate", array()), "Y"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "endDate", array()), "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "client", array()), "companyName", array()), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-1 accordionStar\">
                 ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "gti", array()), "code", array()) == "1h")) {
            // line 10
            echo "                     <img id=\"pictoStar\" alt=\"star\" class=\"miniPicto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/star.png"), "html", null, true);
            echo "\" />
                 ";
        }
        // line 12
        echo "             </div>
             <div id=\"creditRestant\" class=\"col-xs-offset-1 col-xs-4\">
                 Crédit restant: ";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "initialCredit", array()) - $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "spentCredit", array())), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-offset-1 col-xs-1 accordionPicto\">
                 ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractType", array()), "code", array()) == "ETO")) {
            // line 18
            echo "                    <img alt=\"ETO\" class=\"miniPicto statusPicto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
            echo "\" />
                 ";
        } else {
            // line 20
            echo "                     <img alt=\"\" class=\"miniPicto statusPicto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusOrange.png"), "html", null, true);
            echo "\" />
                 ";
        }
        // line 22
        echo "             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractType", array()), "code", array()), "html", null, true);
        echo "
             </div>
        </div>
             
        <div class=\"row accordionBody\">
            <div class=\"col-xs-8 accordionLine\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"col-xs-6 accordionLine\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 accordionSummaryHeader\">
                                    Date de début
                                </div>
                                <div class=\"col-xs-12 accordionSummaryContent\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startDate", array()), "d/m/Y"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-6 accordionLine\">
                             <div class=\"row\">
                                <div class=\"col-xs-12 accordionSummaryHeader\">
                                    Date de fin
                                </div>
                                <div class=\"col-xs-12 accordionSummaryContent\">
                                    ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "endDate", array()), "d/m/Y"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-4 accordionLine\">
                ";
        // line 57
        echo "            </div>
           <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 accordionSummaryHeader\">
                    Remarques
                </div>
                <div class=\"col-xs-12 accordionSummaryContent\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array()), "html", null, true);
        echo "
                </div>
            </div>
            </div>
            <div class=\"col-xs-12 toDetailedView\">
                <a href=\"#\"/>Profil client</a>
            </div>
        </div>
            
        
    
            
            
   
     


    




";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:a2fcontractview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 64,  112 => 57,  101 => 48,  88 => 38,  71 => 24,  67 => 22,  61 => 20,  55 => 18,  53 => 17,  47 => 14,  43 => 12,  37 => 10,  35 => 9,  25 => 6,  19 => 2,);
    }
}
