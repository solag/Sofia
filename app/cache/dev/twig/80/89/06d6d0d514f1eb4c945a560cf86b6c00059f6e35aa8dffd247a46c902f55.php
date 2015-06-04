<?php

/* A2FSofiaBundle:Client:clientlist.html.twig */
class __TwigTemplate_808906d6d0d514f1eb4c945a560cf86b6c00059f6e35aa8dffd247a46c902f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Client:clientlist.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "A2FSofiaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader boxPictoHeaderHorizontal\">
                                <img id=\"pictoCompany\" class=\"picto\" alt=\"Clients\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Company.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Clients</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouveau client\" src=\"";
        // line 20
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
        // line 31
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
            // line 32
            echo "                       ";
            $this->loadTemplate("A2FSofiaBundle:Client:clientview.html.twig", "A2FSofiaBundle:Client:clientlist.html.twig", 32)->display($context);
            // line 33
            echo "                   ";
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
        // line 34
        echo "               </div>
            </section></div>
       </div>
       
   </div>    
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script type=\"text/javascript\">
    \$(document).ready(function() {
    \$( \".selector\" ).accordion();

    \$( \".accordion\" ).accordion();
    
});
</script>

";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Client:clientlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  110 => 41,  101 => 34,  87 => 33,  84 => 32,  67 => 31,  53 => 20,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
