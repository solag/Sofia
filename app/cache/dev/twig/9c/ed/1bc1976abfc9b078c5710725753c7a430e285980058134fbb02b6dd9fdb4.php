<?php

/* A2FSofiaBundle:ContractType:contracttypelist.html.twig */
class __TwigTemplate_9ced1bc1976abfc9b078c5710725753c7a430e285980058134fbb02b6dd9fdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:ContractType:contracttypelist.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12 sectionHeader\">
                    <div class=\"row\">
                        <div class=\"col-xs-11 no-padding\">
                            <div class=\"col-xs-1 boxPictoHeader boxPictoHeaderHorizontal\">
                                <img id=\"pictoContract\" class=\"picto\" alt=\"Contrats\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Contract.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-11\">
                                <h3>Types de contrats</h3>
                            </div>
                        </div>
                        <div class=\"col-xs-1 boxPictoAjouterHeader\">
                            <div class=\"col-xs-12 boxPictoAjouterHeader\">
                                <a href=\"#\">
                                    <img id=\"pictoAjouter\" class=\"picto\" alt=\"Nouveau type de contrat\" src=\"";
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
        // line 30
        echo "                       ";
        $this->loadTemplate("A2FSofiaBundle:ContractType:contracttypeview.html.twig", "A2FSofiaBundle:ContractType:contracttypelist.html.twig", 30)->display($context);
        // line 31
        echo "                   ";
        // line 32
        echo "            </section></div>
       </div>
   </div>    
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:ContractType:contracttypelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  67 => 31,  64 => 30,  51 => 19,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
