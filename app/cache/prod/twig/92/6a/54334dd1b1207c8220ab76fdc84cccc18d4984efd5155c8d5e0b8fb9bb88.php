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
    }

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
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["incident"]) {
            // line 30
            echo "                   ";
            $this->loadTemplate("A2FSofiaBundle:Incident:incidentview.html.twig", "A2FSofiaBundle:Incident:incidentlist.html.twig", 30)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incident'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </section>
        </div>
        
    </div>
                
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentlist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  78 => 30,  61 => 29,  48 => 19,  36 => 10,  26 => 2,  20 => 1,);
    }
}
