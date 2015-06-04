<?php

/* A2FSofiaBundle:Incident:incidentdispatch.html.twig */
class __TwigTemplate_4337df08180993f08caf3c3dbb3579df7d842fc3182b31bb1c40c1a06c221cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Incident:incidentdispatch.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "A2FSofiaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoIncident\" class=\"picto\" alt=\"Incidents\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Repairs.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Incidents</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-offset-1 col-xs-4 btnChoixIncident\">
                    <a class=\"\" href=\"#\"><h4>Base de données</h4></a>
                </div>
            
                <div class=\"col-xs-offset-2 col-xs-4 btnChoixIncident\">
                    <a class=\"\" href=\"#\"><h4>Serveur</h4></a>
                </div>
            </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentdispatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
