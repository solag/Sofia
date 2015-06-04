<?php

/* A2FSofiaBundle:Incident:incidentstats.html.twig */
class __TwigTemplate_624d0eec2145c56bdbf074567ad7ffecf5441c96a212bc28ead51a0f55cdf394 extends Twig_Template
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
    <section class=\"col-xs-12\">
        <ul>
            <li class=\"ligneListe\">
                <div class=\"col-xs-6 statsColonneIncidents\">
                Nouveau(x)
                </div>
                <div class=\"col-xs-6 statsColonneNombre\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["newIncidents"]) ? $context["newIncidents"] : $this->getContext($context, "newIncidents"))), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ligneListe\">
                <div  class=\"col-xs-6 statsColonneIncidents\">
                Attribué(s)
                </div>
                <div class=\"col-xs-6 statsColonneNombre\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["assignedIncidents"]) ? $context["assignedIncidents"] : $this->getContext($context, "assignedIncidents"))), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ligneListe\">
               <div class=\"col-xs-6 statsColonneIncidents\">
               En attente
               </div>
               <div class=\"col-xs-6 statsColonneNombre\">
                   0
               </div>
            </li>
            
           
            <li class=\"ligneListe\">
                <div class=\"col-xs-6 statsColonneIncidents\">
                Clos
                </div>
                <div class=\"col-xs-6 statsColonneNombre\">
                    187
                </div>
            </li>
           
        </ul>
               
    </section>
        

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentstats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  29 => 9,  19 => 1,);
    }
}
