<?php

/* A2FSofiaBundle:Global:a2flandingpage.html.twig */
class __TwigTemplate_da26ad02ad6dbe3998512a9eb3bd9d1dd7c9b32d23c8aa6b72efa0fc581ac11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Global:a2flandingpage.html.twig", 1);
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
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("a2fSofia_a2flandingpage");
        echo "\">Accueil</a>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo " <div class=\"row\">
    
    ";
        // line 10
        $this->loadTemplate("A2FSofiaBundle:Contract:a2fcontractlist.html.twig", "A2FSofiaBundle:Global:a2flandingpage.html.twig", 10)->display($context);
        // line 11
        echo "    
    ";
        // line 12
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentlist.html.twig", "A2FSofiaBundle:Global:a2flandingpage.html.twig", 12)->display($context);
        echo "  
</div>
            
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script type=\"text/javascript\">
    \$(document).ready(function() {
    \$( \".selector\" ).accordion();

    \$( \".accordion\" ).accordion();
    
});
</script>

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Global:a2flandingpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  60 => 18,  52 => 12,  49 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
