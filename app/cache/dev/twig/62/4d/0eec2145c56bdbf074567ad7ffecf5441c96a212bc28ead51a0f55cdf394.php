<?php

/* A2FSofiaBundle:Incident:incidentstats.html.twig */
class __TwigTemplate_624d0eec2145c56bdbf074567ad7ffecf5441c96a212bc28ead51a0f55cdf394 extends Twig_Template
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
    <section class=\"col-xs-12\">
        ";
        // line 3
        if (((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")) != 0)) {
            // line 4
            echo "        <ul>
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 6
                echo "            <li class=\"ligneListe\">
                <div class=\"col-xs-6 statsColonneIncidents\">
                Nouveau(x)
                </div>
                <div class=\"col-xs-6 statsColonneNombre\">
                    ";
                // line 11
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "
                </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "           
        </ul>
       ";
        } else {
            // line 18
            echo "            <div class=\"row messageVide\">
                Vous n'avez aucun incident.
            </div>
        ";
        }
        // line 22
        echo "    </section>
        

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:incidentstats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  54 => 18,  49 => 15,  39 => 11,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
