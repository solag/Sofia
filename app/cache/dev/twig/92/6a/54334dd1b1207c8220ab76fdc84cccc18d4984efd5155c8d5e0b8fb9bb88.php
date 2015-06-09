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
        // line 27
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    
    <div class=\"row\">
        ";
        // line 4
        $this->loadTemplate("A2FSofiaBundle:Incident:incidentheader.html.twig", "A2FSofiaBundle:Incident:incidentlist.html.twig", 4)->display($context);
        echo " 
                                
        <div class=\"row\">
            <section class=\"col-xs-12\">
                <div class=\"accordion\">
                ";
        // line 9
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
            // line 10
            echo "                    
                   ";
            // line 11
            $this->loadTemplate("A2FSofiaBundle:Incident:incidentview.html.twig", "A2FSofiaBundle:Incident:incidentlist.html.twig", 11)->display($context);
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
        // line 13
        echo "                </div>
            </section>
        </div>
        
    </div>
            ";
        // line 18
        if (((twig_length_filter($this->env, (isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents"))) > 5) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "a2fSofia_incident_full_list"))) {
            // line 19
            echo "                
        <div class=\"row\">
                <div class=\"col-xs-12 fullList\">
                    <a href=\"";
            // line 22
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
        return array (  92 => 22,  87 => 19,  85 => 18,  78 => 13,  62 => 11,  59 => 10,  42 => 9,  34 => 4,  30 => 2,  27 => 1,  22 => 27,  20 => 1,);
    }
}
