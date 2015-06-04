<?php

/* A2FSofiaBundle:User:userview.html.twig */
class __TwigTemplate_cfb9dde7cc32a5e7e1e783b74245f26e4d9f57e905e07313fcb52aa4b29a7cff extends Twig_Template
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
         <div class=\"row accordionHeader\">
                ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "a2fSofia_user_detail")) {
            // line 4
            echo "            <div class=\"col-xs-1 accordionNeutral\">
             
            </div>
            ";
        }
        // line 8
        echo "             <div class=\"col-xs-2 accordionLabel\">
                 ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "lastName", array())), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-offset-2 col-xs-2\">
                 ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "REQUESTER")) {
            // line 13
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "position", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "trigraph", array()), "html", null, true);
            echo "
                ";
        }
        // line 17
        echo "             </div>
                ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_user_detail")) {
            // line 19
            echo "           
            
             ";
            // line 21
            if ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "live", array())) {
                // line 22
                echo "             <div class=\"col-xs-offset-3 col-xs-1 accordionPicto\">
                 <img alt=\"Actif\" class=\"miniPicto statusPicto\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
                echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Actif
             </div>
             ";
            } else {
                // line 29
                echo "                 <div class=\"col-xs-offset-3 col-xs-1 accordionPicto\">
                    <img alt=\"Inactif\" class=\"miniPicto statusPicto\" src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusRed.png"), "html", null, true);
                echo "\" />
                </div>
                <div class=\"col-xs-1 accordionStatus\">
                    Inactif
                </div>
            ";
            }
            // line 35
            echo " 
            ";
        }
        // line 37
        echo "        </div>
        <div class=\"row accordionBody\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-xs-11 accordionLine\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Téléphone fixe
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "landLinePhoneNumber", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                 <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Téléphone mobile
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "mobilePhoneNumber", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Email
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "email", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class=\"col-xs-1 boxPictoUpdate\">
                <a href=\"#\">
                    <img alt=\"Modifier\" class=\"miniPicto\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Update.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
                </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 85
        if (($this->env->getExtension('security')->isGranted("ROLE_DBA") && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "REQUESTER"))) {
            // line 86
            echo "                ";
            $this->loadTemplate("A2FSofiaBundle::notes.html.twig", "A2FSofiaBundle:User:userview.html.twig", 86)->display($context);
            // line 87
            echo "                ";
        }
        // line 88
        echo "            </div>
        </div>
    


    



";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:User:userview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 88,  162 => 87,  159 => 86,  157 => 85,  147 => 78,  135 => 69,  122 => 59,  109 => 49,  95 => 37,  91 => 35,  82 => 30,  79 => 29,  70 => 23,  67 => 22,  65 => 21,  61 => 19,  59 => 18,  56 => 17,  50 => 15,  44 => 13,  42 => 12,  34 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
