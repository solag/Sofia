<?php

/* A2FSofiaBundle:Nav:dbamenu.html.twig */
class __TwigTemplate_14fdb97c594c9ce277dbe74559041f5acd9041fb1abe5732fe95e1d0bb164ba7 extends Twig_Template
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
        <li class=\"col-xs-4\">
            <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("a2fSofia_client_list");
        echo "\"> Clients </a>
        </li>
        <li class=\"col-xs-4\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_list");
        echo "\"> Incidents </a>
        </li>
        <li class=\"col-xs-4\"> 
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("a2fSofia_user_list");
        echo "\"> DBA </a>
        </li>  
    </ul>";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Nav:dbamenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
