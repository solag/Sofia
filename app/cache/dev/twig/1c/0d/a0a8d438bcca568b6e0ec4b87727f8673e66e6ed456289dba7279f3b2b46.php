<?php

/* A2FSofiaBundle:Notification:notificationview.html.twig */
class __TwigTemplate_1c0da0a8d438bcca568b6e0ec4b87727f8673e66e6ed456289dba7279f3b2b46 extends Twig_Template
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
        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type", array()) == 1)) {
            // line 2
            echo "    <div id=\"colonnePictosMessages\" class=\"col-xs-1\">
        <div class=\"boxMiniPictoListeMessages\">
            <img id=\"miniPictoIncident\" class=\"miniPicto\" alt=\"Incident\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Repairs.png"), "html", null, true);
            echo "\" />
        </div>
    </div>
";
        } else {
            // line 8
            echo "    <div id=\"colonnePictosMessages\" class=\"col-xs-1\">
        <div class=\"boxMiniPictoListeMessages\">
            <img id=\"miniPictoIncident\" class=\"miniPicto\" alt=\"Contrat\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Contract.png"), "html", null, true);
            echo "\" />
        </div>
    </div>
";
        }
        // line 14
        echo " <div class=\"col-xs-11 message\">
    <div>
        ";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array()) . twig_localized_date_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "creationDate", array()), "medium", "none", "fr")), "html", null, true);
        echo "              
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Notification:notificationview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  43 => 14,  36 => 10,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
