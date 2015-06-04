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
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
         <div class=\"row accordionHeader\">
             <div class=\"col-xs-2 accordionLabel\">
                 Incident ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-8\">
                
                 ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "database", array())) != 0)) {
            // line 10
            echo "                     ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "database", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "database", array()), "name", array()), "html", null, true);
            echo "
                    
                 ";
        } else {
            // line 13
            echo "                    
                           
                        ";
            // line 15
            if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "server", array()), "client", array()), "companyName", array()), "html", null, true);
                echo " - ";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "server", array()), "name", array()), "html", null, true);
            echo "
                       
                ";
        }
        // line 18
        echo "             </div>
                
                <div class=\"col-xs-1 accordionPicto\">
                    <img alt=\"Clos\" class=\"miniPicto statusPicto\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"col-xs-1 accordionStatus\">
                    Clos
                </div>
";
        // line 28
        echo "              
                
            ";
        // line 46
        echo "        </div>
      <div class=\"row accordionBody\">
            <div class=\"col-xs-6 accordionLine \">
                <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Date de la demande
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "logDate", array()), "d/m/Y"), "html", null, true);
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
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "acknowledgeDate", array()), "d/m/Y"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                 <div class=\"row\">
                    <div class=\"col-xs-12 accordionSummaryHeader\">
                        Demandeur
                    </div>
                    <div class=\"col-xs-12 accordionSummaryContent\">
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "requester", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "requester", array()), "lastName", array())), "html", null, true);
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
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "dba", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "dba", array()), "lastName", array())), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "description", array()), 0, 90), "html", null, true);
        echo "...
                        </div>
                    </div>
            </div>
            <div class=\"col-xs-6 accordionLine\">
                <div class=\"row\">
                    ";
        // line 101
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            // line 102
            echo "                    <div class=\"col-xs-9 toDetailedView\">
                        <a class=\"btn\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_assign", array("incidentId" => $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()))), "html", null, true);
            echo "\">Prendre en charge</a>
                    </div>
                    <div class=\"col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"#\">Fiche complète</a>
                    </div>
                    ";
        } else {
            // line 109
            echo "                        <div class=\"col-xs-offset-9 col-xs-3 toDetailedView\">
                        <a class=\"btn\" href=\"#\">Fiche complète</a>
                    </div>
                    ";
        }
        // line 113
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
        return array (  173 => 113,  167 => 109,  158 => 103,  155 => 102,  153 => 101,  144 => 95,  128 => 84,  113 => 74,  100 => 64,  87 => 54,  77 => 46,  73 => 28,  65 => 21,  60 => 18,  49 => 15,  45 => 13,  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
