<?php

/* A2FSofiaBundle:User:userdetail.html.twig */
class __TwigTemplate_692f812c371a9a0c70a10646b3029ec81754a4b23c8fd39638624b80fc90dcf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:User:userdetail.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo " >  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_REQ")) {
            // line 5
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
            echo "\">Profil du demandeur</a>
                                                ";
        } else {
            // line 6
            echo "    
                                                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "DBA")), "html", null, true);
            echo "\">Profil du DBA</a>
                                                ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    
        
    <div class=\"row\">
       <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader\">
                                <img id=\"pictoUser\" class=\"picto\" alt=\"Profil demandeur\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/User.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                 <h3>";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            // line 25
            echo "                                        DBA
                                    ";
        } else {
            // line 27
            echo "                                        Demandeur
                                    ";
        }
        // line 29
        echo "                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"col-xs-12\">
        ";
        // line 37
        $this->loadTemplate("A2FSofiaBundle:User:userview.html.twig", "A2FSofiaBundle:User:userdetail.html.twig", 37)->display($context);
        // line 38
        echo "        </section>  
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:User:userdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  93 => 37,  83 => 29,  79 => 27,  75 => 25,  73 => 24,  67 => 21,  56 => 12,  53 => 11,  46 => 7,  43 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
