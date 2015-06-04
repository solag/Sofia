<?php

/* A2FSofiaBundle:Incident:incidentlist.html.twig */
class __TwigTemplate_926a54334dd1b1207c8220ab76fdc84cccc18d4984efd5155c8d5e0b8fb9bb88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoIncident\" class=\"picto\" alt=\"Incidents\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Repairs.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Incidents</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouvel Incident\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Add.png"), "html", null, true);
        echo "\" />
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <section class=\"col-xs-12\">
                <div class=\"accordion\">
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incidentsFive"]) ? $context["incidentsFive"] : $this->getContext($context, "incidentsFive")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 31
            echo "                   ";
            $this->loadTemplate("A2FSofiaBundle:Incident:incidentview.html.twig", "A2FSofiaBundle:Incident:incidentlist.html.twig", 31)->display($context);
            echo " 
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </section>
        </div>
        
    </div>
            ";
        // line 38
        if (((twig_length_filter($this->env, (isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents"))) > 5) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_incident_full_list"))) {
            // line 39
            echo "                
        <div class=\"row\">
                <div class=\"col-xs-12 fullList\">
                    <a href=\"";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "client", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_full_list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_full_list", array("id" => null));
            }
            echo "\">Liste complète</a>
                </div>
            </div>  
            ";
        }
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentlist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  109 => 39,  107 => 38,  100 => 33,  83 => 31,  66 => 30,  52 => 19,  40 => 10,  30 => 2,  27 => 1,  22 => 47,  20 => 1,);
    }
}
