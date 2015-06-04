<?php

/* A2FSofiaBundle:Contract:contractlist.html.twig */
class __TwigTemplate_b787e9afa0f86b5373756ed516654b06bed411a73cb489c814e5415b63e8e5b1 extends Twig_Template
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
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 3
        $this->loadTemplate("A2FSofiaBundle:Contract:contractsectionheader.html.twig", "A2FSofiaBundle:Contract:contractlist.html.twig", 3)->display($context);
        // line 4
        echo "            <section class=\"col-xs-12\">
                <div class=\"accordion\">
            ";
        // line 6
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
            // line 7
            echo "                ";
            $this->loadTemplate("A2FSofiaBundle:Contract:contractview.html.twig", "A2FSofiaBundle:Contract:contractlist.html.twig", 7)->display($context);
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                </div>
            </section>
        </div>
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
        return "A2FSofiaBundle:Contract:contractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  49 => 8,  46 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
