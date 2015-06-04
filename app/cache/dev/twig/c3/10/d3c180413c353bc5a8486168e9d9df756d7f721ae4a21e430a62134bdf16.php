<?php

/* A2FSofiaBundle:Client:clientview.html.twig */
class __TwigTemplate_c310d3c180413c353bc5a8486168e9d9df756d7f721ae4a21e430a62134bdf16 extends Twig_Template
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
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "a2fSofia_client_detail")) {
            // line 5
            echo "            <div class=\"col-xs-1 accordionNeutral\">
             
            </div>
            ";
        }
        // line 9
        echo "             <div class=\"col-xs-2 accordionLabel\">
                 ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "companyName", array()), "html", null, true);
        echo "
             </div>
        ";
        // line 12
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "live", array())) {
            // line 13
            echo "             <div class=\"col-xs-offset-7 col-xs-1 accordionPicto\">
                 <img alt=\"Active\" class=\"miniPicto statusPicto\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
            echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Actif
             </div>
        ";
        } else {
            // line 20
            echo "            <div class=\"col-xs-offset-8 col-xs-1 accordionPicto\">
                 <img alt=\"Inactive\" class=\"miniPicto statusPicto\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusRed.png"), "html", null, true);
            echo "\" />
            </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Inactif
             </div>
        ";
        }
        // line 27
        echo "        </div>
        <div class=\"row accordionBody\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-xs-11 accordionLine\">
                         <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"row\">
                                        <div class=\"col-xs-12 accordionSummaryHeader\">
                                            Adresse
                                        </div>
                                        <div class=\"col-xs-12 accordionSummaryContent\">
                                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "postCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "town", array())), "html", null, true);
        echo "
                                        </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                 <div class=\"row\">
                                    
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Téléphone
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "phoneNumber", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            
                    <div class=\"col-xs-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 toDetailedView\">
                                <a href=\"#\"/>
                                    <img id=\"pictoUpdate\" class=\"miniPicto\" alt=\"Modifier le profil de l'entreprise\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Update.png"), "html", null, true);
        echo "\" />
                                </a>
                            </div>
                        </div>
                    </div>
            
            ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            echo "    
            <div class=\"row\">
                ";
            // line 71
            $this->loadTemplate("A2FSofiaBundle::notes.html.twig", "A2FSofiaBundle:Client:clientview.html.twig", 71)->display($context);
            // line 72
            echo "            </div>
            ";
        }
        // line 74
        echo "        </div>
       </div>  
      </div>  
        
   




";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Client:clientview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 74,  130 => 72,  128 => 71,  123 => 69,  114 => 63,  98 => 50,  80 => 39,  66 => 27,  57 => 21,  54 => 20,  45 => 14,  42 => 13,  40 => 12,  35 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
