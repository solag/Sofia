<?php

/* A2FSofiaBundle:Incident:addincident.html.twig */
class __TwigTemplate_2a64f3ef00780111846fedb0c0917f7468a44c3c7f505f44388ddd29fa1c84f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("A2FSofiaBundle::layout.html.twig", "A2FSofiaBundle:Incident:addincident.html.twig", 1);
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
        echo " > <a href=\"";
        echo $this->env->getExtension('routing')->getPath("a2fSofia_incident_add");
        echo "\">Nouvel incident</a>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <section>
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), 'errors');
        echo "
            
            <div class=\"row\" id=\"loginForm\"> 
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "description", array()), 'label', array("label_attr" => array("class" => "col-xs-offset-3 col-xs-2"), "label" => "Description"));
        echo "
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "description", array()), 'widget', array("attr" => array("placeholder" => "Description de l'incident", "class" => "col-xs-4")));
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "description", array()), 'errors');
        echo "
                    </div>
                    <div class=\"row\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "database", array()), 'label', array("label_attr" => array("class" => "col-xs-offset-3 col-xs-2"), "label" => "database"));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "database", array()), 'widget', array("attr" => array("placeholder" => "Périmètre affecté", "class" => "col-xs-4")));
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), "database", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
        
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["incidentForm"]) ? $context["incidentForm"] : $this->getContext($context, "incidentForm")), 'form_end');
        echo "
    </section>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Incident:addincident.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  81 => 22,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  59 => 15,  51 => 10,  47 => 9,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
