<?php

/* A2FSofiaBundle:Nav:clientmenu.html.twig */
class __TwigTemplate_94f49fd23c7e186127e50c4366bd1f04fc59d1a69e81c52a1b10af8ec6273a1a extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
    <ul class=\"menuBar\">
        <li class=\"col-xs-3\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_add");
        echo "\">Nouvel Incident</a>
        </li>
        <li class=\"col-xs-2\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_incident_full_list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\">Incidents</a>
        </li>
        <li class=\"col-xs-2\"> 
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_client_detail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
        echo "\">Demandeurs</a>
        </li>  
        <li class=\"col-xs-2\"> 
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_scope_list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "limit" => 5)), "html", null, true);
        echo "\">Périmètre</a>
            
        </li> 
    </ul> 
   
        <div class=\"col-xs-3 no-padding no-margin\">
            
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
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
            // line 22
            echo "                    <a id=\"menuContractType\" href =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_client_detail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
            echo "\">
                    <div class=\"row\">
                    <div class=\"col-xs-2 ";
            // line 24
            if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 1)) {
                echo " menuBoxContractType ";
            } else {
                echo " boxContractType ";
            }
            echo "\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "contractType", array()), "code", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-xs-10 ";
            // line 27
            if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 1)) {
                echo "menuBoxProgressBar ";
            } else {
                echo " boxProgressBar ";
            }
            echo "\">
                        ";
            // line 28
            $this->loadTemplate("A2FSofiaBundle:Global:progressbar.html.twig", "A2FSofiaBundle:Nav:clientmenu.html.twig", 28)->display($context);
            // line 29
            echo "                    </div>
                    </div>
                    </a>
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
        echo "                
            
        </div>
    
    </div>
</div>   
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Nav:clientmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  99 => 29,  97 => 28,  89 => 27,  84 => 25,  76 => 24,  70 => 22,  53 => 21,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
