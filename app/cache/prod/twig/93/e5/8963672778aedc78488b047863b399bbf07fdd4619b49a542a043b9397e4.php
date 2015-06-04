<?php

/* A2FSofiaBundle:Notification:notificationlist.html.twig */
class __TwigTemplate_93e58963672778aedc78488b047863b399bbf07fdd4619b49a542a043b9397e4 extends Twig_Template
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
        // line 4
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))) == 0)) {
            // line 5
            echo "              <div class=\"row messageVide\">
                    Vous n'avez aucune notification.
                </div>
            ";
        } else {
            // line 9
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 10
                echo "                ";
                $this->loadTemplate("A2FSofiaBundle:Notification:notificationview.html.twig", "A2FSofiaBundle:Notification:notificationlist.html.twig", 10)->display($context);
                // line 11
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
            ";
        }
        // line 13
        echo "        ";
        // line 50
        echo "         </section>   
         ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))) > 5)) {
            // line 52
            echo "          <div class=\"row\">
            <div class=\"col-xs-12 fullList\">
                <a href=\"#\">Liste complète</a>
            </div>
        </div>
          ";
        }
        // line 58
        echo "   
            
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Notification:notificationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 58,  77 => 52,  75 => 51,  72 => 50,  70 => 13,  53 => 11,  50 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
