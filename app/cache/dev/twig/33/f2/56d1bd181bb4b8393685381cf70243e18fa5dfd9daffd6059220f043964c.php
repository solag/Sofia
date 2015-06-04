<?php

/* A2FSofiaBundle:Incident:incidentfulllist.html.twig */
class __TwigTemplate_33f256d1bd181bb4b8393685381cf70243e18fa5dfd9daffd6059220f043964c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Incident:incidentfulllist.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo " > <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "client", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_full_list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_full_list", array("id" => null));
        }
        echo "\">Liste complète des incidents</a>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
    ";
        // line 9
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentlist.html.twig", "A2FSofiaBundle:Incident:incidentfulllist.html.twig", 9)->display($context);
        // line 10
        echo "                
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script type=\"text/javascript\">
    \$(document).ready(function() {
    \$( \".selector\" ).accordion();

    \$( \"#accordion\" ).accordion();
    
});
</script>

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentfulllist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  61 => 15,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
