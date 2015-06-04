<?php

/* A2FSofiaBundle:Global:clientlandingpage.html.twig */
class __TwigTemplate_44dcb23fe1ab117d6d82fe409657aac98af2518ff27a4fad47ee1f30a428bcba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Global:clientlandingpage.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_clientlandingpage", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
        echo " \">Accueil</a>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
  
<div class=\"col-xs-12\">
    <div class=\"row\">
        <div id=\"blocStats\" class=\"col-xs-3\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div id=\"boxPictoStats\" class=\"col-xs-1\">
                        <img id=\"pictoStats\" class=\"picto\" alt=\"Statistiques des incidents\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Stats.png"), "html", null, true);
        echo "\" />
                    </div>
                    <div id=\"boxStats\" class=\"col-xs-11\">
                        <h3>Aperçu</h3>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 24
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentstats.html.twig", "A2FSofiaBundle:Global:clientlandingpage.html.twig", 24)->display($context);
        // line 25
        echo "            </div>
        </div>

        <div id=\"blocMessages\" class=\"col-xs-offset-1 col-xs-8\">   
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div id=\"boxPictoMessage\" class=\"col-xs-1\">
                        <img id=\"pictoMessage\" class=\"picto\" alt=\"Messages\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Mail.png"), "html", null, true);
        echo "\" />
                    </div>
                    <div id=\"boxNotifications\" class=\"col-xs-11\">
                        <h3>Notifications</h3>
                    </div>
                </div>
            </div>
                <div class=\"row\">
                   ";
        // line 40
        $this->loadTemplate("A2FSofiaBundle:Notification:notificationlist.html.twig", "A2FSofiaBundle:Global:clientlandingpage.html.twig", 40)->display($context);
        // line 41
        echo "                </div>
            </div>
        </div> 
        <div class=\"row\">
          ";
        // line 45
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("A2FSofiaBundle:Incident:list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "limit" => 5)), array());
        // line 46
        echo "          
        
            
        
    </div>    
</div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
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
        return "A2FSofiaBundle:Global:clientlandingpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 55,  106 => 54,  96 => 46,  94 => 45,  88 => 41,  86 => 40,  75 => 32,  66 => 25,  64 => 24,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
