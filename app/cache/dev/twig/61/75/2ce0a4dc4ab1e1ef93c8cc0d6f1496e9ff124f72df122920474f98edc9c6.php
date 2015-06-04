<?php

/* A2FSofiaBundle:Contract:a2fcontractlist.html.twig */
class __TwigTemplate_61752ce0a4dc4ab1e1ef93c8cc0d6f1496e9ff124f72df122920474f98edc9c6 extends Twig_Template
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
        // line 3
        echo "<div class=\"col-xs-12\">
    ";
        // line 4
        $this->loadTemplate("A2FSofiaBundle:Contract:contractsectionheader.html.twig", "A2FSofiaBundle:Contract:a2fcontractlist.html.twig", 4)->display($context);
        // line 5
        echo "</div>
<div class=\"row\">
    <section class=\"col-xs-12 \" >
        <div class=\"accordion\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 10
            echo "            ";
            $this->loadTemplate("A2FSofiaBundle:Contract:a2fcontractview.html.twig", "A2FSofiaBundle:Contract:a2fcontractlist.html.twig", 10)->display($context);
            // line 11
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    </section>
</div> 
 <div class=\"row\">
    <div class=\"col-xs-12 fullList\">
        <a href=\"#\">Liste complète</a>
    </div>
</div>


        
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Contract:a2fcontractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  50 => 11,  47 => 10,  30 => 9,  24 => 5,  22 => 4,  19 => 3,);
    }
}
