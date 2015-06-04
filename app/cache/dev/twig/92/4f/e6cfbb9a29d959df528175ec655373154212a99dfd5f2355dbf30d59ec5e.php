<?php

/* A2FSofiaBundle:Scope:scopeview.html.twig */
class __TwigTemplate_924fe6cfbb9a29d959df528175ec655373154212a99dfd5f2355dbf30d59ec5e extends Twig_Template
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
            
            
            
             <div class=\"col-xs-1 accordionLabel\">
                 ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "name", array()), "html", null, true);
        echo "
             </div>
        ";
        // line 11
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "live", array())) {
            // line 12
            echo "             <div class=\"col-xs-offset-8 col-xs-1 accordionPicto\">
                 <img alt=\"Active\" class=\"miniPicto statusPicto\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusGreen.png"), "html", null, true);
            echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Active
             </div>
        ";
        } else {
            // line 19
            echo "            <div class=\"col-xs-offset-8 col-xs-1 accordionPicto\">
                 <img alt=\"Inactive\" class=\"miniPicto statusPicto\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/statusRed.png"), "html", null, true);
            echo "\" />
             </div>
             <div class=\"col-xs-1 accordionStatus\">
                 Inactive
             </div>
        ";
        }
        // line 26
        echo "        </div>
        <div class=\"row accordionBody\">
           
                    <div class=\"col-xs-11 accordionLine\"
                         <div class=\"row\">
                            <div class=\"col-xs-6 accordionLine\">
                                <div class=\"row\">
                                    ";
        // line 33
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "server", array(), "any", true, true)) {
            // line 34
            echo "                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Serveur
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "server", array()), "name", array()), "html", null, true);
            echo "
                                    </div>
                                    ";
        } else {
            // line 41
            echo "                                         <div class=\"col-xs-12 accordionSummaryHeader\">
                                            Bases de données
                                        </div>
                                        <div class=\"col-xs-12 accordionSummaryContent\">
                                            <ul>
                                            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dbs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["db"]) {
                // line 47
                echo "                                                <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["db"], "name", array()), "html", null, true);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 52
        echo "                                </div>
                            </div>
                            <div class=\"col-xs-6 accordionLine\">
                                 <div class=\"row\">
                                    ";
        // line 56
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "dbms", array(), "any", true, true)) {
            // line 57
            echo "                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Version
                                    </div>
                                
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "dbms", array()), "name", array()), "html", null, true);
            echo "
                                    </div>
                                ";
        } else {
            // line 65
            echo "                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Système d'exploitation
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "os", array()), "name", array()), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        // line 72
        echo "                                </div>
                            </div>
                            <div class=\"col-xs-6 accordionLine\">
                                 <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Criticité
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "criticality", array()), "level", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6 accordionLine\">
                                 <div class=\"row\">
                                    <div class=\"col-xs-12 accordionSummaryHeader\">
                                        Taille
                                    </div>
                                    <div class=\"col-xs-12 accordionSummaryContent\">
                                        ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "size", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 106
        echo "                        </div>
                    <div class=\"col-xs-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 toDetailedView\">
                                <a href=\"#\"/>
                                    <img id=\"pictoUpdate\" class=\"miniPicto\" alt=\"Modifier la base de données\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Update.png"), "html", null, true);
        echo "\" />
                                </a>
                            </div>
                        </div>
                    </div>
                
            <div class=\"row\">
                ";
        // line 119
        echo "                ";
        $this->loadTemplate("A2FSofiaBundle::notes.html.twig", "A2FSofiaBundle:Scope:scopeview.html.twig", 119)->display($context);
        // line 120
        echo "            </div>
        </div>
        
        

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Scope:scopeview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 120,  188 => 119,  178 => 111,  171 => 106,  164 => 90,  151 => 80,  141 => 72,  135 => 69,  129 => 65,  123 => 62,  116 => 57,  114 => 56,  108 => 52,  103 => 49,  94 => 47,  90 => 46,  83 => 41,  77 => 38,  71 => 34,  69 => 33,  60 => 26,  51 => 20,  48 => 19,  39 => 13,  36 => 12,  34 => 11,  29 => 9,  19 => 1,);
    }
}
