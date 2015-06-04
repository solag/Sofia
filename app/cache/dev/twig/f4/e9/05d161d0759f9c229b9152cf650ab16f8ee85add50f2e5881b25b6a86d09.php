<?php

/* A2FSofiaBundle::modelelist.html.twig */
class __TwigTemplate_f4e905d161d0759f9c229b9152cf650ab16f8ee85add50f2e5881b25b6a86d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle::modelelist.html.twig", 1);
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
        echo "    <div class=\"row\">
       <div class=\"col-xs-12\">
           <div class=\"row\">
               <div class=\"col-xs-12 sectionHeader\">
                   <div id=\"boxPicto...\" class=\"col-xs-1\">
                       <img id=\"picto...\" class=\"picto\" alt=\"...\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/....png"), "html", null, true);
        echo "\" />
                   </div>
                   <div class=\"col-xs-11\">
                       <h3>Titre de la section</h3>
                   </div>
               </div>
           </div>
       </div>
       <div class=\"row\">
           <section class=\"col-xs-12\">
                   ";
        // line 20
        echo "                       ";
        $this->loadTemplate("A2FSofiaBundle:Répertoire:vue.html.twig", "A2FSofiaBundle::modelelist.html.twig", 20)->display($context);
        // line 21
        echo "                   ";
        // line 22
        echo "            </section></div>
       </div>
   </div>    
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle::modelelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  54 => 21,  51 => 20,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
