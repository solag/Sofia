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
             <div class=\"col-xs-2 accordionLabel\">
                 ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "lastName", array())), "html", null, true);
        echo "
             </div>
             <div class=\"col-xs-offset-2 col-xs-2\">
                 ";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "REQUESTER")) {
            // line 8
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "position", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "trigraph", array()), "html", null, true);
            echo "
                ";
        }
        // line 12
        echo "             </div>
             ";
        // line 13
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "live", array())) {
            // line 14
            echo "             <div class=\"col-xs-offset-3 col-xs-1 accordionPicto\">
                 <img alt=\"Actif\" class=\"miniPicto statusPicto\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
            echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Actif
             </div>
             ";
        } else {
            // line 21
            echo "                 <div class=\"col-xs-offset-3 col-xs-1 accordionPicto\">
                    <img alt=\"Inactif\" class=\"miniPicto statusPicto\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusRed.png"), "html", null, true);
            echo "\" />
                </div>
                <div class=\"col-xs-1 accordionStatus\">
                    Inactif
                </div>
            ";
        }
        // line 27
        echo " 
        </div>
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
        // line 40
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
        // line 50
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
        // line 60
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
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Update.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
                </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 76
        if (($this->env->getExtension('security')->isGranted("ROLE_DBA") && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "REQUESTER"))) {
            // line 77
            echo "                ";
            $this->loadTemplate("A2FSofiaBundle::notes.html.twig", "A2FSofiaBundle:User:userview.html.twig", 77)->display($context);
            // line 78
            echo "                ";
        }
        // line 79
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
        return array (  146 => 79,  143 => 78,  140 => 77,  138 => 76,  128 => 69,  116 => 60,  103 => 50,  90 => 40,  75 => 27,  66 => 22,  63 => 21,  54 => 15,  51 => 14,  49 => 13,  46 => 12,  40 => 10,  34 => 8,  32 => 7,  24 => 4,  19 => 1,);
    }
}
