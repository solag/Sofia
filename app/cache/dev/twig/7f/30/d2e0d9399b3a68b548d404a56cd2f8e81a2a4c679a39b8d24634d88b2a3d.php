<?php

/* A2FSofiaBundle:Scope:scopelist.html.twig */
class __TwigTemplate_7f30d2e0d9399b3a68b548d404a56cd2f8e81a2a4c679a39b8d24634d88b2a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Scope:scopelist.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo " >  <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_scope_list", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "limit" => 5)), "html", null, true);
        echo "\">Périmètre</a>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
       <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoBase\" class=\"picto\" alt=\"Bases de données\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/DB.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Bases de données</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouvelle base de données\" src=\"";
        // line 22
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
        // line 32
        if ((twig_length_filter($this->env, (isset($context["dbs"]) ? $context["dbs"] : $this->getContext($context, "dbs"))) != 0)) {
            // line 33
            echo "\t\t\t\t<div class=\"accordion\">
                    ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dbs"]) ? $context["dbs"] : $this->getContext($context, "dbs")));
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
                // line 35
                echo "                        ";
                $this->loadTemplate("A2FSofiaBundle:Scope:scopeview.html.twig", "A2FSofiaBundle:Scope:scopelist.html.twig", 35)->display($context);
                // line 36
                echo "                    ";
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
            // line 37
            echo "\t\t\t\t</div>
                ";
        } else {
            // line 39
            echo "                    Vous n'avez aucune base de données enregistrée.
                ";
        }
        // line 41
        echo "            </section>
       </div>
   </div> 
    <div class=\"row\">
            <div class=\"col-xs-12 fullList\">
                <a href=\"#\">Liste complète</a>
            </div>
    </div>             
                
                
    <div class=\"row\">
       <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoBase\" class=\"picto\" alt=\"Serveurs\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/server.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Serveurs</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouvelle base de données\" src=\"";
        // line 67
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
            <section class=\"col-xs-12 \">
                ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["servers"]) ? $context["servers"] : $this->getContext($context, "servers"))) != 0)) {
            // line 78
            echo "                    <div class=\"accordion\">
                    ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) ? $context["servers"] : $this->getContext($context, "servers")));
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
                // line 80
                echo "                        ";
                $this->loadTemplate("A2FSofiaBundle:Scope:scopeview.html.twig", "A2FSofiaBundle:Scope:scopelist.html.twig", 80)->display($context);
                // line 81
                echo "                    ";
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
            // line 82
            echo "                    </div>
                ";
        } else {
            // line 84
            echo "                    <div class=\"row messageVide\">
                        Vous n'avez aucun serveur enregistré.
                    </div>
                ";
        }
        // line 88
        echo "            </section>
       </div>
        <div class=\"row\">
            <div class=\"col-xs-12 fullList\">
                <a href=\"#\">Liste complète</a>
            </div>
        </div>
   </div> 
";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
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
        return "A2FSofiaBundle:Scope:scopelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 99,  231 => 98,  219 => 88,  213 => 84,  209 => 82,  195 => 81,  192 => 80,  175 => 79,  172 => 78,  170 => 77,  157 => 67,  145 => 58,  126 => 41,  122 => 39,  118 => 37,  104 => 36,  101 => 35,  84 => 34,  81 => 33,  79 => 32,  66 => 22,  54 => 13,  45 => 6,  42 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
