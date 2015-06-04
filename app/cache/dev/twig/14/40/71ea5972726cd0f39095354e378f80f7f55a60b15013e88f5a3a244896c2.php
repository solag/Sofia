<?php

/* A2FSofiaBundle:Client:clientdetail.html.twig */
class __TwigTemplate_144071ea5972726cd0f39095354e378f80f7f55a60b15013e88f5a3a244896c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Client:clientdetail.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_client_detail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
        }
        echo "\">Profil de l'entreprise</a>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
        
    <div class=\"row\">
       <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoCompany\" class=\"picto\" alt=\"Profil client\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Company.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                 <h3>Entreprise</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 28
        $this->loadTemplate("A2FSofiaBundle:Client:clientview.html.twig", "A2FSofiaBundle:Client:clientdetail.html.twig", 28)->display($context);
        // line 29
        echo "          
    </div>
        ";
        // line 31
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("A2FSofiaBundle:Contract:list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), array());
        // line 32
        echo "        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("A2FSofiaBundle:User:list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "type" => "REQUESTER")), array());
        // line 33
        echo "        
";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
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
        return "A2FSofiaBundle:Client:clientdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  88 => 36,  83 => 33,  80 => 32,  78 => 31,  74 => 29,  72 => 28,  58 => 17,  47 => 8,  44 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
