<?php

/* A2FSofiaBundle:Incident:incidentdetail.html.twig */
class __TwigTemplate_dae5ec45c60ce06c26fb730923c4b027e7fae5ab398d71aed8251c38ff1910fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Incident:incidentdetail.html.twig", 1);
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
        ";
        // line 5
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentheader.html.twig", "A2FSofiaBundle:Incident:incidentdetail.html.twig", 5)->display($context);
        // line 6
        echo "        
        <div class=\"row\">
            <section class=\"col-xs-12\">
                <div class=\"\">
                     ";
        // line 10
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentview.html.twig", "A2FSofiaBundle:Incident:incidentdetail.html.twig", 10)->display($context);
        echo " 
                </div>
            </section>
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
