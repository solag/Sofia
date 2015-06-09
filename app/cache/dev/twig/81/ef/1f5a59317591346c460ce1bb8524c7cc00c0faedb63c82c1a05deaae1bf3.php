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
             ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "a2fSofia_incident_detail")) {
            // line 4
            echo "            <div class=\"col-xs-1 accordionNeutral\">
             
            </div>
            ";
        }
        // line 8
        echo "             <div class=\"col-xs-2 accordionLabel\">
                 Incident ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-7\">
                
                 ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array())) != 0)) {
            // line 14
            echo "                     ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "database", array()), "name", array()), "html", null, true);
            echo "
                    
                 ";
        } else {
            // line 17
            echo "                    
                           
                        ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "server", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "server", array()), "name", array()), "html", null, true);
            echo "
                       
                ";
        }
        // line 22
        echo "             </div>
             
              
                
          ";
        // line 59
        echo "        </div>
      <div class=\"row accordionBody\">
          <div class=\"col-xs-12 accordionLine\">
                <div class=\"row\">
            <div class=\"col-xs-6  \">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Date de la demande
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "logDate", array()), "d/m/Y"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 \">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Date de prise en charge
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 79
        if ((null === $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "acknowledgeDate", array()))) {
            // line 80
            echo "                            Votre incident est en attente de prise en charge.
                        ";
        } else {
            // line 82
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "acknowledgeDate", array()), "d/m/Y"), "html", null, true);
            echo "
                        ";
        }
        // line 84
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 \">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Demandeur
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "requester", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "requester", array()), "lastName", array())), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 \">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Intervenant
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 103
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array())) != 0)) {
            // line 104
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dba", array()), "lastName", array())), "html", null, true);
            echo "
                        ";
        } else {
            // line 106
            echo "                            Votre incident est en attente de prise en charge.
                        ";
        }
        // line 108
        echo "                            
                    </div>
                </div>
            </div> 
            
            ";
        // line 113
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_incident_detail")) {
            // line 114
            echo "           <div class=\"col-xs-6\">
              
                    <div class=\"row\">
                        <div class=\"col-xs-12 accordionSummaryHeader\">
                            Description
                        </div>
                        <div class=\"col-xs-12 accordionSummaryContent\">
                           
                            ";
            // line 122
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "description", array()), 0, 90), "html", null, true);
            echo "...
                            
                        </div>
                    </div>
            </div>
            ";
        } else {
            // line 128
            echo "                <div class=\"col-xs-12 accordionLine\">
              
                    <div class=\"row accordionSummaryHeader\">
                            Description
                    </div>
                    <div class=\"row accordionSummaryContent\">

                        ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "description", array()), "html", null, true);
            echo "

                    </div>
                </div>
            ";
        }
        // line 140
        echo "           
                            
            <div class=\"col-xs-6 \">
                <div class=\"row\">
                    ";
        // line 144
        if (($this->env->getExtension('security')->isGranted("ROLE_DBA") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_incident_detail"))) {
            // line 145
            echo "                    <div class=\"col-xs-9 toDetailedView\">
                        <a class=\"btn\" href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_assign", array("incidentId" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()))), "html", null, true);
            echo "\">Prendre en charge</a>
                    </div>
                    <div class=\"col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_detail", array("id" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()))), "html", null, true);
            echo "\">Fiche complète</a>
                    </div>
                    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 151
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_incident_detail")) {
            // line 152
            echo "                        <div class=\"col-xs-offset-9 col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_detail", array("id" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id", array()))), "html", null, true);
            echo "\">Fiche complète</a>
                    </div>
                    ";
        }
        // line 156
        echo "                </div>
            </div>
                 </div>
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
        return array (  230 => 156,  224 => 153,  221 => 152,  219 => 151,  214 => 149,  208 => 146,  205 => 145,  203 => 144,  197 => 140,  189 => 135,  180 => 128,  171 => 122,  161 => 114,  159 => 113,  152 => 108,  148 => 106,  140 => 104,  138 => 103,  123 => 93,  112 => 84,  106 => 82,  102 => 80,  100 => 79,  87 => 69,  75 => 59,  69 => 22,  58 => 19,  54 => 17,  43 => 14,  41 => 13,  34 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
