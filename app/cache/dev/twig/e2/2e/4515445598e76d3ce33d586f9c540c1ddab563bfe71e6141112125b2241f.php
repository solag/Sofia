<?php

/* A2FSofiaBundle:Nav:adminmenu.html.twig */
class __TwigTemplate_e22e4515445598e76d3ce33d586f9c540c1ddab563bfe71e6141112125b2241f extends Twig_Template
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
        echo "    <ul>
        <li class=\"col-xs-3\">
            <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("a2fSofia_client_list");
        echo "\"> Clients </a>
        </li>
        <li class=\"col-xs-3\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_list");
        echo "\"> Incidents </a>
        </li>
        <li class=\"col-xs-3\"> 
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("a2fSofia_user_list");
        echo "\"> DBA </a>
        </li>  
        <li class=\"col-xs-3\"> 
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("a2fSofia_contracttype_list");
        echo "\"> Type de contrat </a>
        </li>  
    </ul>";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Nav:adminmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
