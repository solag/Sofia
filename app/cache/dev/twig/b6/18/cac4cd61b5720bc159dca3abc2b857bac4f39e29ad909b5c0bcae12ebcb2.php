<?php

/* A2FSofiaBundle:Contract:contractview.html.twig */
class __TwigTemplate_b618cac4cd61b5720bc159dca3abc2b857bac4f39e29ad909b5c0bcae12ebcb2 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "startDate", array()), "Y"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "endDate", array()), "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "client", array()), "companyName", array()), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-1 accordionStar\">
                 ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "gti", array()), "code", array()) == "1h")) {
            // line 10
            echo "                     <img id=\"pictoStar\" alt=\"star\" class=\"miniPicto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/star.png"), "html", null, true);
            echo "\" />
                 ";
        }
        // line 12
        echo "             </div>
             <div id=\"creditRestant\" class=\"col-xs-3\">
                 Crédit restant: ";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "initialCredit", array()) - $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "spentCredit", array())), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-offset-2 col-xs-1 accordionPicto\">
                 ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contractType", array()), "code", array()) == "ETO")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contractType", array()), "code", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "startDate", array()), "d/m/Y"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "endDate", array()), "d/m/Y"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-4 accordionLine\">
                ";
        // line 56
        $this->loadTemplate("A2FSofiaBundle:Global:progressbar.html.twig", "A2FSofiaBundle:Contract:contractview.html.twig", 56)->display($context);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "notes", array()), "html", null, true);
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
        return "A2FSofiaBundle:Contract:contractview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 64,  114 => 57,  112 => 56,  101 => 48,  88 => 38,  71 => 24,  67 => 22,  61 => 20,  55 => 18,  53 => 17,  47 => 14,  43 => 12,  37 => 10,  35 => 9,  25 => 6,  19 => 2,);
    }
}
