<?php

/* A2FSofiaBundle:Incident:incidentview.html.twig */
class __TwigTemplate_81ef1f5a59317591346c460ce1bb8524c7cc00c0faedb63c82c1a05deaae1bf3 extends Twig_Template
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
         <div class=\"row accordionHeader\">
             <div class=\"col-xs-2 accordionLabel\">
                 Incident ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-8\">
                
                 ";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array())) != 0)) {
            // line 9
            echo "                     ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array()), "name", array()), "html", null, true);
            echo "
                    
                 ";
        } else {
            // line 12
            echo "                    
                           
                        ";
            // line 14
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "server", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "server", array()), "name", array()), "html", null, true);
            echo "
                       
                ";
        }
        // line 17
        echo "             </div>
                
           ";
        // line 27
        echo "             ";
        // line 47
        echo "        </div>
      <div class=\"row accordionBody\">
            <div class=\"col-xs-6 accordionLine \">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Date de la demande
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "logDate", array()), "d/m/Y"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Date de prise en charge
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 65
        if ((null === $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "acknowledgeDate", array()))) {
            // line 66
            echo "                            Votre incident est en attente de prise en charge.
                        ";
        } else {
            // line 68
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "acknowledgeDate", array()), "d/m/Y"), "html", null, true);
            echo "
                        ";
        }
        // line 70
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Demandeur
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "requester", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "requester", array()), "lastName", array())), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Intervenant
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 89
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array())) != 0)) {
            // line 90
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array()), "lastName", array())), "html", null, true);
            echo "
                        ";
        } else {
            // line 92
            echo "                            Votre incident est en attente de prise en charge.
                        ";
        }
        // line 94
        echo "                            
                    </div>
                </div>
            </div>
           <div class=\"col-xs-6 accordionLine\">
              
                    <div class=\"row\">
                        <div class=\"col-xs-12 accordionSummaryHeader\">
                            Description
                        </div>
                        <div class=\"col-xs-12 accordionSummaryContent\">
                            ";
        // line 105
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "description", array()), 0, 90), "html", null, true);
        echo "...
                        </div>
                    </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                <div class=\"row\">
                    ";
        // line 111
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            // line 112
            echo "                    <div class=\"col-xs-9 toDetailedView\">
                        <a class=\"btn\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_assign", array("incidentId" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()))), "html", null, true);
            echo "\">Prendre en charge</a>
                    </div>
                    <div class=\"col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"#\">Fiche complète</a>
                    </div>
                    ";
        } else {
            // line 119
            echo "                        <div class=\"col-xs-offset-9 col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"#\">Fiche complète</a>
                    </div>
                    ";
        }
        // line 123
        echo "                </div>
            </div>
        </div>
   
       
  
     


    


";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 123,  176 => 119,  167 => 113,  164 => 112,  162 => 111,  153 => 105,  140 => 94,  136 => 92,  128 => 90,  126 => 89,  111 => 79,  100 => 70,  94 => 68,  90 => 66,  88 => 65,  75 => 55,  65 => 47,  63 => 27,  59 => 17,  48 => 14,  44 => 12,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
