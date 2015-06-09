<?php

/* A2FSofiaBundle:Incident:incidentheader.html.twig */
class __TwigTemplate_cd899cc06f741827c55950852a5b536f86729042279a84bf0b495adb2e40f3ed extends Twig_Template
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
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoIncident\" class=\"picto\" alt=\"Incidents\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Repairs.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Incidents</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouvel Incident\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Add.png"), "html", null, true);
        echo "\" />
                                </a>
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
        return "A2FSofiaBundle:Incident:incidentheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  28 => 8,  19 => 1,);
    }
}
